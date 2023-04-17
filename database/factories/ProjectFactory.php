<?php

namespace Database\Factories;

use App\Models\ProjectCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'chain' => fake()->numberBetween(1,234),
            'total_supply' => fake()->numberBetween(1,234),
            'description' => fake()->sentence(),
            'twitter_link' => fake()->url(),
            'discord_link' => fake()->url(),
            'website_link' => fake()->url(),
            'profile_image_path' => '/images/projects/default.png',
            'banner_image_path' => '/images/projects/default.png',
            'pre_sale_timezone' => fake()->dateTime(),
            'pre_sale_date' => fake()->date(),
            'pre_sale_time' => fake()->dateTime(),
            'pre_sale_price' => fake()->numberBetween(1,234253),
            'mint_date' => fake()->date(),
            'mint_time' => fake()->dateTime(),
            'mint_price' => fake()->numberBetween(1,234253),
            'founder_name' => fake()->name(),
            'founder_email' => fake()->email(),
            'founder_phone' => fake()->phoneNumber(),
            'status' => fake()->randomElement(['published', 'requested', 'offline']),
            'is_super_featured' => fake()->boolean(),
            'is_featured' => fake()->boolean(),
            'is_link_verified' => fake()->boolean(),
            'is_dooxed_kyc_verified' => fake()->boolean(),
            'project_category_id' => ProjectCategory::all()->pluck('id')->random(),
        ];
    }
}
