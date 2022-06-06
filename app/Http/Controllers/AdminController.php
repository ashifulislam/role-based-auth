<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public $user_info;
    public function __construct(){
    $this->middleware(function ($request, $next) {

        if (request()->user()->role != 1) {
            Auth::logout();
            return redirect('/login');
        }
        return $next($request);
        });

    }
    public function index()
    {

        return view('admin.index');
    }
}
