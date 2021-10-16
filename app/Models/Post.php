<?php

namespace App\Models;

class Post
{
    private static $blog_post = [
        [
            'title' => 'Judul post',
            'slug' => 'judul-post',
            'author' => 'Hidayat',
            'body' => 'lorem ipsump dolosr;rm;mr s;damsldnasndlbuewlbrh hfwehkhfkeh'
        ],
        [
            'title' => 'Judul post 2',
            'slug' => 'judul-post-2',
            'author' => 'Hidayat 2',
            'body' => 'lorem43 wqewqe2343/2432olosr;rm;mr s;damsldnasndlbuewlbrh hfwehkhfkeh'
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $post = static::all();
        return $post->firstWhere('slug', $slug);
    }
}
