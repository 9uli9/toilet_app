<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Toilet;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Auth;

class ToiletController extends Controller
{
    public function index()
    {
        $toilets = Toilet::paginate(10);
        return view('admin.toilets.index', ['toilets' => $toilets ]);
    }

    public function create()
    {
        $toilets = Toilet::all(); 
        return view('admin.toilets.create', ['toilets' => $toilets ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $rules = [
            'title' => 'required|string|min:2|max:150',
            'type' => 'required|in:Public,Private', 
            'description' => 'required|string|min:2|max:255',
            'location' => 'required|string|min:2|max:255',
            'accessibility' => 'required|string|min:2|max:1000', 
            'link' => 'required|url|max:1000', 
            'opening_hours' => 'nullable|string|min:2|max:1000'
        ];

        $messages = [
            'title.required' => 'The title field is required.',
            'type.required' => 'The type field is required.',
            'type.in' => 'Invalid type selected.',
            'description.required' => 'The description field is required.',
            'location.required' => 'The location field is required.',
            'accessibility.required' => 'The accessibility field is required.',
            'link.url' => 'The link format is invalid.'

        ];
        

        // Validate the request data
        $request->validate($rules, $messages);

        // Create a new toilet instance and fill it with request data
        $toilet = new Toilet;
        $toilet->title = $request->title;
        $toilet->type = $request->type;
        $toilet->description = $request->description;
        $toilet->location = $request->location;
        $toilet->accessibility = $request->accessibility;
        $toilet->link = $request->link;
        $toilet->opening_hours = $request->opening_hours;
        

        $toilet->save();
        // Redirect back to the 'toilets.index' route with a success message
        return redirect()->route('admin.toilets.index')->with('status', 'Created a new toilet');
    }

    // Show details of a specific toilet
    public function show(string $id)
    {
        // Find the toilet by its ID
        $toilet = Toilet::findOrFail($id);

        // Render the 'toilets.show' view and pass the toilet data
        return view('admin.toilets.show', [
            'toilet' => $toilet
        ]);
    }

    // Edit a specific toilet
    public function edit(string $id)
    {
        // Find the toilet by its ID
        $toilet = Toilet::findOrFail($id);
        
        // Render the 'toilets.edit' view and pass the toilet and cars data
        return view('admin.toilets.edit', [
            'toilet' => $toilet,
        ]);
    }


    public function update(Request $request, string $id)
    {

        $rules = [
            'title' => 'required|string|min:2|max:150',
            'type' => 'required|in:Public,Private', 
            'description' => 'required|string|min:2|max:255',
            'location' => 'required|string|min:2|max:255',
            'accessibility' => 'required|string|min:2|max:1000', 
            'link' => 'required|url|max:1000', 
            'opening_hours' => 'nullable|string|min:2|max:1000'
        ];

        $messages = [
            'title.required' => 'The title field is required.',
            'type.required' => 'The type field is required.',
            'type.in' => 'Invalid type selected.',
            'description.required' => 'The description field is required.',
            'location.required' => 'The location field is required.',
            'accessibility.required' => 'The accessibility field is required.',
            'link.url' => 'The link format is invalid.'

        ];

        $request->validate($rules, $messages);
    
        $toilet = Toilet::findOrFail($id);
        $toilet->title = $request->title;
        $toilet->type = $request->type;
        $toilet->description = $request->description;
        $toilet->location = $request->location;
        $toilet->accessibility = $request->accessibility;
        $toilet->link = $request->link;
        $toilet->opening_hours = $request->opening_hours;

        $toilet->save();
        return redirect()->route('admin.toilets.index')->with('status', 'Updated toilet');
    }
  
    // Delete a specific toilet
    public function destroy(string $id)
    {
        $toilet = Toilet::findOrFail($id);
        $toilet->delete();
        return redirect()->route('admin.toilets.index')->with('status', 'toilet deleted successfully!');
    }
}
