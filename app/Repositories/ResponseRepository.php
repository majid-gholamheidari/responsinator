<?php

namespace App\Repositories;

use App\Interfaces\ResponseRepositoryInterface;
use App\Models\Response;
use App\Models\User;
use Illuminate\Support\Collection;

class ResponseRepository implements ResponseRepositoryInterface
{

    /**
     * @param array $responseData
     * @return Response
     */
    public function createResponse(array $responseData): Response
    {
        return Response::create($responseData);
    }

    /**
     * @param array $responseData
     * @param string $uuid
     * @return mixed
     */
    public function updateResponse(array $responseData, string $uuid)
    {
        return Response::whereUuid($uuid)->update($responseData);
    }

    /**
     * @param string $uuid
     * @return mixed
     */
    public function findResponseByUuid(string $uuid): mixed
    {
        return Response::whereUuid($uuid)->first();
    }

    /**
     * @param User $user
     * @return Collection
     */
    public function getUserResponses(User $user): Collection
    {
        return Response::whereUserId($user->id)->get();
    }

    /**
     * @param string $uuid
     * @return mixed
     */
    public function destroyResponseByUuid(string $uuid)
    {
        return Response::whereUuid($uuid)->delete();
    }

    /**
     * @param string $uuid
     * @return mixed
     */
    public function successRequest(string $uuid)
    {
        return Response::whereUuid($uuid)->increment('requests');
    }
}
