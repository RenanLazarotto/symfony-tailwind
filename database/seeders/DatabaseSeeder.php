<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Page;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // \App\Models\User::factory(10)->create();
        $category = Category::factory()->create();

        $user = User::factory()->create([
            'username'     => 'renan',
            'password'     => password_hash('renan', PASSWORD_DEFAULT),
            'display_name' => 'Renan Lazarotto',
            'email'        => 'renanlazarotto@gmail.com'
        ]);
        
        Page::factory()->count(10)->create()->each(function ($post) use ($user, $category) {
            $post->categories()->attach($category);
            $post->author($user->id);
        });
    }
}