<?php

namespace Database\Factories\Contacts;

use App\Enums\ContactStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contacts\Contact>
 */
class ContactFactory extends Factory
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
            'email' => fake()->email(),
            'subject' => fake()->realText(32),
            'message' => fake()->realText(),
            'status' => fake()->randomElement(ContactStatus::cases()),
        ];
    }
}
