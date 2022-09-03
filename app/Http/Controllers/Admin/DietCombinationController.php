<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\DietCombination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DietCombinationController extends Controller
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
        $dietCombinations = DietCombination::orderBy('id', 'DESC')->get();
        // dd($dietCombinations);
        return view('admin.dietCombination.index', compact('dietCombinations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dietCombination.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'goal' => 'required',
            'gender' => 'required',
            'weight' => 'required',
            'goal_weight' => 'required',
            'height' => 'required',
            'age' => 'required',
        ]);

        DB::beginTransaction();

        try {

            $dietCombination = new DietCombination;
            $dietCombination->goal = $request->goal;
            $dietCombination->gender = $request->gender;
            $dietCombination->weight = $request->weight;
            $dietCombination->goal_weight = $request->goal_weight;
            $dietCombination->height = $request->height;
            $dietCombination->age = $request->age;
            if($dietCombination->save())
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
            return redirect()->route('dietcombinations.index')->with($notification);

        } catch (\Exception $e) {

            DB::rollback();
            return redirect()->back()->with('error',$e);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\DietCombination  $dietCombination
     * @return \Illuminate\Http\Response
     */
    public function show(DietCombination $dietCombination)
    {
        echo('show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\DietCombination  $dietCombination
     * @return \Illuminate\Http\Response
     */
    public function edit(DietCombination $dietCombination)
    {
        // echo(500);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\DietCombination  $dietCombination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DietCombination $dietCombination)
    {
        // echo(500);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\DietCombination  $dietCombination
     * @return \Illuminate\Http\Response
     */
    public function destroy(DietCombination $dietCombination, $id)
    {
        if (DietCombination::find($id)->delete()) {
            return redirect()->route('dietcombinations.index')->with('warning','Data Delete Successfully');
        } else {
            return redirect()->route('dietcombinations.index')->with('error','Something is wrong. Try Again!');
        }
    }
}
