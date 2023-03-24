<?php

namespace Database\Seeders;

use App\Models\ProjectCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProjectCategory::create(
            ['name' => 'Ethereum', 'slug' => 'ethereum'],
        );

        ProjectCategory::create(
            ['name' => 'Solana', 'slug' => 'solana'],
        );

        ProjectCategory::create(
            ['name' => 'Flow', 'slug' => 'flow'],
        );

        ProjectCategory::create(
            ['name' => 'Polygon', 'slug' => 'polygon'],
        );
    }
}
