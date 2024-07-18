<?php

namespace Database\Seeders;

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
        \App\Models\Setting::create([
            'about_title' => 'Software Developer',
            'about_description' => 'Junior programmer focused on web programming.',
            'fb_url' => 'https://www.instagram.com/jaco_jean_ewe/',
            'github_url' => 'https://github.com/JacoJean07',
            'linkedin_url' => 'https://www.linkedin.com/in/jean-carlos-cede%C3%B1o-0617732a5/',
            'freelance_url' => '#li',
            'cv_url' => 'https://drive.google.com/file/d/12V32bCeKg15ksxgQEjonaJ3dzZhZnbBV/view',
            'video_url' => '#video'
        ]);
        // \App\Models\User::factory(1)->create();

        \App\Models\User::factory()->create([
            'name' => 'Jean Cedeño',
            'email' => 'cmjeancarlos4@gmail.com',
        ]);
    }
}
