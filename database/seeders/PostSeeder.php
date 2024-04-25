<?php

namespace Database\Seeders;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use function Symfony\Component\Translation\t;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10 ;  $i++){
            DB::table('posts')->insert([
               'title'=> fake()->title,
               'content'=> fake()->text,
                'created_at'=> Carbon::now(),
                'category_id'=> rand(1,10)
            ]);
        }
    }
}
