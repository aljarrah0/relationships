<?php

use App\Models\Post;
use App\Models\Product;
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

    $userPosts = User::where('id', $id)->with('posts')->first();

    foreach ($userPosts->posts as $post) {
        echo '<h3>'.$post->title.'</h3>'.$post->body.'</br>';
    }

    dd($userPosts->toArray());
});

Route::get('all-posts', function () {
    $posts = Post::with('user')->get();

    foreach ($posts as $post) {
        echo '<h4>'.$post->title.'</h4>'.'<i>'.$post->user->name.'</i>';
    }

    dd($posts->toArray());

});

Route::get('user/{id}/products', function ($id) {
    $user = User::where('id', $id)->with('products')->first();
    echo '<h1>'.$user->name.'</h1>';
    foreach ($user->products as $product) {
        echo '<h4>'.$product->title.'</h4>';
    }
    dd($user->toArray());
});

Route::get('product/{id}/users', function ($id) {
    $product = Product::where('id', $id)->with('users')->first();
    echo '<h1>'.$product->title.'</h1>';
    foreach ($product->users as $user) {
        echo '<h6>'.'* '.$user->name.'</h6>';
    }
    dd($product->toArray());
});
