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
        $comicsData = config('data.comics-data');

        foreach($comicsData as $comicData) {

            $comic = new Comic();

            foreach($comicData as $dataColumn => $data) {
                $comic[$dataColumn] = $data;
            }

            $comic->save();
        }


    }
}
