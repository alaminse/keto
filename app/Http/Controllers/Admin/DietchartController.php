<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Dietchart;
use App\Models\Admin\DietCombination;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DietchartController extends Controller
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
        $dietcharts = Dietchart::orderBy('id', 'DESC')->get();
        // dd($dietchart);
        return view('admin.dietchart.index', compact('dietcharts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dietcombinations = DietCombination::doesnthave('dietchart')->get();
        // dd($dietcombinations);
        return view('admin.dietchart.create', compact('dietcombinations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $diets = [];

        $request->validate([
            'dietcombination_id' => 'required|unique:dietcharts',
            'days' => 'required',
            'charts' => 'required',
        ]);
        foreach($request->days as $i => $day)
        {
            foreach($request->charts as $key => $chart)
            {
                if($i == $key)
                {
                    $diets[$i]= [
                        'day' => $day,
                        'chart' => $chart
                    ];
                }
            }
        }
        $encodedDiet = json_encode($diets);

        $dietchart = new Dietchart;
        $dietchart->dietcombination_id = $request->dietcombination_id;
        $dietchart->diet = $encodedDiet;
        if($dietchart->save())
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
        return redirect()->route('dietcharts.index')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\dietchart  $dietchart
     * @return \Illuminate\Http\Response
     */
    public function show(Dietchart $dietchart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\dietchart  $dietchart
     * @return \Illuminate\Http\Response
     */
    public function edit(Dietchart $dietchart)
    {
        // echo(500);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\dietchart  $dietchart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dietchart $dietchart)
    {
        // echo(500);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\dietchart  $dietchart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dietchart $dietchart, $id)
    {
        if (Dietchart::find($id)->delete()) {
            return redirect()->route('dietchart.index')->with('warning','Data Delete Successfully');
        } else {
            return redirect()->route('dietchart.index')->with('error','Something is wrong. Try Again!');
        }
    }

    public function trashed()
    {
        $data = Dietchart::withTrashed()->get();
        dd($data);
    }
}
