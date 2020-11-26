<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->word,
        'prenom' => $this->faker->word,
        'email' => $this->faker->word,
        'password' => $this->faker->word,
        'is_paye' => $this->faker->word,
        'remember_token' => $this->faker->word,
        'role' => $this->faker->randomDigitNotNull,
        'statut_matrimonial' => $this->faker->word,
        'telephone' => $this->faker->word,
        'sexe' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
