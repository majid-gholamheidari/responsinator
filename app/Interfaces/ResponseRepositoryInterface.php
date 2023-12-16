<?php

namespace App\Interfaces;

use App\Models\User;

interface ResponseRepositoryInterface
{

    /**
     * @param array $responseData
     * @return mixed
     */
    public function createResponse(array $responseData): mixed;

    /**
     * @param array $responseData
     * @param string $uuid
     * @return mixed
     */
    public function updateResponse(array $responseData, string $uuid): mixed;

    /**
     * @param string $uuid
     * @return mixed
     */
    public function findResponseByUuid(string $uuid): mixed;

    /**
     * @param User $user
     * @return mixed
     */
    public function getUserResponses(User $user): mixed;

    /**
     * @param string $uuid
     * @return mixed
     */
    public function destroyResponseByUuid(string $uuid): mixed;

    /**
     * @param string $uuid
     * @return mixed
     */
    public function successRequest(string $uuid): mixed;
}
