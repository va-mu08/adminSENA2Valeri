<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentice;

class ApprenticesController extends Controller
{
    public function index()
    {

    $apprentices = Apprentice::all();
      return response()->json($apprentices);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);
        $apprentice = Apprentice::create($request->all());


        return response()->json($apprentice);
    }


    public function update(Request $request, Apprentice $apprentice)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $apprentice->update($request->all());
        return response()->json($apprentice);
    }


    public function destroy(Apprentice $apprentice)
    {
        $apprentice->delete();
        return $apprentice;
    }
}



