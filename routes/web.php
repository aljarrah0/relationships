<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users/{id}', function ($id) {

    $user = User::where('id', $id)->with('profile')->first();
    dd($user->toArray());
});
