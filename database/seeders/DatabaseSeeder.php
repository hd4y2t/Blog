<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Category::factory(5)->create();
        Post::factory(10)->create();
        // User::create([
        //     'name' => 'hidayat',
        //     'email' => 'hdyt@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);
        // User::create([
        //     'name' => 'sandi',
        //     'email' => 'sandi@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);

        // Category::create([
        //     'name' => 'Programming',
        //     'slug' => 'programming'
        // ]);

        // Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        // Post::create([
        //     'title' => 'Judul pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo eum vitae eligendi iure aliquam dolorum a molestias reiciendis molestiae nemo, at quo, ipsa vero nostrum quos iusto voluptatem quidem placeat velit eius amet cupiditate, omnis doloribus voluptates. Reiciendis, aspernatur provident',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo eum vitae eligendi iure aliquam dolorum a molestias reiciendis molestiae nemo, at quo, ipsa vero nostrum quos iusto voluptatem quidem placeat velit eius amet cupiditate, omnis doloribus voluptates. Reiciendis, aspernatur provident in, expedita tempore praesentium eos quia nemo ipsum dignissimos omnis.',
        //     'category_id' =>1,
        //     'user_id'=>1
        // ]);

        // Post::create([
        //     'title' => 'Judul kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo eum vitae eligendi iure aliquam dolorum a molestias reiciendis molestiae nemo, at quo, ipsa vero nostrum quos iusto voluptatem quidem placeat velit eius amet cupiditate, omnis doloribus voluptates. Reiciendis, aspernatur provident',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo eum vitae eligendi iure aliquam dolorum a molestias reiciendis molestiae nemo, at quo, ipsa vero nostrum quos iusto voluptatem quidem placeat velit eius amet cupiditate, omnis doloribus voluptates. Reiciendis, aspernatur provident in, expedita tempore praesentium eos quia nemo ipsum dignissimos omnis.',
        //     'category_id' =>2,
        //     'user_id'=>1
        // ]);
        // Post::create([
        //     'title' => 'Judul ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo eum vitae eligendi iure aliquam dolorum a molestias reiciendis molestiae nemo, at quo, ipsa vero nostrum quos iusto voluptatem quidem placeat velit eius amet cupiditate, omnis doloribus voluptates. Reiciendis, aspernatur provident',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo eum vitae eligendi iure aliquam dolorum a molestias reiciendis molestiae nemo, at quo, ipsa vero nostrum quos iusto voluptatem quidem placeat velit eius amet cupiditate, omnis doloribus voluptates. Reiciendis, aspernatur provident in, expedita tempore praesentium eos quia nemo ipsum dignissimos omnis.',
        //     'category_id' =>2,
        //     'user_id'=>2
        // ]);
    }
}
