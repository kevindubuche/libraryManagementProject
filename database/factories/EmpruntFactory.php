<?php

namespace Database\Factories;

use App\Models\Emprunt;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpruntFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Emprunt::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_utilisateur' => $this->faker->word,
        'id_livre' => $this->faker->word,
        'date_de_restitution' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
