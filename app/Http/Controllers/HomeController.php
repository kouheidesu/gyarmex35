<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    use AuthenticatesUsers;
 
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';
　
 
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
  
    public function username()
    {
      return 'name';
    }

}


