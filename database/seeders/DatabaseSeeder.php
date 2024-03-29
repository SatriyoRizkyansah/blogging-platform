<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Satriyo Rizkyansah',
            'username' => 'satriyorizkyansah',
            'email' => 'satriyorizkyansah@gmail.com',
            'password' => bcrypt('123123')
        ]);

        // User::create([
        //     'name' => 'Choirul Anam',
        //     'email' => 'anam@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'orem ipsum dolor sit amet, consectetur adipisicing elit. Illo exercitationem fugiat doloribus obcaecati asperiores excepturi fugit harum sequi quisquam reiciendis vel est ab',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo exercitationem fugiat doloribus obcaecati asperiores excepturi fugit harum sequi quisquam reiciendis vel est ab, necessitatibus ullam, sed consequatur et, incidunt laborum quidem. Repudiandae sequi nam est consequatur iure ipsam recusandae nostrum! Impedit ab ipsa quam doloremque alias eveniet minima mollitia officiis error dolore nostrum vero at, earum sit, dolor esse deleniti. Perspiciatis natus, non commodi obcaecati enim iusto dolor, nostrum veniam fuga cupiditate dolores id eos deserunt perferendis voluptas veritatis repellat laudantium eum maiores placeat accusamus quibusdam ipsam nihil? Excepturi quod asperiores consequuntur laudantium, obcaecati in voluptatum eaque itaque neque cum?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'orem ipsum dolor sit amet, consectetur adipisicing elit. Illo exercitationem fugiat doloribus obcaecati asperiores excepturi fugit harum sequi quisquam reiciendis vel est ab',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo exercitationem fugiat doloribus obcaecati asperiores excepturi fugit harum sequi quisquam reiciendis vel est ab, necessitatibus ullam, sed consequatur et, incidunt laborum quidem. Repudiandae sequi nam est consequatur iure ipsam recusandae nostrum! Impedit ab ipsa quam doloremque alias eveniet minima mollitia officiis error dolore nostrum vero at, earum sit, dolor esse deleniti. Perspiciatis natus, non commodi obcaecati enim iusto dolor, nostrum veniam fuga cupiditate dolores id eos deserunt perferendis voluptas veritatis repellat laudantium eum maiores placeat accusamus quibusdam ipsam nihil? Excepturi quod asperiores consequuntur laudantium, obcaecati in voluptatum eaque itaque neque cum?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'orem ipsum dolor sit amet, consectetur adipisicing elit. Illo exercitationem fugiat doloribus obcaecati asperiores excepturi fugit harum sequi quisquam reiciendis vel est ab',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo exercitationem fugiat doloribus obcaecati asperiores excepturi fugit harum sequi quisquam reiciendis vel est ab, necessitatibus ullam, sed consequatur et, incidunt laborum quidem. Repudiandae sequi nam est consequatur iure ipsam recusandae nostrum! Impedit ab ipsa quam doloremque alias eveniet minima mollitia officiis error dolore nostrum vero at, earum sit, dolor esse deleniti. Perspiciatis natus, non commodi obcaecati enim iusto dolor, nostrum veniam fuga cupiditate dolores id eos deserunt perferendis voluptas veritatis repellat laudantium eum maiores placeat accusamus quibusdam ipsam nihil? Excepturi quod asperiores consequuntur laudantium, obcaecati in voluptatum eaque itaque neque cum?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'orem ipsum dolor sit amet, consectetur adipisicing elit. Illo exercitationem fugiat doloribus obcaecati asperiores excepturi fugit harum sequi quisquam reiciendis vel est ab',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo exercitationem fugiat doloribus obcaecati asperiores excepturi fugit harum sequi quisquam reiciendis vel est ab, necessitatibus ullam, sed consequatur et, incidunt laborum quidem. Repudiandae sequi nam est consequatur iure ipsam recusandae nostrum! Impedit ab ipsa quam doloremque alias eveniet minima mollitia officiis error dolore nostrum vero at, earum sit, dolor esse deleniti. Perspiciatis natus, non commodi obcaecati enim iusto dolor, nostrum veniam fuga cupiditate dolores id eos deserunt perferendis voluptas veritatis repellat laudantium eum maiores placeat accusamus quibusdam ipsam nihil? Excepturi quod asperiores consequuntur laudantium, obcaecati in voluptatum eaque itaque neque cum?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
