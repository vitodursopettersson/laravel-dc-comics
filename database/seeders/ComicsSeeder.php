<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comicsData = include(storage_path('app/comics_data.php'));

        foreach ($comicsData as $comicData) {
            $comic = new Comic();
            $comic->title = $comicData['title'];
            $comic->description = $comicData['description'];
            $comic->thumb = $comicData['thumb'];
            $comic->price = (float)str_replace('$', '', $comicData['price']);
            $comic->series = $comicData['series'];
            $comic->sale_date = $comicData['sale_date'];
            $comic->type = $comicData['type'];
            $comic->artists = implode(',', $comicData['artists']);
            $comic->writers = implode(',', $comicData['writers']);
            $comic->save();
        }
    }
}
