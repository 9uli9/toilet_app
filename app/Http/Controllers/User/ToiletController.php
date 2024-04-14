<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Toilet;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ToiletController extends Controller
{
    // Shows all drivers
    public function index(Request $request)
    {
        $toilets = Toilet::query();
        $toilets = $toilets->paginate(10);
        return view('user.toilets.index', ['toilets' => $toilets]);
    }

    public function create()
    {
        $toilets = Toilet::all();
        return view('user.toilets.create', ['toilets' => $toilets]);
    }

    public function store(Request $request): RedirectResponse
    {
        $rules = [
            'WKT' => 'required|regex:/^POINT\s*\(\s*-?\d+(\.\d+)?\s+-?\d+(\.\d+)?\s*\)$/',
            'title' => 'required|string|min:2|max:150',
            'type' => 'required|in:Public Toilet,Private Toilet',
            'description' => 'required|string|min:2|max:255',
            'location' => 'required|string|min:2|max:255',
            'accessibility' => 'required|string|min:2|max:1000',
            'opening_hours' => 'nullable|string|min:2|max:1000',
            'toilet_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ];

        $messages = [
            'WKT.required' => 'The POINT field is required.',
            'WKT.regex' => 'The POINT field must be in the format "POINT (longitude latitude)".',
            'title.required' => 'The title field is required.',
            'type.required' => 'The type field is required.',
            'type.in' => 'Invalid type selected.',
            'description.required' => 'The description field is required.',
            'location.required' => 'The location field is required.',
            'accessibility.required' => 'The accessibility field is required.',
        ];


        // Validate the request data
        $request->validate($rules, $messages);

       // Create a new Toilet instance
$toilet = new Toilet();

// Store the uploaded image file and get the file name
if ($request->hasFile('toilet_image')) {
    $toilet_image = $request->file('toilet_image');
    $filename = date('Y-m-d-His') . '_' . $request->title . '.' . $toilet_image->getClientOriginalExtension();
    $toilet_image->storeAs('public/images', $filename);
    $toilet->toilet_image = $filename;
} else {
    // Set a default image filename if no file is uploaded
    $toilet->toilet_image = 'toilet_image.png';
}



        
        DB::beginTransaction();
        
        try {
            // Fill the Toilet instance with request data and save it to the database
            $toilet->fill($request->only([
                'WKT', 'title', 'type', 'description', 'location', 'accessibility', 'opening_hours','toilet_image'
            ]))->save();
        
            $this->saveToCsv($toilet);
    
            DB::commit();

            return redirect()->route('user.toilets.show', $toilet->id)->with('status', 'Toilet created successfully.');
        } catch (\Exception $e) {
    
            DB::rollback();
            Log::error('Error storing toilet data: ' . $e->getMessage());
            return redirect()->back()->withInput()->withErrors(['error' => 'Failed to create a new toilet']);
        }
    }

    private function saveToCsv(Toilet $toilet): void
    {
        // Define the CSV file path
        $csvFilePath = storage_path('app/toilets.csv');
    
        // Check if the file exists, if not, create an empty file
        if (!file_exists($csvFilePath)) {
            touch($csvFilePath); 
        }
    
        // Prep data to be written 
        $csvData = [
            "{$toilet->WKT}",
            $toilet->id,
            $toilet->title,
            $toilet->type,
            $toilet->description,
            $toilet->location,
            $toilet->accessibility,
            $toilet->opening_hours,
            $toilet->toilet_image ? $toilet->toilet_image : 'toilet_image.png', // Use default image filename if toilet_image is empty
        ];
    
        // Convert to CSV format
        $csvContent = implode(',', $csvData) . "\n";
    
        // Write to the CSV file
        file_put_contents($csvFilePath, $csvContent, FILE_APPEND);
    
        //File permissions 
        chmod($csvFilePath, 0644);
    }


    
    public function show(string $id)
    {
        $toilet = Toilet::findOrFail($id);
        return view('user.toilets.show')->with('toilet', $toilet);
    }



    public function edit(string $id)
    {
        // Find the toilet by its ID
        $toilet = Toilet::findOrFail($id);
        
        // Render the 'edit' view and pass the toilet data to the view
        return view('user.toilets.edit', ['toilet' => $toilet]);
    }
    


    public function update(Request $request, string $id)
    {

        $rules = [
            'WKT' => 'required|regex:/^POINT\s*\(\s*-?\d+(\.\d+)?\s+-?\d+(\.\d+)?\s*\)$/',
            'title' => 'required|string|min:2|max:150',
            'type' => 'required|in:Public Toilet,Private Toilet',
            'description' => 'required|string|min:2|max:255',
            'location' => 'required|string|min:2|max:255',
            'accessibility' => 'required|string|min:2|max:1000',
            'opening_hours' => 'nullable|string|min:2|max:1000',
            'toilet_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|',
        ];

        $messages = [
            'WKT.required' => 'The POINT field is required.',
            'WKT.regex' => 'The POINT field must be in the format "POINT (longitude latitude)".',
            'title.required' => 'The title field is required.',
            'type.required' => 'The type field is required.',
            'type.in' => 'Invalid type selected.',
            'description.required' => 'The description field is required.',
            'location.required' => 'The location field is required.',
            'accessibility.required' => 'The accessibility field is required.',
        ];

        $request->validate($rules, $messages);
    
        $toilet = Toilet::findOrFail($id);

    // Update toilet instance with new data
    $toilet->fill($request->only([
        'WKT', 'title', 'type', 'description', 'location', 'accessibility', 'opening_hours'
    ]));

    // Check for a new image
    if ($request->hasFile('toilet_image')) {
        // Save new image
        $newToiletImage = $request->file('toilet_image');
        $filename = date('Y-m-d-His') . '_' . $request->title . '.' . $newToiletImage->getClientOriginalExtension();
        $newToiletImage->storeAs('public/images', $filename);

        // Update toilet image filename
        $toilet->toilet_image = $filename;
    }

    // Update CSV
    $this->updateCsv($toilet);

    // Save changes to database
    $toilet->save();

    return redirect()->route('admin.toilets.index')->with('status', 'Updated toilet');
}

private function updateCsv(Toilet $toilet)
{
    // Define the CSV file path
    $csvFilePath = storage_path('app/toilets.csv');

    // Read existing CSV content
    $csvData = file($csvFilePath);

    // Find and replace the line corresponding to the updated toilet
    foreach ($csvData as $key => $line) {
        $data = str_getcsv($line);
        if ($data[0] == $toilet->WKT) { // Changed from $data[0] == $toilet->id
            $csvData[$key] = $toilet->toCsv() . "\n";
            break;
        }
    }

    // Write updated CSV content back to the file
    file_put_contents($csvFilePath, implode('', $csvData));

    // Adjust file permissions if necessary
    chmod($csvFilePath, 0644);
}

public function destroy(string $id)
{
    $toilet = Toilet::findOrFail($id);

    // Delete from CSV
    $this->deleteFromCsv($toilet);

    // Delete from database
    $toilet->delete();

    return redirect()->route('admin.toilets.index')->with('status', 'Toilet deleted successfully!');
}

private function deleteFromCsv(Toilet $toilet)
{
    // Define the CSV file path
    $csvFilePath = storage_path('app/toilets.csv');

    // Read existing CSV content
    $csvData = file($csvFilePath);

    // Remove the line corresponding to the deleted toilet
    foreach ($csvData as $key => $line) {
        $data = str_getcsv($line);
        if ($data[0] == $toilet->id) {
            unset($csvData[$key]);
            break;
        }
    }

    // Write updated CSV content back to the file
    file_put_contents($csvFilePath, implode('', $csvData));

    // Adjust file permissions if necessary
    chmod($csvFilePath, 0644);
}
}