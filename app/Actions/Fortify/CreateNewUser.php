<?php

namespace App\Actions\Fortify;

use App\Concerns\PasswordValidationRules;
use App\Concerns\ProfileValidationRules;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules, ProfileValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            ...$this->profileRules(),
            'password' => $this->passwordRules(),
        ])->validate();

        $plan_price = 0;

        switch($input['plan']) {
            case 'Starter':
                $plan_price = '0,00';
                break;
            case 'One':
                $plan_price = '250,00';
                break;
            case 'Two':
                $plan_price = '500,00';
                break;
            case 'Bronze':
                $plan_price = '600,00';
                break;
            case 'Prata':
                $plan_price = '800,00';
                break;
            case 'Ouro':
                $plan_price = '990,00';
                break;
            case 'Semestre Max':
                $plan_price = '1250,00';
                break;
            case 'Full 12 Booster':
                $plan_price = '1500,00';
                break;
        }

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'cnpj' => $input['cnpj'],
            'phone_number' => $input['phone'],
            'password' => $input['password'],
            'plan' => $input['plan'],
            'plan_price' => $plan_price,
            'start_date' => now()
        ]);
    }
}