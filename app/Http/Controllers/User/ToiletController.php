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
    $query = $request->query('location');
    $toilets = Toilet::query();

    if ($query) {
        $toilets->where('location', 'like', '%' . $query . '%');
    }

    $toilets = $toilets->paginate(10);

    if ($request->ajax()) {
        return view('user.toilets.toilet_table', ['toilets' => $toilets])->render();
    }

    return view('user.toilets.index', ['toilets' => $toilets]);
}

    public function create()
    {
        $toilets = Toilet::all(); 
        return view('user.toilets.create', ['toilets' => $toilets ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $rules = [
            'point' => 'required|regex:/^POINT \(\s*-?\d+(\.\d+)?\s*,\s*-?\d+(\.\d+)?\s*\)$/',
            'title' => 'required|string|min:2|max:150',
            'type' => 'required|in:Public Toilet,Private Toilet',
            'description' => 'required|string|min:2|max:255',
            'location' => 'required|string|min:2|max:255',
            'accessibility' => 'required|string|min:2|max:1000', 
            'opening_hours' => 'nullable|string|min:2|max:1000'
        ];
        
        $messages = [
            'point.required' => 'The point field is required.',
            'point.regex' => 'The point field must be in the format "POINT (longitude latitude)".',
            'title.required' => 'The title field is required.',
            'type.required' => 'The type field is required.',
            'type.in' => 'Invalid type selected.',
            'description.required' => 'The description field is required.',
            'location.required' => 'The location field is required.',
            'accessibility.required' => 'The accessibility field is required.',
        ];
        

        // Validate the request data
        $request->validate($rules, $messages);

        DB::beginTransaction();

        try {
            // Create a new Toilet instance and fill it with request data
            $toilet = Toilet::create($request->only([
                'point', 'title', 'type', 'description', 'location', 'accessibility', 'opening_hours'
            ]));

            // Save the toilet data to CSV
            $this->saveToCsv($toilet);

            // Commit the transaction
            DB::commit();

            // Redirect back to the 'toilets.index' route with a success message
            return redirect()->route('admin.toilets.index')->with('status', 'Created a new toilet');
        } catch (\Exception $e) {
            // Rollback the transaction if an exception occurs
            DB::rollback();

            // Log the error or handle it accordingly
            Log::error('Error storing toilet data: ' . $e->getMessage());

            // Redirect back to the form with an error message
            return redirect()->back()->withInput()->withErrors(['error' => 'Failed to create a new toilet']);
        }
    }

    private function saveToCsv(Toilet $toilet): void
    {
        // Define the CSV file path
        $csvFilePath = storage_path('app/toilets.csv');

        // Prepare the data to append to the CSV file
        $csvData = [
            $toilet->id,
            "POINT ({$toilet->point})",
            $toilet->title,
            $toilet->type,
            $toilet->description,
            $toilet->location,
            $toilet->accessibility,
            $toilet->opening_hours,
            $toilet->created_at,
            $toilet->updated_at,
        ];

        // Append the data to the CSV file
        Storage::append($csvFilePath, implode(',', $csvData));
    }

    public function show(string $id)
    {
        $toilet = Toilet::findOrFail($id);
        return view('user.toilets.show')->with('toilet', $toilet);
    }
}
   



