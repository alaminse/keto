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
        $dietcombinations = DietCombination::doesnthave('dietchart')->get();
        // dd($dietchart);
        return view('admin.dietchart.index', compact('dietcombinations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dietcombinations = DietCombination::has('dietchart')->get();
        return view('admin.dietchart.index', compact('dietcombinations'));
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
            'dietcombination_id' => $request->dietcombination_id,
        ];


        $diet = json_encode($request->day);

        DB::beginTransaction();

        try {

            $dietchart = new Dietchart;
            $dietchart->dietcombination_id = $request->dietcombination_id;
            $dietchart->diet = $diet;
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

            DB::commit();
            return redirect()->route('dietcharts.index')->with($notification);

        } catch (\Exception $e) {

            DB::rollback();
            return redirect()->back()->with('error',$e);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\dietchart  $dietchart
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.dietchart.create', compact('id'));
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
