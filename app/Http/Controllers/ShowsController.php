<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowsController extends Controller
{
    public function index() {

        $pageTitle = 'DC Comics Shows';
        return view('shows', compact('pageTitle'));

    }
}
