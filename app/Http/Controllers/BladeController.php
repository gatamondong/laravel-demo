<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    //
    public function showIfDirective()
    {
        $isLoggedIn = false;  // Simulate user login status
        return view('blade.if', compact('isLoggedIn'));
    }

    public function showForEachDirective()
    {
        // Simulating a list of users
        $users = [
            ['name' => 'John Doe', 'email' => 'john@example.com'],
            ['name' => 'Jane Smith', 'email' => 'jane@example.com'],
            ['name' => 'Mary Johnson', 'email' => 'mary@example.com'],
        ];
        return view('blade.foreach', compact('users'));
    }

    public function showWhileDirective()
    {
        $counter = 1;  // Starting point for the loop
        $limit = 5;    // Condition to stop the loop

        return view('blade.while', compact('counter', 'limit'));
    }

    public function showIncludeSectionYield()
    {
        $title = 'Welcome to Blade Template Example';
        return view('blade.content', compact('title'));
    }
}
