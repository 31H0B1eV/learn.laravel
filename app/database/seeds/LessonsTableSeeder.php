<?php


use Faker\Factory as Faker;

class LessonsTableSeeder extends Seeder {

    public function run()
    {
        Lesson::truncate();

        $faker = Faker::create('ru_RU');

        foreach (range(1, 10000) as $index)
        {
            Lesson::create([
                'title' => $faker->sentence(5),
                'body'  => $faker->paragraph(4)
            ]);
        }
    }
}