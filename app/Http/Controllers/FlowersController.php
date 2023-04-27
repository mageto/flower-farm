<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flower;
use App\Models\FlowerType;

class FlowersController extends Controller
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
        $flowers = Flower::paginate(10);
        return view('flowers.index', compact('flowers'));
    }

    public function add_flower()
    {
        $flowerTypes = FlowerType::all();
        return view('flowers.add', compact('flowerTypes'));
    }

    public function store(Request $request)
    {
        // Validate the input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'flower_type_id' => 'required|exists:flower_types,id',
            'image' => 'required|image|max:2048', // 2MB max file size
        ]);

        // Get the next available ID for the new flower
        $id = Flower::max('id') + 1;


        // Create a new flower with the input data
        $flower = new Flower();
        $flower->id = $id;
        $flower->flower_type_id = $validatedData['flower_type_id'];
        $flower->name = $validatedData['name'];
        $flower->description = $validatedData['description'];
        $imageName = 'flower_' . $flower->name . '.' . $validatedData['image']->getClientOriginalExtension();
        $flower->image_name = $imageName;
        // Save the image to the public folder
        $image = $request->file('image');
        $image->move(public_path('images'), $imageName);

        $flower->save();

        return redirect()->route('flowers')->with('success', 'Flower created successfully.');
    }

    public function edit($id)
    {
        $flowerTypes = FlowerType::all();
        $flower = Flower::find($id);
        return view( 'flowers.edit', compact( 'flower', 'flowerTypes' ));
    }

    public function update(Request $request, $id)
    {
        $flower = Flower::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'flower_type_id' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $flower->name = $validatedData['name'];
        $flower->description = $validatedData['description'];
        $flower->flower_type_id = $validatedData['flower_type_id'];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = 'flower_' . $flower->name . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $flower->image_name = $imageName;
        }

        $flower->save();

        return redirect()->route('flowers')->with('success', 'Flower updated successfully.');
    }

}
