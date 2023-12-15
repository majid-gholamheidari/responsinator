<?php

namespace App\Interfaces;

interface UserRepositoryInterface
{

    /**
     * @param array $userData
     * @return mixed
     */
    public function createUser(array $userData): mixed;


    /**
     * @param array $columns
     * @param array $operators
     * @param array $values
     * @return mixed
     */
    public function findUser(array $columns, array $operators, array $values): mixed;


    /**
     * @param string $username
     * @param string $password
     * @return bool
     */
    public function loginAttempt(string $username, string $password): bool;
}
