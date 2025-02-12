<?php

use Illuminate\Support\Facades\Route;

use App\Models\Post;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\GreetController;

use App\Http\Middleware\CheckParam;

// default laravel route
Route::get('/', function () {
    return view('welcome');
});

// just returns a message
Route::get('/hello', function () {
    return 'hi';
});

// calls the greetMethod of the GreetController class
Route::get(
    '/greet', 
    [GreetController::class, 'greetMethod']
);

// gets all posts with their respective comments
Route::get('posts', function(){
    $res = Post::with('comments')->get();
    // $res = Post::all();
    dd($res->toArray());
});

// middleware test
Route::prefix('test')
    ->middleware(CheckParam::class)
    ->group(function () {
    Route::get('/', function () {
        return "This is the /test route.";
    });

    Route::get('{value}', function ($value) {
        return "Accepted: " . $value;
    });
});

// uses resource routes
/*
HTTP Method	    URL	                Controller Method	        Description
GET	            /items	            index	                    Display a listing of the items.
GET	            /items/create	    create	                    Show the form for creating an item.
POST	        /items	            store	                    Store a newly created item.
GET	            /items/{item}	    show	                    Display a specific item.
GET	            /items/{item}/edit	edit	                    Show the form for editing an item.
PUT/PATCH	    /items/{item}	    update	                    Update a specific item.
DELETE	        /items/{item}	    destroy	                    Delete a specific item.
*/
Route::resource('items', ItemsController::class);

// same equivalent as using the resource route
// take note that resource is better because it simply uses 1 line
// /items/create has to go first otherwise it gets mistaken as an 'id'
// try commenting the 7 routes below and uncomment the resource route

// Route::get('/items/create', [ItemsController::class, 'create'])->name('items.create');
// Route::get('/items', [ItemsController::class, 'index'])->name('items.index');
// Route::post('/items', [ItemsController::class, 'store'])->name('items.store');
// Route::get('/items/{id}/edit', [ItemsController::class, 'edit'])->name('items.edit');
// Route::put('/items/{id}', [ItemsController::class, 'update'])->name('items.update');
// Route::delete('/items/{id}', [ItemsController::class, 'destroy'])->name('items.destroy');
// Route::get('/items/{id}', [ItemsController::class, 'show'])->name('items.show');