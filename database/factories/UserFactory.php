<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'phone'=>$this->faker->phoneNumber,
            'phone1'=>$this->faker->phoneNumber,
            'dob'=>$this->faker->date('y-m-d'),
            'blood_group'=>$this->faker->randomElement(['O+','O-','A+','A-','B+','B-','AB+','AB-']),
            'designation'=>$this->faker->randomElement(['senior','junior','intern']),
            'employee_id'=>Str::upper(Str::random(10)),
            'permanent_address'=>$this->faker->address,
            'present_address'=>$this->faker->address,
            'photo'=>$this->faker->imageUrl('60','60'),
            'gender'=>$this->faker->randomElement(['male','female','others']),
            'marital_status'=>$this->faker->randomElement(['single','married','divorced']),
            'role'=>$this->faker->randomElement(['admin','employee']),
            'joining_date'=>$this->faker->date,
            'joining_salary'=>$this->faker->numberBetween(10000,10000),
            'status'=>'active',
        ];
    }
}
