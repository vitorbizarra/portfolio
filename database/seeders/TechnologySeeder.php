<?php

namespace Database\Seeders;

use App\Models\Content\Technology;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Technology::factory()->createMany([
            [
                'name' => 'PHP',
                'icon' => 'si-php',
                'sort' => 1,
            ],
            [
                'name' => 'Laravel',
                'icon' => 'si-laravel',
                'sort' => 2,
            ],
            [
                'name' => 'Livewire',
                'icon' => 'si-livewire',
                'sort' => 3,
            ],
            [
                'name' => 'Tailwind CSS',
                'icon' => 'si-tailwindcss',
                'sort' => 4,
            ],
            [
                'name' => 'Alpine.js',
                'icon' => 'si-alpinedotjs',
                'sort' => 5,
            ],
            [
                'name' => 'Docker',
                'icon' => 'si-docker',
                'sort' => 6,
            ],
            [
                'name' => 'MySQL',
                'icon' => 'si-mysql',
                'sort' => 7,
            ],
            [
                'name' => 'Git',
                'icon' => 'si-git',
                'sort' => 8,
            ],
            [
                'name' => 'GitHub',
                'icon' => 'si-github',
                'sort' => 9,
            ],
            [
                'name' => 'HTML',
                'icon' => 'si-html5',
                'sort' => 10,
            ],
            [
                'name' => 'CSS',
                'icon' => 'si-css3',
                'sort' => 11,
            ],
            [
                'name' => 'Bootstrap',
                'icon' => 'si-bootstrap',
                'sort' => 12,
            ],
        ]);
    }
}
