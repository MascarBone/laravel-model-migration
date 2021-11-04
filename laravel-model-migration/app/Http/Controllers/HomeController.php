<?php

namespace App\Http\Controllers;

use App\Models\Journey;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function journey()
    {
        $data = Journey::all();
        // dd($data);
        return view('home', compact('data'));
    }
}
