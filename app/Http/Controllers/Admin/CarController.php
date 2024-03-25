<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Auth;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::paginate(10);
        return view('admin.cars.index')->with('cars', $cars);
    }

    public function create()
    {
        $drivers = Driver::all();
        return view('admin.cars.create')->with('drivers', $drivers);
    }

    public function store(Request $request): RedirectResponse
    {
        $rules = [
            'model' => 'required|string|min:2|max:150',
            'manufacturer' => 'required|string|min:2|max:150',
            'description' => 'required|string|min:2|max:150',
            'type' => 'required|string|min:2|max:150',
            'fuel' => 'required|string|min:2|max:150',
            'colour' => 'required|string|min:2|max:150',
            'vin' => 'required|string|min:2|max:150',
            'vrm' => 'required|string|min:2|max:150',
            'driver_id' => 'required|integer|exists:drivers,id',
            'car_image' => 'file|image',
        ];
    
        $messages = [
            'model.required' => 'Model is required',
            'manufacturer.required' => 'Manufacturer is required',
            'type.required' => 'Type is required',
            'fuel.required' => 'Fuel is required',
            'colour.required' => 'Colour is required',
            'vin.required' => 'VIN is required',
            'vrm.required' => 'VRM is required',
            'driver_id.integer' => 'Driver ID must be an integer',
        ];
    
        // Validate the request
        $request->validate($rules, $messages);

        // dd($request);
    
        // Create a new Car instance and fill it with request data
        $car = new Car;
        $car->model = $request->model;
        $car->manufacturer = $request->manufacturer;
        $car->description = $request->description;
        $car->type = $request->type;
        $car->fuel = $request->fuel;
        $car->colour = $request->colour;
        $car->vin = $request->vin;
        $car->vrm = $request->vrm;
        $car->driver_id = $request->driver_id;
    
        // Check if a new image file is uploaded
        if ($request->hasFile('car_image')) {
            $car_image = $request->file('car_image');
            $filename = date('Y-m-d-His') . '_' . $request->model . '.' . $car_image->getClientOriginalExtension();
            $car_image->storeAs('public/images', $filename);
            $car->car_image = $filename;
        }
    
        $car->save();
        return redirect()->route('admin.cars.index')->with('status', 'Created a new car');
    }
        


    public function show(string $id)
    {
        $car = Car::findOrFail($id);
        return view('admin.cars.show', [
            'car' => $car
        ]);
    }

    public function edit(string $id)
    {
        $car = Car::findOrFail($id);
        $drivers = Driver::all();
        return view('admin.cars.edit', [
            'car' => $car,
            'drivers' => $drivers,
        ]);
    }

    public function update(Request $request, string $id)
    {
        $rules = [
            'model' => 'required|string|min:2|max:150',
            'manufacturer' => 'required|string|min:2|max:150',
            'type' => 'required|string|min:2|max:150',
            'fuel' => 'required|string|min:2|max:150',
            'colour' => 'required|string|min:2|max:150',
            'vin' => 'required|string|min:2|max:150',
            'vrm' => 'required|string|min:2|max:150',
            'driver_id' => 'required|integer|exists:drivers,id',
            'car_image' => 'file|image',
        ];
    
        $messages = [
            'model.required' => 'Model is required',
            'manufacturer.required' => 'Manufacturer is required',
            'type.required' => 'Type is required',
            'fuel.required' => 'Fuel is required',
            'colour.required' => 'Colour is required',
            'vin.required' => 'VIN is required',
            'vrm.required' => 'VRM is required',
            'driver_id.integer' => 'Driver ID must be an integer',
        ];
    
        $request->validate($rules, $messages);
    
        $car = Car::findOrFail($id);
    
        // Update car attributes
        $car->fill([
            'model' => $request->model,
            'manufacturer' => $request->manufacturer,
            'description' => $request->description,
            'type' => $request->type,
            'fuel' => $request->fuel,
            'colour' => $request->colour,
            'vin' => $request->vin,
            'vrm' => $request->vrm,
            'driver_id' => $request->driver_id,
        ]);
    
   
    // Check for a new image
if ($request->hasFile('car_image')) {
    // Save new image
    $newCarImage = $request->file('car_image');
    $filename = date('Y-m-d-His') . '_' . $request->model . '.' . $newCarImage->getClientOriginalExtension();
    $newCarImage->storeAs('public/images', $filename);

    // Update the car model with the new image filename and do not delete the old image
    $car->car_image = $filename;
}

// Save the changes
$car->save();

return redirect()->route('admin.cars.index')->with('status', 'Updated Car');
}


public function destroy(string $id)
{
    $car = Car::findOrFail($id);
    $car->delete();

    return redirect()->route('admin.cars.index')->with('status', 'Car deleted successfully.');
}

}