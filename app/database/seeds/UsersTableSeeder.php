<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
//        User::truncate();

		$faker = Faker::create();

		foreach(range(1, 100) as $index)
		{
			User::create([
                'user_name' => $faker->name($gender = null|'male'|'female'),
                'email' => $faker->email,
                'admin_group' => rand(0, 1),
                'password' => Hash::make($faker->sentence(1))
			]);
		}
        User::create([
            'user_name'   => 'ArtemZinoviev',
            'email'  => 'arzinoviev@gmail.com',
            'admin_group' => 1,
            'password'    => Hash::make('secret')
        ]);
	}

}