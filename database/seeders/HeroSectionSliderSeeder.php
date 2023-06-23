<?php

namespace Database\Seeders;

use App\Models\HeroSectionSlider;
use Illuminate\Database\Seeder;

class HeroSectionSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HeroSectionSlider::create(
            [
                'titre' => "slide 1",
                'image_path' => "frontend/images/bg/6.jpg",
            ]
        );

        HeroSectionSlider::create(
            [
                'titre' => "slide 2",
                'image_path' => "frontend/images/bg/35.jpg",
            ]
        );

        HeroSectionSlider::create(
            [
                'titre' => "slide 3",
                'image_path' => "frontend/images/bg/29.jpg",
            ]
        );
    }
}
