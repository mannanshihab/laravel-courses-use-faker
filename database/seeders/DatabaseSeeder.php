<?php

namespace Database\Seeders;
use App\Models\Series;
use App\Models\Topic;
use App\Models\Platform;
use App\Models\User;
use App\Models\Course;
use App\Models\author;
use App\Models\Review;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Create User Admin
        User::create([
            'name'=>'Admin',
            'email'=>'hi@admin.me',
            'password'=>bcrypt('password'),
            'type'=> 1,
        ]);

        $series = [
            [
                'name'=> 'Laravel',
                'image'=> 'https://laravel-courses.com/storage/series/54e8baab-727e-4593-a78a-e0c22c569b61.png',
            ],
            [
                'name'=> 'PHP',
                'image'=> 'https://laravel-courses.com/storage/series/c9cb9b3c-4d8c-4df6-a7b7-54047ce907ad.png',
            ],
            [
                'name'=> 'livewire',
                'image'=> 'https://laravel-courses.com/storage/series/4dfa5245-e2fc-4dfe-88c9-5f001a180da6.png',
            ],
            [
                'name'=> 'alpine',
                'image'=> 'https://laravel-courses.com/storage/series/fe7d56b4-906c-4970-8c69-25956acb3988.png',
            ],
            [
                'name'=> 'tailwind',
                'image'=> 'https://laravel-courses.com/storage/series/e63d6d09-4af0-4a6d-9cee-2daf537afcc8.png',
            ]
        ];

        foreach ($series as $item) {

            Series::create([

            'name' =>$item['name'],
            'image' =>$item['image'],

            ]);

        }

        $topics = ['Eloquent','validation','Refactoring','Testing','Authentication'];

        foreach ($topics as $item) {
        $slug = strtolower(str_replace('','_', $item));
            
        Topic::create([
            'name' =>$item,
            'slug' => $slug
        ]);

        }
        
        $platform = ['Laracast','Laravel.io','Laravel News','Laracast Forum','Authentication'];

        foreach ($platform as $item) {

            Platform::create([

            'name' =>$item,

            ]);

        }

        //create author
        Author::factory(10)->create();

        //create 50 users
        User::factory(50)->create();

        //create 100 Course
        Course::factory(100)->create();
            $courses = Course::all();

            foreach ($courses as $course) {

            $topics = Topic::all()->random(rand(1,5))->pluck('id')->toArray();
            $course->topics()->attach($topics);

            $authors = Author::all()->random(rand(1,3))->pluck('id')->toArray();
            $course->authors()->attach($authors);

            $series = Series::all()->random(rand(1,3))->pluck('id')->toArray();
            $course->series()->attach($series);
        
        
            
        //create 100 Review
        Review::factory(100)->create();

    }
}
}