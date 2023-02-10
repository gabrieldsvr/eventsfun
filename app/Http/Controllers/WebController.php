<?php

namespace App\Http\Controllers;

use App\Models\PageType;

class WebController extends Controller
{
    public function index()
    {

        return view('index');
    }


}
