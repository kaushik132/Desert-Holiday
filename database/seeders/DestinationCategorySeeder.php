<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DestinationCategory;
use Illuminate\Support\Str;

class DestinationCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
  public function run(): void
    {
        $data = [
            [
                'name' => 'Beach Destinations',
                'image' => 'beach.jpg',
                'short_description' => 'Best beach destinations for holidays',
                'seo_title' => 'Top Beach Destinations',
                'seo_des' => 'Explore the best beach destinations across the world',
                'seo_key' => 'beach, holiday, sea',
            ],
            [
                'name' => 'Hill Stations',
                'image' => 'hill.jpg',
                'short_description' => 'Peaceful hill station destinations',
                'seo_title' => 'Best Hill Stations',
                'seo_des' => 'Top hill stations to relax and enjoy nature',
                'seo_key' => 'hill station, mountains, nature',
            ],
            [
                'name' => 'Adventure Trips',
                'image' => 'adventure.jpg',
                'short_description' => 'Thrilling adventure travel destinations',
                'seo_title' => 'Adventure Travel',
                'seo_des' => 'Best destinations for adventure lovers',
                'seo_key' => 'adventure, trekking, rafting',
            ],
        ];

        foreach ($data as $item) {
            DestinationCategory::create([
                'name' => $item['name'],
                'slug' => Str::slug($item['name']),
                'image' => $item['image'],
                'short_description' => $item['short_description'],
                'seo_title' => $item['seo_title'],
                'seo_des' => $item['seo_des'],
                'seo_key' => $item['seo_key'],
                'is_active' => '1',
            ]);
        }
    }
}
