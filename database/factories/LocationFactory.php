<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_pos'=>$this->faker->company(),
            'slug'=>$this->faker->slug(),
            'alamat_pos'=>$this->faker->address(),
            'jam_ibadah'=>'09:00:00',
            'location_category_id'=>mt_rand(1,3)
        ];
    }
}
