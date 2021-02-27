<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        User::factory()->make([
            'username'     => 'renan',
            'password'     => password_hash('renan', PASSWORD_DEFAULT),
            'display_name' => 'Renan Lazarotto',
            'email'        => 'renanlazarotto@gmail.com'
        ]);
    }
}
