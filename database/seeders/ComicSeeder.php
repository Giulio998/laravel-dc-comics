<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Comic;


class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('comics')->truncate();

        $comics = include 'comics.php';
        // @dump($comics);
       
        foreach ($comics as $row) {
            $comic = new Comic();

            $comic->title = $row['title'];
            $comic->description = $row['description'];
            $comic->thumb = $row['thumb'];
            $comic->price = $row['price'];
            $comic->series = $row['series'];
            $comic->sale_date = $row['sale_date'];
            $comic->type = $row['type'];
            $comic->save();
        }
    }
}