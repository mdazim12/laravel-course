<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Series;
use App\Models\Topic;
use App\Models\Platform;
use App\Models\User;
use App\Models\Course;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        $series     = ['PHP','Javascript','WordPress','Laravel'];

        foreach ($series as $item) {
           Series::create([
            'name'  =>$item,
           ]);
        }


        $topic    = ['Eloquent','Validation','Authentication','Testing','Refactoring'];

        foreach ($topic as $item) {
            Topic::create([
                'name'  =>$item,
            ]);
        }

        $platform  =['Youtube','Udemy','Laracast','Website','Online'];

        foreach ($platform as $item ) {
            Platform::create([
                'name'  =>$item,
            ]);
        }





        //create 50 users
        User::factory(50)->create();




        //create 100 course
        Course::factory(100)->create();






    }
}
