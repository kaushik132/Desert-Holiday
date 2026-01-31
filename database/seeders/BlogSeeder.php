<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blog')->insert([
        [
            'blog_category_id' => 1,
            'title' => 'Top 10 Places to Visit in Kashmir',
            'slug' => Str::slug('Top 10 Places to Visit in Kashmir'),
            'image' => 'kashmir.jpg',
            'alt' => 'Kashmir Valleys',
            'description' => 'Kashmir is a paradise for travelers.',
            'facebook_link' => 'https://www.facebook.com/kashmirblog',
            'twitter_link' => 'https://x.com/kashmirblog',
            'instagram_link' => 'https://www.instagram.com/kashmirblog',
            'youtube_link' => 'https://youtube.com/kashmirblog',
            'seo_title' => 'Best Kashmir Travel Blog',
            'seo_des' => 'Top Kashmir travel destinations',
            'seo_key' => 'kashmir, travel, blog',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'blog_category_id' => 2,
            'title' => 'Manali Travel Guide 2025',
            'slug' => Str::slug('Manali Travel Guide 2025'),
            'image' => 'manali.jpg',
            'alt' => 'Manali Snow',
            'description' => 'Everything you need to know before visiting Manali.',
            'facebook_link' => 'https://www.facebook.com/manaliblog',
            'twitter_link' => 'https://x.com/manaliblog',
            'instagram_link' => 'https://www.instagram.com/manaliblog',
            'youtube_link' => 'https://youtube.com/manaliblog',
            'seo_title' => 'Manali Travel Guide',
            'seo_des' => 'Complete Manali tour guide',
            'seo_key' => 'manali, himachal, travel',
            'is_active' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]
    ]);
    }
}
