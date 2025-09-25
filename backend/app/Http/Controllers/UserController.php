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

    function store(Request $request)
    {
        $data = $request->validate([
            'school_id' => 'required|string|max:20|unique:users,school_id',
            'email' => 'required|email|unique:users,email',
            'email_verified_at' => 'nullable|date',
            'password' => 'required|string|min:8|confirmed',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'role' => 'required|in:student,staff,admin',
            'department' => 'nullable|string|max:255',
            'year_level' => 'nullable|string|max:255',
            'phone_number' => 'nullable|string|max:11',
            'is_active' => 'boolean'
        ]);

        User::create($data);

        return view('auth.success');
    }

    function update() {}

    function delete() {}
}
