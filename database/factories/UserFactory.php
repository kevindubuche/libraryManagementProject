<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

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
        'nom' => $this->faker->lastName,
        'prenom' => $this->faker->firstName,
        'email' => $this->faker->unique()->safeEmail,
        'password' => Hash::make( $this->faker->word),
        'is_paye' => $this->faker->boolean(),
        'remember_token' => $this->faker->word,
        'role' => $this->faker->randomElement([0,1,2,3,4]),
        'statut_matrimonial' =>  $this->faker->randomElement(['Célibataire', 'Fiancé(e)','Marié(e)', 'Divorcé(e)','Veuf(ve)', 'En concubinage"']),
        'telephone' => $this->faker->phoneNumber,
        'sexe' => $this->faker->randomElement(['Masculin', 'Feminin']),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        // 'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
