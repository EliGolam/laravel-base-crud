<?php

use Illuminate\Database\Seeder;
use App\models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comicsData = config('data.comics_data');

        $comic = new Comic();

        foreach($comicsData as $comicData) {
            foreach($comicData as $dataColumn => $data) {
                $comic[$dataColumn] = $data;
            }
        }

        $comic->save();
    }
}
