<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:table('posts')->insert([
            'title' => 'Laravel Training 6 Days(Advanced)',
            'desc' => 'The 6 Days training focus on enhancement API to Restful Architecture',
            'user_id' => factory ('App\Models\User')->create()->id,
           
        ]);
    }
}
