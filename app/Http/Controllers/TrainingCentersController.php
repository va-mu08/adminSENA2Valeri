<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainingCenter;

class TrainingCentersController extends Controller
{
    public function create() {
        return view('trainingcenters.create');
    }

    public function store(Request $request) {
        $trainingcenter = new TrainingCenter();
        $trainingcenter->name = $request->name;
        $trainingcenter->location = $request->location;
        $trainingcenter->save();

        return $trainingcenter;
    }
}

