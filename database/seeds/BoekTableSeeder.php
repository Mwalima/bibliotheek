<?php

class BoekTableSeeder extends \Illuminate\Database\Seeder{

    public function run()
    {
        DB::table('boek')->delete();
        Boek::create(array(
            'afbeelding'     => 'huidpijn-saskia-noort.jpg',
            'auteur' => 'test1',
            'titel'    => 'een mooi boek',
            'omschrijving' => 'jajajaj hahahah een twee drie',
            ));
        Boek::create(array(
            'afbeelding'     => 'Mikaela-Bley-Dochter-vermist-Thriller-uit-Zweden.jpg',
            'auteur' => 'Mikaela Bley',
            'titel'    => 'Dochter vermist',
            'omschrijving' => 'asdfadfasdfasf sdsdf sdfsdf',
        ));
    }
}