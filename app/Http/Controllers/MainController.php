<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $title = 'Home Page';
        $subtitle = '<i>Welcome</i>';
        $users = ['Tom', 'Bob', 'Mark'];

        return view('index', compact('title', 'subtitle', 'users'));
    }
}
