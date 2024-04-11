<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comic;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $comics = config('comics');

        // $this->command->info(print_r($comics));

        foreach ($comics as $comic) {
            $newComic = new Comic();

            $newComic->title = $comic['title'];
            $newComic->description = $comic['description'];
            $newComic->thumb = $comic['thumb'];
            $newComic->price = $comic['price'];
            $newComic->series = $comic['series'];
            $newComic->sale_date = $comic['sale_date'];
            $newComic->type = $comic['type'];
            $artistsList = json_encode($comic['artists']);
            $newComic->artists = $artistsList;
            $writersList = json_encode($comic['writers']);
            $newComic->writers = $writersList;

            $newComic->save();
        }
    }
}
