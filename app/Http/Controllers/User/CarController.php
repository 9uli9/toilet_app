<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;


class CarController extends Controller
{



    // Shows all cars 
    public function index()
    {


        // // Retrieve all cars from the database
        // $cars = Car::all();

        // // Render the 'cars.index' view and pass the cars data
        // return view('cars.index', [
        //     'cars' => $cars 
        // ]);

        $cars = Car::paginate(10);
        return view('user.cars.index')->with('cars', $cars);
    }


    // Show details of a specific car
    public function show(string $id)
    {
        // Find the car by its ID
        $car = Car::findOrFail($id);

        // Render the 'cars.show' view and pass the car data
        return view('user.cars.show', [
            'car' => $car
        ]);
    }

 
}
