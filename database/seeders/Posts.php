<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class Posts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['title' => 'First Post', 'body' => 'Here is First post body.', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Second Post', 'body' => 'Here is Second post body.', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Third Post', 'body' => 'Here is Third post body.', 'status' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Fourth Post', 'body' => 'Here is Fourth post body.', 'status' => 1, 'created_at' => now(), 'updated_at' => now()]
        ];
        Post::insert($data);
    }
}
