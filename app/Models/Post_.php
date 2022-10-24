<?php

namespace App\Models;

class Post
{
    private static $blog_posts =  [
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

    public static function all() {
        return collect (self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
