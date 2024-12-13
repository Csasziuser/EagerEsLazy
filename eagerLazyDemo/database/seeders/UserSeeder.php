<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(100000)->create()->each( function ($user){
            $user->posts()->createMany([
                ['title' => 'Első Post', 'content' => 'Az első poszt tartalma.'],
                ['title' => 'Második Post', 'content' => 'A második poszt tartalma.'],
                ['title' => 'Harmadik Post', 'content' => 'A harmadik poszt tartalma.'],
                ['title' => 'Negyedik Post', 'content' => 'A negyedik poszt tartalma.'],
                ['title' => 'Ötödik Post', 'content' => 'Az ötödik poszt tartalma.']
            ]);
        });
    }
}
