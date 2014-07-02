<?php

use Faker\Factory as Faker;

class FavoritesTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();

        DB::table('favorites')->truncate();  // or need add model and remove this line

        foreach (range(1, 30) as $index)
        {
            $lesson = Lesson::orderBy(DB::raw('RAND()'))->first();
            User::orderBy(DB::raw('RAND()'))->first()
                                            ->favorites()
                                            ->attach($lesson->id);
        }
    }
}