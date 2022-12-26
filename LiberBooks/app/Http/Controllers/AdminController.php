<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('Type: admin');
    }

    public function index()
    {
        if (Auth::user()->Type == 'admin') {
            return view('admin.index');
        } else {
            abort(403);
        }
    }
}
