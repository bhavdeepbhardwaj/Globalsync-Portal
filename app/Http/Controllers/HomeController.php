<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    // Approval page
    public function approvalEmployee()
    {
        return view('pages.approve');
    }
}
