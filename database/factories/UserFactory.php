<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Batch;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $batchIds = Batch::pluck('id')->toArray(); 
        $randomBatchId = $this->faker->randomElement($batchIds);
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            'address' => $this->faker->address, // Generate a random address
            'phone' => $this->faker->phoneNumber, // Generate a random phone number
            'photo' => $this->faker->optional()->imageUrl(300, 300, 'people', true), // Optional: Generate a random photo URL or leave it null
            'id_no' => $this->faker->numerify('ID###'), // Optional: Generate a random ID format like "ID123"
            'batch' => $randomBatchId,
            'occupation' => $this->faker->randomElement(['Job', 'Startup']), // Generate a random job title
            'company_name' => $this->faker->optional()->company, // Optional: Generate a random company name
            'business_name' => $this->faker->optional()->company, // Optional: Generate a random business name
            'business_info' => $this->faker->optional()->paragraph, // Optional: Generate random business information
            'business_type' => $this->faker->optional()->word, // Optional: Generate a random business type
            'business_location' => $this->faker->optional()->address, // Optional: Generate a random address for business location
            'type' => $this->faker->randomElement(['member']), // Generate one of the predefined types
            'status' => $this->faker->randomElement(['inactive', 'active']), // Generate one of the predefined statuses
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
