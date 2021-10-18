<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function userdashboard()
    {
        dd(auth()->guard('user')->user());
        echo 'user';
    }
}
