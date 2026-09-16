<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentice;

class ApprenticesController extends Controller
{
    public function index()
    {
        return response()->json(Apprentice::all());
    }
}