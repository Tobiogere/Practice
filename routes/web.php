<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home');
});


Route::post("/formsubmitted", function (Request $request) {

    $request->validate([
        'fullname' => 'required|min:3|max:30',
        'email' => 'required|min:3|max:30|email',
    ]);
    $fullname = $request->input("fullname");
    $email = $request->input("email");

    return "Your fullname is $fullname and your email is $email";
})->name('formsubmitted');
