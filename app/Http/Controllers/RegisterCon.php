<?php

namespace App\Http\Controllers;




use App\Http\Requests\RegisterRequest;
use App\Models\UserAction;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class RegisterCon extends BaseCon
{
    public function index(){
       return view("frontend.pages.register",$this->data);
    }
    public function store(RegisterRequest $request)
    {

        $role_id = 2;

        DB::beginTransaction();

        try {

             $user=Users::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => md5($request->password),
                'role_id' => $role_id,
            ]);

            UserAction::create(['action' => 'Registration', 'user_id' => $user->id]);

            DB::commit();

            return back()->with('registerSuccess', 'You have successfully registered! ');

        } catch(\Exception $e) {
            DB::rollBack();

            Log::error($e->getMessage());

            return back()->with('registerError', 'Try again!');

        }


    }

}
