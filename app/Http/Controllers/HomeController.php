<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    //
    public function load () {

        if (Auth::check() && Auth::user()->hasRole('admin')) {
            return redirect()->route('home');
        } else {
            return view('homeCliente');

        }
    }
}
