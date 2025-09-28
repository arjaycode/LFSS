<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index() {}

    function create()
    {
        return view('auth.create');
    }

    function store()
    {
        
    }

    function update() {}

    function delete() {}
}
