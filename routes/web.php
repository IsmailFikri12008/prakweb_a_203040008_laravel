<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view ('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view ('about', [
        "title" => "About",
        "name" => "Ismail Fikri",
        "email" => "203040008@mail.unpas.ac.id",
        "image" => "ppgoogle.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ismail Fikri",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. A vero, non harum dignissimos doloribus qui illum odit vitae ea numquam tenetur illo culpa nostrum, enim assumenda quos iusto veritatis. Consequuntur? Lorem ipsum dolor sit amet consectetur adipisicing elit. A vero, non harum dignissimos doloribus qui illum odit vitae ea numquam tenetur illo culpa nostrum, enim assumenda quos iusto veritatis. Consequuntur? Lorem ipsum dolor sit amet consectetur adipisicing elit. A vero, non harum dignissimos doloribus qui illum odit vitae ea numquam tenetur illo culpa nostrum, enim assumenda quos iusto veritatis. Consequuntur?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Fikri Ismail",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. A vero, non harum dignissimos doloribus qui illum odit vitae ea numquam tenetur illo culpa nostrum, enim assumenda quos iusto veritatis. Consequuntur? Lorem ipsum dolor sit amet consectetur adipisicing elit. A vero, non harum dignissimos doloribus qui illum odit vitae ea numquam tenetur illo culpa nostrum, enim assumenda quos iusto veritatis. Consequuntur? Lorem ipsum dolor sit amet consectetur adipisicing elit. A vero, non harum dignissimos doloribus qui illum odit vitae ea numquam tenetur illo culpa nostrum, enim assumenda quos iusto veritatis. Consequuntur? Lorem ipsum dolor sit amet consectetur adipisicing elit. A vero, non harum dignissimos doloribus qui illum odit vitae ea numquam tenetur illo culpa nostrum, enim assumenda quos iusto veritatis. Consequuntur?"
        ]
    ];
    return view ('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// Halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ismail Fikri",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. A vero, non harum dignissimos doloribus qui illum odit vitae ea numquam tenetur illo culpa nostrum, enim assumenda quos iusto veritatis. Consequuntur? Lorem ipsum dolor sit amet consectetur adipisicing elit. A vero, non harum dignissimos doloribus qui illum odit vitae ea numquam tenetur illo culpa nostrum, enim assumenda quos iusto veritatis. Consequuntur? Lorem ipsum dolor sit amet consectetur adipisicing elit. A vero, non harum dignissimos doloribus qui illum odit vitae ea numquam tenetur illo culpa nostrum, enim assumenda quos iusto veritatis. Consequuntur?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Fikri Ismail",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. A vero, non harum dignissimos doloribus qui illum odit vitae ea numquam tenetur illo culpa nostrum, enim assumenda quos iusto veritatis. Consequuntur? Lorem ipsum dolor sit amet consectetur adipisicing elit. A vero, non harum dignissimos doloribus qui illum odit vitae ea numquam tenetur illo culpa nostrum, enim assumenda quos iusto veritatis. Consequuntur? Lorem ipsum dolor sit amet consectetur adipisicing elit. A vero, non harum dignissimos doloribus qui illum odit vitae ea numquam tenetur illo culpa nostrum, enim assumenda quos iusto veritatis. Consequuntur? Lorem ipsum dolor sit amet consectetur adipisicing elit. A vero, non harum dignissimos doloribus qui illum odit vitae ea numquam tenetur illo culpa nostrum, enim assumenda quos iusto veritatis. Consequuntur?"
        ]
    ];

    $new_post = [];

    foreach ($blog_posts as $post) {
        if($post['slug'] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
