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
            ['name' => 'Ethereum', 'short_name' => 'ETH', 'slug' => 'ethereum'],
        );

        ProjectCategory::create(
            ['name' => 'Solana', 'short_name' => 'SOL', 'slug' => 'solana'],
        );

        ProjectCategory::create(
            ['name' => 'Flow', 'short_name' => 'FLOW', 'slug' => 'flow'],
        );

        ProjectCategory::create(
            ['name' => 'Polygon', 'short_name' => 'MATIC', 'slug' => 'polygon'],
        );
    }
}
