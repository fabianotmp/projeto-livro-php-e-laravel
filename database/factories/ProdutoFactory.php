<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array{
    return [
        'nome'       => fake()->word(),
        'quantidade' => fake()->numberBetween(1, 100),
        'valor'      => fake()->randomFloat(2, 10, 999),
        'descricao'  => fake()->sentence(),
    ];
}
}
