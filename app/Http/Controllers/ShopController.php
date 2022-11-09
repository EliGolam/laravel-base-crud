<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index() {

        $pageTitle = 'DC Comics Shop';
        return view('shop', compact('pageTitle'));

    }
}
