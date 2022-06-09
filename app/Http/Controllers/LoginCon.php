<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\UserAction;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LoginCon extends BaseCon
{
    public function index()
    {
        return view('frontend.pages.login',$this->data);
    }

    public function store(LoginRequest $request)
    {

        try {

            $user = Users::where('email', $request->email)
                ->where('password', md5($request->password))
                ->firstOrFail();

            if($user) {
                $request->session()->put("user", $user);
                UserAction::create(['action' => 'Login', 'user_id' => $user->id]);

                return redirect()->route('home');
            } else {
                return back()->with('loginFail', 'Wrong combination of email and password.');
            }

        } catch (\Exception $e) {
            Log::error($e->getMessage());

            return back()->with('loginFail', 'Wrong combination of email and password.');

        }

    }
}
