<?php

namespace App\Http\Controllers;

use App\Models\Flower;
use App\Models\FlowerType;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $flowers = Flower::all();
        $flowerTypes = FlowerType::all();
        return view('home', compact('flowers', 'flowerTypes'));
    }
}
