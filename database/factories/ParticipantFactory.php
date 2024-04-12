<?php

namespace Database\Factories;


use App\Models\group;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\participant>
 */
class ParticipantFactory extends Factory
{

    protected $status = ['Hadir', 'Izin', 'Sakit', 'Alpa'];
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'status' => $this->faker->randomElement($this->status),
            'id_group' => group::get('id')->random(),

        ];
    }
}
