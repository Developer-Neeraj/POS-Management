<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $admin = new Admin;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $request->session()->put('mail', $email);
        $request->session()->put('pass', $password);
        $admin->save();
        return view('dashboard.dashboard',);
    }
}
