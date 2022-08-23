<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class AdminController extends Controller
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

    public function doctor_list()
    {
        DB::beginTransaction();

        try {
            $doctors = User::where('type', 2)->orderBy('id', 'DESC')->get();
            return view('admin.other.doctor_list', compact('doctors'));
            DB::commit();
        } catch (\Throwable $e) {
            DB::rollback();
            throw $e;
        }
    }

    public function user_list()
    {
        DB::beginTransaction();

        try {
            $users = User::where('type', 0)->orderBy('id', 'DESC')->get();
            return view('admin.other.user_list', compact('users'));
            DB::commit();
        } catch (\Throwable $e) {
            DB::rollback();
            throw $e;
        }
    }
}
