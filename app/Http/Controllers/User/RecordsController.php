<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Race;
use App\Models\Car;
use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class RecordsController extends Controller
{
    public function showBestFinishTime()
    {

        $cars = Car::with(['races' => function ($query) {
            $query->orderBy('finish_time', 'asc');
        }, 'driver'])->get();

        return view('records.index', compact('cars'));
    }
}
