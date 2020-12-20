<?php

namespace Database\Factories;

use App\Models\Livre;
use Illuminate\Database\Eloquent\Factories\Factory;

class LivreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Livre::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'position_dans_la_bibliotheque' => $this->faker->regexify('[A-Z]' . mt_rand(4, 200).'[A-Z]'. mt_rand(4, 200)),
        'titre' => $this->faker->realText(25),
        'annee_de_parution' => $this->faker->dateTimeBetween('-100 years', 'now')->format('Y'),
        'auteur' => $this->faker->name,
        'categorie' =>  $this->faker->randomElement(['Roman courtois',' Roman historique','Roman épistolaire',
        'Roman-mémoires','Roman d\'amour','Roman industriel','Nouvelle fiction']),
        // 'statut' => $this->faker->boolean(),
        'statut' => 1,
        'resume' => $this->faker->realText(1000),
        'isbn' => $this->faker->numerify('###-###-####'),
        'nombre_de_pages' => $this->faker->numberBetween(20,800),
        'etat' => $this->faker->randomElement([0,1,2,3,4]),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        // 'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
