<?php

namespace Database\Factories;
use App\Models\Departement;
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
            'cin'=>$this->faker->randomNumber($nbDigits = NULL, $strict = false),
            'nom'=>$this->faker->firstName(),
            'prenom'=>$this->faker->lastName(),
            'departement_id'=>Departement::get('id')->random(2),
            'created_at'=>now(),
        ];
    }
}
