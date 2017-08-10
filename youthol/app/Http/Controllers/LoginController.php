<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Yuser;
use Validator;
use App\Http\Requests;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $input = $request->except('_token');
        $user = Yuser::where('email',$input['email'])->get()->first();
        if($user==null)
        {
            return back()->with('msg','没有此用户，请检查您的邮箱账号是否正确');
        }
        $password = $user['password'];
        $name = $user['name'];
        if($password == $input['password'])
        {
            return view('welcome',['name'=>$name]);
        }
        else
        {
            return back()->with('msg','用户名或密码错误');
        }
    }
    public function register(Request $request)
    {
        $input = $request->except('_token');
        $up = new Yuser();
        if($input['password'] == $input['password_r'])
        {
            $up->name=$input['name'];
            $up->password = $input['password'];
            $up->pid = 1;
            $up->bumen1 = $input['checkbox1'][0];
            $up->bumen2 = $input['checkbox1'][1];
            $up->class = $input['class'];
            $up->number = $input['number'];
            $up->mphone = $input['mphone'];
            $up->email = $input['email'];
            $up->jianjie = $input['jianjie'];
            $up->techang = $input['techang'];
            $up->sex = $input['sex'];
            if($up->save())
            {
                return view('welcome',['name'=>$input['name']]);
            }
            else
            {
                return back()->with('msg','数据填充失败！');
            }
        }
        else
        {
            return back()->with('msg','两次密码不一致！');
        }
    }
}
