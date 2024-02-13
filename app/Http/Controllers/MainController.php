<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// include Train model
use App\Models\Train;

class MainController extends Controller
{

    public function index()
    {
        return view('pages.index');
    }

}
