<?php

namespace App\Http\Controllers;

use App\Interfaces\ResponseRepositoryInterface;
use Illuminate\Http\JsonResponse;

class ResponsinatorController extends Controller
{

    private ResponseRepositoryInterface $responseRepository;
    public function __construct(ResponseRepositoryInterface $responseRepository)
    {
        $this->responseRepository = $responseRepository;
    }

    /**
     * @param $uuid
     * @return JsonResponse
     */
    public function returnResponse($uuid)
    {
        $response = $this->responseRepository->findResponseByUuid($uuid);
        if ($response && $response->type === request()->method()) {
            $this->responseRepository->successRequest($uuid);
            return response()
                ->json(json_decode($response->body, true))
                ->withHeaders(json_decode($response->header, true) ?? [])
                ->setStatusCode($response->code);
        }

        return response()->json("There is no response according to your request...!");
    }
}
