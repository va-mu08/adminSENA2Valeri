<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainingCenter;

class TrainingCentersController extends Controller
{
    public function index()
    {

    $trainingcenters = TrainingCenter::all();
      return response()->json($trainingcenters);
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);
        $trainingcenter = TrainingCenter::create($request->all());


        return response()->json($trainingcenter);
    }


    public function update(Request $request, TrainingCenter $trainingcenter)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $trainingcenter->update($request->all());
        return response()->json($trainingcenter);
    }


    public function destroy(TrainingCenter $trainingcenter)
    {
        $trainingcenter->delete();
        return $trainingcenter;
    }
}
