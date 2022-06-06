<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(function ($request, $next) {

            if (request()->user()->role != 3) {
                Auth::logout();
                return redirect('/login');
            }
            return $next($request);
            });
    }
    public function index()
    {
        return view('user.index');
    }

}
