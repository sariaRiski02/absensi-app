<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\group>
 */
class GroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $subjects = ['Matematika', 'Fisika', 'Kimia', 'Biologi', 'Sejarah', 'Geografi', 'Ekonomi', 'Bahasa Inggris'];
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement($this->subjects),
            'code_absen' => $this->faker->unique()->randomNumber(5),
            'deadline' => $this->faker->dateTimeBetween('now', '+2 days'),
            'id_user' => User::get('id')->random(),

        ];
    }
}
