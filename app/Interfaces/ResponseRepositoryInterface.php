<?php

namespace App\Interfaces;

use App\Models\User;

interface ResponseRepositoryInterface
{

    /**
     * @param array $responseData
     * @return mixed
     */
    public function createResponse(array $responseData);

    /**
     * @param array $responseData
     * @param string $uuid
     * @return mixed
     */
    public function updateResponse(array $responseData, string $uuid);

    /**
     * @param string $uuid
     * @return mixed
     */
    public function findResponseByUuid(string $uuid);

    /**
     * @param User $user
     * @return mixed
     */
    public function getUserResponses(User $user);

    /**
     * @param string $uuid
     * @return mixed
     */
    public function destroyResponseByUuid(string $uuid);

    /**
     * @param string $uuid
     * @return mixed
     */
    public function successRequest(string $uuid);
}
