<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Comic;

class HomePageController extends Controller
{
    public function index() {

        $comicsData = Comic::all();
        $pageTitle = 'DC Comics HomePage';
        return view('homepage', compact('pageTitle', 'comicsData'));

    }
}
