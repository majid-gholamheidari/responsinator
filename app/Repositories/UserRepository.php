<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserRepository implements UserRepositoryInterface
{

    /**
     * @param array $userData
     * @return mixed
     */
    public function createUser(array $userData): mixed
    {
        return User::create($userData);
    }


    /**
     * @param array $columns
     * @param array $operators
     * @param array $values
     * @return mixed
     */
    public function findUser(array $columns, array $operators, array $values): mixed
    {
        if ( ( count($columns) === count($operators) ) && ( count($columns) === count($values) ) ) {
            $conditions = [];
            foreach ($columns as $index => $column) {
                $conditions[] = [
                    $column,
                    $operators[$index],
                    $values[$index]
                ];
            }
            return User::where($conditions)->first();
        }
        return null;
    }

    /**
     * @param string $username
     * @param string $password
     * @return bool
     */
    public function loginAttempt(string $username, string $password): bool
    {
        return Auth::attempt(['username' => $username, 'password' => $password], request('remember_me') ?? false);
    }
}
