<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::create([
            'id' => '1',
            'title' => 'la Cripta in pratica - TDJ Paola Palaia',
            'where' => 'VIALE ADRIATICO, 136 (ex Gil) - ROMA, Satm',
            'when' => 'mer, 18 settembre, 20:30 – 20:31',
            'date' => '2024-09-18',
            'music_type' => 'Rock',
            'event_type' => '[Lesson]',
            'zone' => 'test1',
            'price' => '20 euro',
            'managerName' => 'Sachin kavindu',
            'email' => 'test@gmail.com',
            'phone' => '0775835977',
            'desc' => "La pratica non è una lezione, ma non è neppure una milonga... allora cos'è? Per noi è uno spazio informale e accogliente dove confrontarsi e mettersi in gioco approfittando dei maestri presenti ;)",
        ]);
    }
}
