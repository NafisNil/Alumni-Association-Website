<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\News;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = News::class;
    public function definition(): array
    {
        return [
            //
            'title' => $this->faker->sentence, // Generate a random sentence for the title
            'description' => $this->faker->paragraph, // Generate a random paragraph for the description
            'slug' => $this->faker->slug, // Generate a URL-friendly slug
            'photo' => $this->faker->optional()->imageUrl(1300, 580, 'news', true), // Generate a random image URL or leave it null
            'file' => $this->faker->optional()->file('storage/app/public/news', 'storage/app/public/news', false), // Generate a random file URL or leave it null
        ];
    }
}
