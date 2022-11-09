<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoriesController extends Controller
{
    public function index() {

        $pageTitle = 'DC Comics: Our Stories';
        return view('stories', compact('pageTitle'));

    }
}
