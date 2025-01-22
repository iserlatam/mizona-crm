<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Cliente;
use App\Models\Registro;

class RegistroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Registro::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'servicio' => $this->faker->word(),
            'detalle' => $this->faker->word(),
            'total_unitario' => $this->faker->randomFloat(0, 0, 9999999999.),
            'total' => $this->faker->randomFloat(0, 0, 9999999999.),
            'fecha_pago' => $this->faker->dateTime(),
            'metodo_pago' => $this->faker->word(),
            'estado_pago' => $this->faker->boolean(),
            'cliente_id' => Cliente::factory(),
        ];
    }
}
