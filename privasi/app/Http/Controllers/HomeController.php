<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
 
    public function index()
    {
        return view('admin/dashbord/dashboard');
    }
}
