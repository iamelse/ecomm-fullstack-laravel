<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestViewController extends Controller
{
    public function register_success()
    {
        return view('auth.success');
    }
}
