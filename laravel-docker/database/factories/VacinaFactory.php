<?php

namespace Database\Factories;

use App\Models\Vacina;
use Illuminate\Database\Eloquent\Factories\Factory;

class VacinaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vacina::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->word(),
            'fabricante_fornecedor' => $this->faker->company(),
            'doses' => $this->faker->numberBetween(0, 100),
            'validade' => $this->faker->numberBetween(0, 100)
        ];
    }
}
