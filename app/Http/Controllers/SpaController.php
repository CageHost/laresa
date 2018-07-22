<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SpaController extends Controller
{
    public function index()
    {
        $user = [];
        if (Auth::check()) {
            $user = Auth::user()->toArray();
        }
        return view('spa')->with('user', $user);
    }
}
