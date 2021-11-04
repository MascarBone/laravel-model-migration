<?php

namespace App\Http\Controllers;

use App\Models\Journey;

use Illuminate\Http\Request;

class JourneyController extends Controller
{
    public function index()
    {
        $data = Journey::all();

        // dd($data);
        return view('journeys.index', compact('data'));
    }

    public function show($id)
    {
        $data = Journey::find($id);
        // $data = Journey::findOrFail(1);
        // dd($data);
        return view('journeys.show', compact('data'));
    }
}
