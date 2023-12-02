<?php
namespace App\Domain\Patient\Database\Factory;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Domain\Patient\Models\Patient;
class PatientFactory extends Factory
{

    protected $model = Patient::class;


    public function definition()
{
    return [
        'id_card'=>$this->faker->realText(8),
        'gender'=>'Male',
        'name'=>$this->faker->firstNameMale,
        'surname'=>$this->faker->lastName,
        'date_of_birth'=>$this->faker->date(['Y-m-d']),
        'address'=>$this->faker->address,
        'post_code'=>$this->faker->postcode,
        'contact_number_1'=>$this->faker->phoneNumber,
        'contact_number_2'=>$this->faker->phoneNumber,
    ];
}
}
