<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Event;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Event::class;
    public function definition(): array
    {
        return [
            //
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'category' =>$this->faker->randomElement(['Upcoming', 'Previous','On-Going']), // Generate a random job title
            'date' => $this->faker->date,
            'time' => $this->faker->time('H:i'),
            'location' => $this->faker->address,
            'photo' => $this->faker->imageUrl(800, 480, 'event', true),
            'map' => $this->faker->url,
            'description' => $this->faker->paragraph,
            'application_fees' => $this->faker->randomFloat(2, 0, 400),
        ];
    }
}
