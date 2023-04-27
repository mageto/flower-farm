<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flower;
use App\Models\FlowerType;

class FlowerFarmController extends Controller
{

    public function flowers()
    {
        $flowers = Flower::all();
        return view('flower.flowers', compact('flowers'));
    }

    public function flower($id)
    {
        $flower = Flower::find($id);
        return view('flower.flower-detail', compact('flower'));
    }

    public function search_flower(Request $request)
    {
        $flowers = Flower::where('name', 'like', "%{$request->search}%")->get();
        return view('flower.flowers', compact('flowers'));
    }

}
