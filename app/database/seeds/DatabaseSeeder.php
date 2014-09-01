<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		$this->call('ParkingoptionTableSeeder');
        $this->command->info('parking options table seeded!');

		// $this->call('UserTableSeeder');
	}

}