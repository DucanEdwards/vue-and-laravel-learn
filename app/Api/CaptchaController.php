<?php

namespace App\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class CaptchaController extends Controller
{
    public function create()
    {
        return \Captcha::create('default', true);
    }
}
