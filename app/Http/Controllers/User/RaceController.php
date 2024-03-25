<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Race;
use App\Models\Car;
use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class RaceController extends Controller
{
    // Shows all races
    public function index()
    {
        // // Retrieve all races from the database
        // $races = Race::all();

        // // Render the 'races.index' view and pass the races data
        // return view('user.races.index', [
        //     'races' => $races
        // ]);

        $races = Race::paginate(10);
        return view('user.races.index')->with('races', $races);
    }


    // Show details of a specific race
    public function show(string $id)
    {
        // Find the race by its ID
        $race = Race::findOrFail($id);

        // Render the 'races.show' view and pass the race data
        return view('user.races.show', [
            'race' => $race
        ]);
    }

}
