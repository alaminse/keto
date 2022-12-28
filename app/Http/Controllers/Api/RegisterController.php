<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin\DietCombination;
use Illuminate\Support\Facades\DB;
use Validator;

class RegisterController extends BaseController
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
            'goal' => 'required',
            'gender' => 'required',
            'weight' => 'required',
            'goal_weight' => 'required',
            'height' => 'required',
            'age' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }
        DB::beginTransaction();

        try {
            $input = $request->all();

            $combination = DietCombination::where('goal',$input['goal'])->where('gender',$input['gender'])->where('weight',$input['weight'])->where('goal_weight',$input['goal_weight'])->where('height',$input['height'])->where('age',$input['age'])->first();

            if($combination != null) {
                $dietcom_id = $combination->id;
            } else {
                $diet['goal'] = $input['goal'];
                $diet['gender'] = $input['gender'];
                $diet['weight'] = $input['weight'];
                $diet['goal_weight'] = $input['goal_weight'];
                $diet['height'] = $input['height'];
                $diet['age'] = $input['age'];
                $dietcom = DietCombination::create($diet);
                $dietcom_id = $dietcom->id;
            }

            $user['name'] = $input['name'];
            $user['email'] = $input['email'];
            $user['password'] = bcrypt($input['password']);
            $user['combination_id'] = $dietcom_id;
            $user = User::create($user);

            $success['token'] =  $user->createToken('MyApp')->accessToken;
            $success['name'] =  $user->name;
            $success['combination_id'] =  $user->combination_id;

            DB::commit();
            return $this->sendResponse($success, 'User register successfully.');
        } catch (\Exception $e) {

            DB::rollback();
            return redirect()->back()->with('error',$e);

        }
    }

    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('MyApp')-> accessToken;
            $success['name'] =  $user->name;

            return $this->sendResponse($success, 'User login successfully.');
        }
        else{
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        }
    }
}
