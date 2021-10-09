<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function dashboard()
    {
        $users = User::where('id');
        return view('admin.index',compact('users'));
    }

    public function users()
    {
        $users=User::all();

        return view('admin.users',compact('users'));
    }
}