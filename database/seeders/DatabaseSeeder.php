<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();
        Post::factory(20)->create();



        // User::create([
        //     'name' => 'Fairuzizuan',
        //     'email' => 'fairuz@example.com',
        //     'password' => bcrypt('123')
        // ]);

        // User::create([
        //     'name' => 'Azzuri',
        //     'email' => 'azzri@example.com',
        //     'password' => bcrypt('123')
        // ]);

        Category::create([
            'nama' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'nama' => 'Web Tech',
            'slug' => 'web-tech'
        ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis, natus?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, dicta. Libero ipsum molestiae ipsam quasi tempore excepturi dolore facere sunt mollitia officiis voluptas architecto amet facilis adipisci sint id dicta, autem itaque repellat blanditiis, dolor debitis quod! Autem impedit quibusdam dicta quas illo pariatur laboriosam sint tenetur itaque. Tempora labore molestias ipsam in. Possimus excepturi similique provident cupiditate. Labore reprehenderit accusantium modi similique ullam aliquam! Voluptate ratione distinctio, commodi perspiciatis facilis, soluta vel labore alias saepe ducimus suscipit fugit quod, a aspernatur harum ipsum. Sed eius, iste velit est saepe exercitationem veniam, porro dolores obcaecati deleniti quidem illo? Necessitatibus, quam?',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis, natus?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, dicta. Libero ipsum molestiae ipsam quasi tempore excepturi dolore facere sunt mollitia officiis voluptas architecto amet facilis adipisci sint id dicta, autem itaque repellat blanditiis, dolor debitis quod! Autem impedit quibusdam dicta quas illo pariatur laboriosam sint tenetur itaque. Tempora labore molestias ipsam in. Possimus excepturi similique provident cupiditate. Labore reprehenderit accusantium modi similique ullam aliquam! Voluptate ratione distinctio, commodi perspiciatis facilis, soluta vel labore alias saepe ducimus suscipit fugit quod, a aspernatur harum ipsum. Sed eius, iste velit est saepe exercitationem veniam, porro dolores obcaecati deleniti quidem illo? Necessitatibus, quam?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis, natus?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, dicta. Libero ipsum molestiae ipsam quasi tempore excepturi dolore facere sunt mollitia officiis voluptas architecto amet facilis adipisci sint id dicta, autem itaque repellat blanditiis, dolor debitis quod! Autem impedit quibusdam dicta quas illo pariatur laboriosam sint tenetur itaque. Tempora labore molestias ipsam in. Possimus excepturi similique provident cupiditate. Labore reprehenderit accusantium modi similique ullam aliquam! Voluptate ratione distinctio, commodi perspiciatis facilis, soluta vel labore alias saepe ducimus suscipit fugit quod, a aspernatur harum ipsum. Sed eius, iste velit est saepe exercitationem veniam, porro dolores obcaecati deleniti quidem illo? Necessitatibus, quam?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis, natus?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, dicta. Libero ipsum molestiae ipsam quasi tempore excepturi dolore facere sunt mollitia officiis voluptas architecto amet facilis adipisci sint id dicta, autem itaque repellat blanditiis, dolor debitis quod! Autem impedit quibusdam dicta quas illo pariatur laboriosam sint tenetur itaque. Tempora labore molestias ipsam in. Possimus excepturi similique provident cupiditate. Labore reprehenderit accusantium modi similique ullam aliquam! Voluptate ratione distinctio, commodi perspiciatis facilis, soluta vel labore alias saepe ducimus suscipit fugit quod, a aspernatur harum ipsum. Sed eius, iste velit est saepe exercitationem veniam, porro dolores obcaecati deleniti quidem illo? Necessitatibus, quam?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}
