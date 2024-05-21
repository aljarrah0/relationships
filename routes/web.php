<?php

use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('users/{id}', function ($id) {

    $user = User::where('id', $id)->with('profile')->first();
    dd($user->toArray());
});

Route::get('profiles/{id}', function ($id) {
    $profile = Profile::where('id', $id)->with('user')->first();

    dd($profile->toArray());
});

Route::get('user/{id}/posts/', function ($id) {

    $user = User::where('id', $id)->with('posts')->first();

    dd($user->toArray());
});
