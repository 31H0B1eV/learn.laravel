<?php

class DatabaseSeeder extends Seeder {

    private $tables = [
        'users',
        'lessons',
        'lesson_user'
    ];

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        $this->cleanDatabase();

		Eloquent::unguard();

        $this->call('UsersTableSeeder');
        $this->call('LessonsTableSeeder');
		$this->call('LessonUserTableSeeder');
	}

    private function cleanDatabase()
    {
        /**
         * for 1701 Cannot truncate a table referenced in a foreign key constraint
         */
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        foreach ($this->tables as $tableName)
        {
            DB::table($tableName)->truncate();
        }

//        DB::table('lesson_tag')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=0'); //turn back
    }

}
