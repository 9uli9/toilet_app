<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Race;
use App\Models\Car;
use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class RecordsController extends Controller
{
    public function index()
    {
        $races = Race::with('cars')->get();

        return view('admin.records.index', compact('races'));
    }
}
