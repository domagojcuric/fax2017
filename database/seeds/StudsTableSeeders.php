<?php
// napravljeno na ovaj nacin  :php artisan make:seeder StudsTableSeeders

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class StudsTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker=Faker::create();
       foreach(range(1,10) as $index){
           DB::table("studs")->insert([
           
           ]);
           
       }
    }
}
