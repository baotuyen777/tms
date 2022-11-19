<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Food;
use App\Rules\Uppercase;
use App\Http\Requests\CreateValidationRequest;

class FoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $foods = Food::where/('name', '=', 'susi')->firstOrFail();
        $foods = Food::all();
        return view('foods/index', ['foods' => $foods]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateValidationRequest $request)
    {
//        dd($request->all());
//        $food = new Food();
//        $food->name = $request->input('name');
//        $food->count =$request->input('count');
//        $food->description = $request->input('description');

//        dd($request->file('image')->guessExtension()); //jpg,jpeg
//        dd($request->file('image')->getMimeType()); //jpg,jpeg
//        dd($request->file('image')->getClientOriginalName()); //jpg,jpeg
//        dd($request->file('image')->getSize()); //10kb
//        dd($request->file('image')->getError()); //10kb
//        dd($request->file('image')->isValid()); //10kb
        $generatedImageName = 'image' . time() . '-' . $request->name . '.' . $request->image->extension();
        $imageReult = $request->image->move(public_path('images'), $generatedImageName);
//        dd($imageReult);
        $request->validate([
//            'name' => 'required|unique:foods',
            'name' => new Uppercase(),
            'count' => 'required|integer|min:0|max:100',
            'category_id' => 'required',
//            'image' => 'required|mimes:jpg,png,jpeg|max::50048',
        ]);
//        $request->validated();
        $food = Food::create([
            'name' => $request->input('name'),
            'count' => $request->input('count'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
            'image_path' => $generatedImageName
        ]);
        $food->save();
        return redirect('/foods');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('foods.create')->with('categories', $categories);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $food = Food::find($id);
        $category = Category::find($food->category_id);
        $food->category = $category;
        return view('foods.show')->with('food', $food);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $food = Food::find($id);
        return view('foods.edit')->with('food', $food);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $food = Food::where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'count' => $request->input('count'),
                'description' => $request->input('description')
            ]);
        return redirect('/foods');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Food::find($id)->delete();
        return redirect('/foods');
    }
}
