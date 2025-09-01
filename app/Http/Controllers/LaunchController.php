<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class LaunchController extends Controller
{
    //
    public function index(): View {
        return view('launch.welcome');

    }
}
