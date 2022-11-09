<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index() {

        $pageTitle = 'DC Comics Movies';
        return view('movies', compact('pageTitle'));

    }
}
