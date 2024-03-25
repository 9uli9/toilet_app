<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class DriverController extends Controller
{

    public function __construct(){
        //     Auth::user()->authorizeRoles('admin');
         }

         
    // Shows all drivers
    public function index()
    {
        // // Retrieve all drivers from the database
        // $drivers = Driver::all();

        // // Render the 'drivers.index' view and pass the drivers data
        // return view('drivers.index', [
        //     'drivers' => $drivers 
        // ]);

        $drivers = Driver::paginate(10);
        return view('user.drivers.index')->with('drivers', $drivers);
    }


    // Show details of a specific driver
    public function show(string $id)
    {
        // // Find the driver by its ID
        // $driver = Driver::findOrFail($id);

        // // Render the 'drivers.show' view and pass the driver data
        // return view('drivers.show', [
        //     'driver' => $driver
        // ]);


        $driver = Driver::findOrFail($id);

        return view('user.drivers.show')->with('driver', $driver);
    }
    


    


}
