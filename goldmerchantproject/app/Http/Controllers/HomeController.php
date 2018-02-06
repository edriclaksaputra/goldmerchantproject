<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->job == 'Admin'){
            return view('admin/welcome');
        }
        else if(Auth::user()->job == 'Sales'){
            return view('sales/mainpage');
        }
        else if(Auth::user()->job == 'Kasir'){
            return redirect('validasitransaksi');
        }
    }
}
