<?php


use Faker\Factory as Faker;

class LessonsTableSeeder extends Seeder {

    public function run()
    {
//        Lesson::truncate();

        $faker = Faker::create('ru_RU');

        foreach (range(1, 10000) as $index)
        {
            $userId = User::orderBy(DB::raw('RAND()'))->first()->id;

            Lesson::create([
                'user_id' => $userId,
                'title' => $faker->sentence(5),
                'body'  => $faker->paragraph(4)
            ]);
        }
    }
}