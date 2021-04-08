<?php

namespace Database\Factories;
use App\Models\Empleado;
use App\Models\Empresa;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empleado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
            'codigo' => $this->faker->randomNumber(),
            'nombre' => $this->faker->name(),
            'lugar_nacimiento' => $this->faker->city(),
            'fecha_nacimiento' => $this->faker->dateTimeThisCentury(),
            'telefono' => $this->faker->e164PhoneNumber(),
            'cargo' => $this->faker->jobTitle(),
            'estado' => $this->faker->randomElement(['contratado','suspendido','prueba']),
            'empresa_id'=> $this->faker->numberBetween(1,Empresa::count())
        ];
    }
}
