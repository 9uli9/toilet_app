<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Race;
use App\Models\Car;
use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Auth;

class RaceController extends Controller
{
    // Shows all races
    public function index()
    {
        // // Retrieve all races from the database
        // $races = Race::all();

        // // Render the 'races.index' view and pass the races data
        // return view('admin.races.index', [
        //     'races' => $races
        // ]);

        $races = Race::paginate(10);
        return view('admin.races.index')->with('races', $races);
    }

    // Show the create race form
    public function create()
    {
        // Retrieve all races from the database
        $races = Race::all(); 
    
        // Render the 'races.create' view and pass the races data
        return view('admin.races.create', [
            'races' => $races, 
        ]);
    }

    // Store a new race
    public function store(Request $request): RedirectResponse
    {
        // Define validation rules and custom error messages
        $rules = [
            'title' => 'required|string|min:2|max:150',
            'location' => 'required|string|min:2|max:150',
            'difficulty' => 'required|in:Beginner,Intermediate,Expert',
            'max_capacity' => 'required|integer', 
            'start_date' => 'required|date', 

        ];
    
        $messages = [
            'title.required' => 'Title is required',
            'location.required' => 'Location is required',
            'difficulty.required' => 'Difficulty is required',
            'difficulty.in' => 'Invalid Difficulty',
            'max_capacity.required' => 'Maximum Capacity is required',
            'start_date.required' => 'Start Date is required',

        ];

        // Validate the request data
        $request->validate($rules, $messages);

        // Create a new Race instance and fill it with request data
        $race = new Race;
        $race->title = $request->title;
        $race->location = $request->location;
        $race->difficulty = $request->difficulty;
        $race->max_capacity = $request->max_capacity; 
        $race->start_date = $request->start_date;

        // Save the race to the database
        $race->save();

        // Redirect back to the 'races.index' route with a success message
        return redirect()->route('admin.races.index')->with('status', 'Created a new Race');
    }

    // Show details of a specific race
    public function show(string $id)
    {
        // Find the race by its ID
        $race = Race::findOrFail($id);

        // Render the 'races.show' view and pass the race data
        return view('admin.races.show', [
            'race' => $race
        ]);
    }

    // Edit a specific race
    public function edit(string $id)
    {
        // Find the race by its ID
        $race = Race::findOrFail($id);

        // Render the 'races.edit' view and pass the race data
        return view('admin.races.edit', [
            'race' => $race
        ]);
    }

    // Update an existing race
    public function update(Request $request, string $id)
    {


        // Define validation rules and custom error messages
        $rules = [
            'title' => 'required|string|min:2|max:150',
            'location' => 'required|string|min:2|max:150',
            'difficulty' => 'required|in:Beginner,Intermediate,Expert',
            'max_capacity' => 'required|integer', 
            'start_date' => 'required|date', 

        ];
    
        $messages = [
            'title.required' => 'Title is required',
            'location.required' => 'Location is required',
            'difficulty.required' => 'Difficulty is required',
            'difficulty.in' => 'Invalid Difficulty',
            'max_capacity.required' => 'Maximum Capacity is required',
            'start_date.required' => 'Start Date is required',

        ];

    
        // Validate the request data
        $request->validate($rules, $messages);
    
        // dd($request);

        // Find the race by its ID
        $race = Race::findOrFail($id);
        $race->title = $request->title;
        $race->location = $request->location;
        $race->difficulty = $request->difficulty;
        $race->max_capacity = $request->max_capacity; 
        $race->start_date = $request->start_date;

        // Save the updated race to the database
        $race->save();
    
        // Set old input manually
        $request->flash();
    
        // Redirect back to the 'races.index' route with a success message
        return redirect()->route('admin.races.index')->with('status', 'Updated Race');
    }
    

    // Delete a specific race
    public function destroy(string $id)
    {
        // Find the race by its ID
        $race = Race::findOrFail($id);

        // Delete the race
        $race->delete();

        // Redirect back to the 'races.index' route with a success message
        return redirect()->route('admin.races.index')->with('status', 'Selected race deleted successfully!');
    }
}
