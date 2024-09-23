<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MusicType;

class MusicTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MusicType::create([
            'id' => '1',
            'name' => 'Rock',
        ]);

        MusicType::create([
            'id' => '2',
            'name' => 'Pop',
        ]);

        MusicType::create([
            'id' => '3',
            'name' => 'Electronic',
        ]);

        MusicType::create([
            'id' => '4',
            'name' => 'Country',
        ]);

        MusicType::create([
            'id' => '5',
            'name' => 'Hip Hop',
        ]);

        MusicType::create([
            'id' => '6',
            'name' => 'Classical',
        ]);

        MusicType::create([
            'id' => '7',
            'name' => 'Jazz',
        ]);
    }
}
