<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Type;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Education;
use App\Models\Blog;
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

        User::truncate();
        Type::truncate();
        Project::truncate();
        Skill::truncate();
        Education::truncate();
        Blog::truncate();
        
        User::factory()->count(2)->create();
        Type::factory()->count(3)->create();
        Project::factory()->count(4)->create();
        Skill::factory()->count(5)->create();   
        Education::factory()->count(3)->create();  
        Blog::factory()->count(5)->create(); 
    }
}
