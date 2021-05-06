<?php

namespace Database\Factories;

use App\Models\Local;
use Illuminate\Database\Eloquent\Factories\Factory;

class LocalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Local::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $bairros = [
            "sernamby",
            "guriri"
        ];
        return [
            'logradouro' => $this->faker->address(),
            'numero' => $this->faker->numberBetween(0,4000),
            'bairro_distrito' => $bairros[$this->faker->numberBetween(0,1)],
            'cidade' => $this->faker->city(),
            'estado' => $this->faker->state(),
            'cep' => "20260-110"
        ];
    }
}
