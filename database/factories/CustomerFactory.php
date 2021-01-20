<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'last_name' => $this->faker->word,
        'first_name' => $this->faker->word,
        'email' => $this->faker->word,
        'city' => $this->faker->word,
        'nationality' => $this->faker->word,
        'phone_number' => $this->faker->word,
        'phone_number' => $this->faker->word,
        'dateofbirth' => $this->faker->word,
        'religion' => $this->faker->word,
        'maritalStatus' => $this->faker->word,
        'nx_first_name' => $this->faker->word,
        'nx_last_name' => $this->faker->word,
        'nxother_name' => $this->faker->word,
        'nxdateofbirth' => $this->faker->word,
        'nxreligion' => $this->faker->word,
        'nxgender' => $this->faker->word,
        'nxpermanent_address' => $this->faker->word,
        'nxmobile' => $this->faker->word,
        'nxcity' => $this->faker->word,
        'nxnationality' => $this->faker->word,
        'nxstate' => $this->faker->word,
        'nxrelationship' => $this->faker->word,
        'bnkfirst_name' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
