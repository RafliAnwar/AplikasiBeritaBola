<?php

namespace App\Models;


class Post
{
    private static $blog_post = [
        [
            "title" => "Belajar Nugas",
            "slug" => "judul-post-pertama",
            "author" => "Sage",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla beatae reprehenderit, dicta ea qui distinctio eaque eos minus dolorum, deleniti minima expedita dignissimos commodi id suscipit eius sequi nobis exercitationem, repellendus non? Aut officia perspiciatis soluta fugiat, aliquam iste id inventore sequi sunt nam odit fuga sed molestiae ex, quis eos voluptatum laboriosam est incidunt earum eligendi reprehenderit quos pariatur porro? Quis quod autem dolor ipsam aliquam velit reprehenderit quisquam? Quae expedita est officia in quidem. A, provident iure. Voluptas.",

        ],
        [
            "title" => "Belajar ngeValo",
            "slug" => "judul-post-kedua",
            "author" => "Brimstone",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere voluptates officia magnam suscipit voluptatem eum ullam est at, voluptatum tenetur harum, modi similique. Ab iusto facilis voluptatum libero vero amet odio! Ipsam accusantium doloremque repellendus sint commodi a et laboriosam, est provident? Deleniti mollitia, saepe in maiores fugiat sint nesciunt consequuntur voluptatibus sequi illo natus rem veritatis dolore eaque accusamus quod blanditiis tenetur consectetur voluptatem ex nam. Voluptas, doloremque distinctio, totam aperiam dolor aut non quidem consequuntur, deserunt doloribus quod ab tenetur? Quaerat nisi maiores, quasi recusandae cupiditate minus? Necessitatibus natus explicabo magni quidem ratione molestias. Cumque reiciendis ea aliquam?",

        ]
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
