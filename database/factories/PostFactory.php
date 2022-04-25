<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author'=> $this->faker->firstName(),
            'title'=>$this->faker->sentence(3),
            'content'=>$this->faker->paragraph(6),
            'created_at'=>$this->faker->dateTime('now'),
            'category_id'=>$this->faker->numberBetween(1,3),
            'updated_at'=>$this->faker->dateTime('now') 
        ];
    }
}
