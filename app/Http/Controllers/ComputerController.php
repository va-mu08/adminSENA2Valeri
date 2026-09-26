<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;


class ComputerController extends Controller
{
    public function index()
    {

    $computers = Computer::all();
      return response()->json($computers);
    }

    public function store(Request $request)
    {
        $request->validate([
            'number' => 'required|integer',
            'brand' => 'required|string|max:255',
        ]);
        $computer = Computer::create($request->all());


        return response()->json($computer);
    }


    public function update(Request $request, Computer $computer)
    {
        $request->validate([
           'number' => 'required|integer',
           'brand' => 'required|string|max:255',
        ]);

        $computer->update($request->all());
        return response()->json($computer);
   }


     public function destroy(Computer $computer)
    {
        $computer->delete();
        return $computer;
    }

}