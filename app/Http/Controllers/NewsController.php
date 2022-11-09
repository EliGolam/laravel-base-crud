<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {

        $pageTitle = 'DC Comics News';
        return view('news', compact('pageTitle'));

    }
}
