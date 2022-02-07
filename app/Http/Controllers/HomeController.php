<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pack;

class HomeController extends Controller
{
    public function index() {

        $packs = Pack::all();

        return view('home', compact('packs'));
    }
}
