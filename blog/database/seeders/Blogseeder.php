<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blogmodel;
use Faker\Factory as Faker;

class Blogseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=1 ; $i<=10 ; $i++)
        {
            $Blogmodel = new Blogmodel();
            $Blogmodel->name = $faker->name;
            $Blogmodel->username = $faker->username;
            $Blogmodel->Bio = "student";
            $Blogmodel->phone = "1234567891";
            $Blogmodel->City = $faker->city;
            $Blogmodel->email = $faker->email;
            $Blogmodel->State = $faker->state;
            $Blogmodel->Country = $faker->country;
            $Blogmodel->Gender = "M";
            $Blogmodel->save();
        }
    }
}
