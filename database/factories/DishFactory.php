<?php

namespace Database\Factories;

use App\Models\Dish;
use Illuminate\Database\Eloquent\Factories\Factory;

class DishFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dish::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'Italian_description' => $this->faker->text(40),
            'English_description' => $this->faker->text(40),
            'German_description'=> $this->faker->text(40),
            'price'=>$this->faker->numberBetween(10,500),
            'type'=>$this->faker->numberBetween(0,8)
        ];
    }
}
