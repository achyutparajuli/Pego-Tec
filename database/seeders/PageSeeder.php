<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Page::create([
            'name' => 'About Us',
            'slug' => 'about-us',
            'content' => '<h5>This is About Us Page</h5>',
            'user_id' => 1
        ]);

        Page::create([
            'name' => 'FAQ',
            'slug' => 'faq',
            'content' => '<h5>This is FAQ page</h5>',
            'user_id' => 1
        ]);
    }
}
