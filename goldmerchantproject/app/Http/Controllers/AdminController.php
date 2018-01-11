<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function databaki()
    {
        return view('admin.databaki');
    }

    public function inputbarangbaru(){
        return view('admin.inputbaru');
    }

    public function inputbaki(){
        return view('admin.inputbaki');
    }
}
