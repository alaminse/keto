<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FoodController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = Food::orderby('id', 'DESC')->get();
        return view('admin.food.index', compact('foods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.food.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = [
            'name' => $request->name,
            'nutritional_information' => $request->nutritional_information,
            'calories' => $request->calories,
            'fats' => $request->fats,
            'carbs' => $request->carbs,
            'protien' => $request->protien,
        ];
        DB::beginTransaction();

        try {

            $food = new Food;
            $food->name = $request->name;
            $food->nutritional_information = $request->nutritional_information;
            $food->calories = $request->calories;
            $food->fats = $request->fats;
            $food->carbs = $request->carbs;
            $food->protien = $request->protien;
            if($food->save())
            {
                $notification = array(
                    'message' => 'Data Insert Successfully.',
                    'type' => 'message'
                );
            } else {
                $notification = array(
                    'message' => 'Challan Error. Try Again.',
                    'type' => 'warning'
                );
            }

            DB::commit();
            return redirect()->route('foods.index')->with($notification);

        } catch (\Exception $e) {

            DB::rollback();
            return redirect()->back()->with('error',$e);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function show(Food $food)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function edit(Food $food)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Food $food)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food $food, $id )
    {
        if (Food::find($id)->delete()) {
            return redirect()->route('foods.index')->with('warning','Data Delete Successfully');
        } else {
            return redirect()->route('foods.index')->with('error','Something is wrong. Try Again!');
        }
    }
}
