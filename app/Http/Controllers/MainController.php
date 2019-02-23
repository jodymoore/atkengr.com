<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
     /*
     *  Show
     */
    public function show(Request $request) {

        return view('index');
    }
}
