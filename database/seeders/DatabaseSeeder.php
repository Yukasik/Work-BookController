<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

    Book::create([
        'name' => 'Гарри Поттер и философский камень',
        'description' => 'История об одиннадцатилетнем мальчике-сироте, который узнает, что он волшебник, и отправляется на обучение в школу магии Хогвартс.',
        'year' => '1997',
        'author' => 'Дж. К. Роулинг'
    ]);

    Book::create([
        'name' => '1984',
        'description' => 'Культовый роман-антиутопия о жизни в тоталитарном государстве, где Министерство правды переписывает историю, а Большой Брат следит за каждым.',
        'year' => '1949',
        'author' => 'Джордж Оруэлл'
    ]);

    Book::create([
        'name' => 'Мастер и Маргарита',
        'description' => 'Мистический роман, в котором Сатана со своей свитой посещает Москву 1930-х годов, переплетая библейские сюжеты и историю трагической любви.',
        'year' => '1967',
        'author' => 'Михаил Булгаков'
    ]);
    }
}
