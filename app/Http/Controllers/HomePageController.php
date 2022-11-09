<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index() {

        $pageTitle = 'DC Comics HomePage';
        return view('homepage', compact('pageTitle'));

    }
}
