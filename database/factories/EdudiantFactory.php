<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EdudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cin'=>randomNumber($nbDigits = NULL, $strict = false),
            'nom'=>$this->faker->firstName(),
            'prenom'=>$this->faker->lastName(),
            'departement_id'=>Departement::get('id')->random(),
            'created_at'=>now(),
        ];
    }
}
