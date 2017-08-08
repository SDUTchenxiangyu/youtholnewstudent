<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Yuser;
use App\Http\Requests;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $input = $request->input();
        $user = Yuser::where('email',$input['email'])->get()->first();
        if($user==null)
        {
            return back()->with('msg','没有此用户，请检查您的邮箱账号是否正确');
        }
        $password = $user['password'];
        if($password == $input['password'])
        {
            return view('welcome');
        }
        else
        {
            return back()->with('msg','用户名或密码错误');
        }
    }
}
