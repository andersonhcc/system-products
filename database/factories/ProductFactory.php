<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Category;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         $name = $this->faker->unique()->sentence();
        return [
            'name' => $name,
            'description'=> $this->faker->unique()->paragraph(),
            'count'=> $this->faker->randomNumber(2),
            'slug'=> Str::slug($name),
            'image'=> $this->faker->imageUrl(400,400),
            'id_user'=> User::pluck("id")->random(),
            'id_category'=> Category::pluck("id")->random()
        ];
    }
}
