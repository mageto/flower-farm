<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FlowerType;

class FlowerTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flower_types = FlowerType::paginate(10);
        return view('flower-types.index', compact('flower_types'));
    }

    public function add_flower_type()
    {
        return view('flower-types.add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFlowerTypesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
        ]);

        $flowerType = new FlowerType;
        $flowerType->name = $validatedData['name'];
        $flowerType->description = $validatedData['description'];
        $flowerType->save();

        return redirect('/flower-types')->with('success', 'Flower Type added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FlowerTypes  $flowerTypes
     * @return \Illuminate\Http\Response
     */
    public function show(FlowerTypes $flowerTypes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param   $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $flower_type = FlowerType::find($id);
        return view('flower-types.edit', compact('flower_type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\FlowerTypes  $flowerTypes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
        ]);

        $flower_type = FlowerType::findOrFail($id);
        $flower_type->name = $validatedData['name'];
        $flower_type->description = $validatedData['description'];
        $flower_type->save();

        return redirect('/flower-types')->with('success', 'Flower Type updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FlowerTypes  $flowerTypes
     * @return \Illuminate\Http\Response
     */
    public function destroy(FlowerTypes $flowerTypes)
    {
        $item->delete();

        return redirect()->route('items.index')
            ->with('success', 'FlowerType deleted successfully.');
    }
}
