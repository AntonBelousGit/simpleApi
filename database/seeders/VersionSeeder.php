<?php

namespace Database\Seeders;

use App\Models\Version;
use Illuminate\Database\Seeder;

class VersionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Version::factory()->createMany([
           ['title'=>'8.78','release_date'=>'2021-09-14'],
           ['title'=>'8.77','release_date'=>'2021-09-13'],
           ['title'=>'8.68','release_date'=>'2021-09-10'],
           ['title'=>'8.57','release_date'=>'2021-09-04'],
           ['title'=>'8.47','release_date'=>'2021-08-04'],
           ['title'=>'8.45','release_date'=>'2021-07-14'],
           ['title'=>'8.40','release_date'=>'2021-06-14'],
        ]);
    }
}
