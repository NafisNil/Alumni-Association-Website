<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Story;
use App\Models\User;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Story>
 */
class StoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Story::class;
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();

        return [
            //
            'title' => $this->faker->sentence, // Generate a random sentence for the title
            'desc' => $this->faker->paragraph, // Generate a random paragraph for the description
            'slug' => $this->faker->slug, // Generate a URL-friendly slug\
            'user_id' => $user->id, // Generate a random user ID between 1 and 10
        ];
    }
}
