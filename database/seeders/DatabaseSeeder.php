<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Joel Anwar',
            'username'=>'joelanwar',
            'email' => 'joel@gmail.com',
            'password' => bcrypt('password'),
        ]);

        User::factory(3)->create(); //has corelation with UserFactory

        Category::create([
            'name' => 'League',
            'slug' => 'league',
        ]);
        Category::create([
            'name' => 'Transfer',
            'slug' => 'transfer',
        ]);
        Category::create([
            'name' => 'Nation',
            'slug' => 'nation',
        ]);
        

        Post::factory(20)->create();//PostFactory

        
        // User::create([
        //     'name' => 'Bang dodo',
        //     'email' => 'dodo@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, reprehenderit.',
        //     'body' => '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, quae necessitatibus voluptas enim amet tempora
        //     dicta similique, in corrupti debitis iure, optio saepe qui deleniti? Suscipit voluptates exercitationem facilis sequi
        //     recusandae fuga, vel perspiciatis laboriosam provident. Tenetur cum molestias qui nemo saepe accusamus fuga doloremque
        //     unde error, velit eum libero iste, rem aut omnis dolorem possimus, odit magnam. Modi eum consectetur temporibus
        //     voluptates.</p><p>Enim debitis voluptatum ipsam accusantium molestiae perferendis amet minima consequuntur? Culpa et sequi
        //     necessitatibus quasi soluta id doloremque suscipit rerum, deserunt eligendi? Enim quia perferendis labore doloribus
        //     autem veritatis nihil et cum temporibus, saepe voluptatem at est vel suscipit natus amet! Temporibus quae, sed atque
        //     tenetur placeat commodi? Perferendis eum eius corrupti atque! Ducimus quaerat possimus sint.</p> ',
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, reprehenderit.',
        //     'body' => '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, quae necessitatibus voluptas enim amet tempora
        //     dicta similique, in corrupti debitis iure, optio saepe qui deleniti? Suscipit voluptates exercitationem facilis sequi
        //     recusandae fuga, vel perspiciatis laboriosam provident. Tenetur cum molestias qui nemo saepe accusamus fuga doloremque
        //     unde error, velit eum libero iste, rem aut omnis dolorem possimus, odit magnam. Modi eum consectetur temporibus
        //     voluptates.</p><p>Enim debitis voluptatum ipsam accusantium molestiae perferendis amet minima consequuntur? Culpa et sequi
        //     necessitatibus quasi soluta id doloremque suscipit rerum, deserunt eligendi? Enim quia perferendis labore doloribus
        //     autem veritatis nihil et cum temporibus, saepe voluptatem at est vel suscipit natus amet! Temporibus quae, sed atque
        //     tenetur placeat commodi? Perferendis eum eius corrupti atque! Ducimus quaerat possimus sint.</p> ',
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, reprehenderit.',
        //     'body' => '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, quae necessitatibus voluptas enim amet tempora
        //     dicta similique, in corrupti debitis iure, optio saepe qui deleniti? Suscipit voluptates exercitationem facilis sequi
        //     recusandae fuga, vel perspiciatis laboriosam provident. Tenetur cum molestias qui nemo saepe accusamus fuga doloremque
        //     unde error, velit eum libero iste, rem aut omnis dolorem possimus, odit magnam. Modi eum consectetur temporibus
        //     voluptates.</p><p>Enim debitis voluptatum ipsam accusantium molestiae perferendis amet minima consequuntur? Culpa et sequi
        //     necessitatibus quasi soluta id doloremque suscipit rerum, deserunt eligendi? Enim quia perferendis labore doloribus
        //     autem veritatis nihil et cum temporibus, saepe voluptatem at est vel suscipit natus amet! Temporibus quae, sed atque
        //     tenetur placeat commodi? Perferendis eum eius corrupti atque! Ducimus quaerat possimus sint.</p> ',
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, reprehenderit.',
        //     'body' => '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, quae necessitatibus voluptas enim amet tempora
        //     dicta similique, in corrupti debitis iure, optio saepe qui deleniti? Suscipit voluptates exercitationem facilis sequi
        //     recusandae fuga, vel perspiciatis laboriosam provident. Tenetur cum molestias qui nemo saepe accusamus fuga doloremque
        //     unde error, velit eum libero iste, rem aut omnis dolorem possimus, odit magnam. Modi eum consectetur temporibus
        //     voluptates.</p><p>Enim debitis voluptatum ipsam accusantium molestiae perferendis amet minima consequuntur? Culpa et sequi
        //     necessitatibus quasi soluta id doloremque suscipit rerum, deserunt eligendi? Enim quia perferendis labore doloribus
        //     autem veritatis nihil et cum temporibus, saepe voluptatem at est vel suscipit natus amet! Temporibus quae, sed atque
        //     tenetur placeat commodi? Perferendis eum eius corrupti atque! Ducimus quaerat possimus sint.</p> ',
        // ]);
    }
}
