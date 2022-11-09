<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function index() {

        $pageTitle = 'DC Comics Games';
        return view('games', compact('pageTitle'));

    }
}
