<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CharactersController extends Controller
{
    public function index() {

        $pageTitle = 'DC Comics Characters';
        return view('characters', compact('pageTitle'));

    }
}
