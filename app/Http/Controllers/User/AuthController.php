<?php

namespace App\Http\Controllers\User;
use Inertia\inertia;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        // return view('Auth/login',['name'=>'fdsa']);
        return inertia('Auth/Login');
    }
    public function store(Request $request) {
        $request->validate([
            'mobile'=>[Rule::exists('users')],
            'password'=>['required']
        ],['mobile.exists'=>'手机号不存在','password.required'=>'密码不能为空']);

        $credentials = $request->only('mobile', 'password');

        if (Auth::attempt($credentials)) {
            return ['message'=>'登录成功'];
        }

        return response(['message'=>'密码错误'],403);
    }
}
