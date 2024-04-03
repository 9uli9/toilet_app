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
        return view('user.toilets.create', ['toilets' => $toilets]);
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
            'opening_hours' => 'nullable|string|min:2|max:1000',
            'toilet_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
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

        if ($request->hasFile('toilet_image')) {
            $toilet_image = $request->file('toilet_image');
            $filename = date('Y-m-d-His') . '_' . $request->title . '.' . $toilet_image->getClientOriginalExtension();
            $toilet_image->storeAs('public/images', $filename);
            $toilet = new Toilet();
            $toilet->toilet_image = $filename;
        } else {
            // If there's no toilet_image in the request, instantiate a new Toilet
            $toilet = new Toilet();
        }
        
        DB::beginTransaction();
        
        try {
            // Fill the Toilet instance with request data and save it to the database
            $toilet->fill($request->only([
                'point', 'title', 'type', 'description', 'location', 'accessibility', 'opening_hours','toilet_image'
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
    
        // Check if the file exists, if not, Creating Empty File
        if (!file_exists($csvFilePath)) {
            touch($csvFilePath); 
        }
    
        // Prep data to be written 
        $csvData = [
            $toilet->id,
            "POINT ({$toilet->point})",
            $toilet->title,
            $toilet->type,
            $toilet->description,
            $toilet->location,
            $toilet->accessibility,
            $toilet->opening_hours,
            $toilet->toilet_image,
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
}
