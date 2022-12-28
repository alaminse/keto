<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\DietCombination;
use App\Models\Admin\Dietchart;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Admin\DietcombinationUser;
use Validator;
use App\Http\Resources\DietCombinationResource;
use Illuminate\Support\Facades\DB;

class KetoController extends BaseController
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // public function user_diet(Request $request)
    // {
    //     $diet_combination = DietcombinationUser::where('user_id',$request->user_id)->first();
    //     if($diet_combination)
    //     {
    //         $diet_chart = Dietchart::where('dietcombination_id',$diet_combination->dietcombination_id)->first();
    //         return $this->sendResponse(new DietCombinationResource($diet_chart), 'Your diet chart.');
    //     } else {

    //         $input = $request->all();
    //         $validator = Validator::make($input, [
    //             'goal' => 'required',
    //             'gender' => 'required',
    //             'weight' => 'required',
    //             'goal_weight' => 'required',
    //             'height' => 'required',
    //             'age' => 'required'
    //         ]);

    //         if($validator->fails()){
    //             return $this->sendError('Validation Error.', $validator->errors());
    //         }
    //         DB::beginTransaction();

    //         try {

    //             $diet = DietCombination::create($input);

    //             $diet_user['user_id'] = $request->user_id;
    //             $diet_user['dietcombination_id'] = $diet->id;
    //             $done = DietcombinationUser::create($diet_user);
    //             return $done;
    //             // return $this->sendResponse($done, 'Your diet chart.');

    //             // if($diet_user->save())
    //             // {
    //             //     return 'test';
    //             //     // $diet_chart = Dietchart::where('dietcombination_id',$diet->id)->get();
    //             //     // DB::commit();
    //             //     // return $this->sendResponse(new DietCombinationResource($diet_chart), 'Your diet chart.');
    //             // } else {
    //             //     return $this->sendError('Something is wrong.', $validator->errors());
    //             // }

    //         } catch (\Exception $e) {

    //             DB::rollback();
    //             return redirect()->back()->with('error',$e);

    //         }
    //     }
    // }
}
