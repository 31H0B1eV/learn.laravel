<?php

// Composer: "fzaninotto/faker": "v1.3.0"
//use Faker\Factory as Faker;

class LessonUserTableSeeder extends Seeder {

	public function run()
	{
        LessonUser::truncate();
//		$faker = Faker::create();

		foreach(range(1, 1000) as $index)
		{
			LessonUser::create([
                'lesson_id' => rand(1, 10000),
                'user_id' => rand(1, 100)
			]);
		}
	}

}