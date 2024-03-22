<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request; // Add this line

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/notes';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function credentials(Request $request)
    {
        return $request->only('name', 'password');
    }

    public function username()
    {
        return 'name'; // Add this method if you haven't already
    }
}

