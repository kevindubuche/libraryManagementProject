<?php

namespace Database\Factories;

use App\Models\Emprunt;
use App\Models\User;
use App\Models\Livre;
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
        'id_utilisateur' => User::all()->random()->id,
        'id_livre' => Livre::all()->random()->id,
        'date_de_restitution' => $this->faker->dateTimeBetween('now', '+10 days'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        // 'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
