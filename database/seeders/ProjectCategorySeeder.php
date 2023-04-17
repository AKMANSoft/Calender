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

        ProjectCategory::create(
            ['name' => 'Arbitrum', 'short_name' => 'ARB', 'slug' => 'arbitrum'],
        );

        ProjectCategory::create(
            ['name' => 'Avalanche', 'short_name' => 'AVAX', 'slug' => 'avalanche'],
        );

        ProjectCategory::create(
            ['name' => 'BNB Chain', 'short_name' => 'BNB', 'slug' => 'bnb-chain'],
        );

        ProjectCategory::create(
            ['name' => 'Klaytn', 'short_name' => 'KLAY', 'slug' => 'klaytn'],
        );

        ProjectCategory::create(
            ['name' => 'Optimism', 'short_name' => 'OP', 'slug' => 'optimism'],
        );
    }
}
