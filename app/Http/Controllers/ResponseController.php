<?php

namespace App\Http\Controllers;

use App\Http\Requests\Response\ResponseRequest;
use App\Interfaces\ResponseRepositoryInterface;

class ResponseController extends Controller
{

    private ResponseRepositoryInterface $responseRepository;
    public function __construct(ResponseRepositoryInterface $responseRepository)
    {
        $this->responseRepository = $responseRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $responses = $this->responseRepository->getUserResponses(auth()->user());
        return view('response.index', compact('responses'));
    }

    /**
     * Show the form for creating a new response.
     */
    public function create()
    {
        return view('response.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ResponseRequest $request)
    {
        return $this->saveResponse($request);
    }


    /**
     * Save (create or update) response in DB.
     */
    public function saveResponse($request, $uuid = null)
    {
        $header = [];
        foreach ($request->header_index as $index => $headerIndex)
            $header[$headerIndex] = $request->get('header_value')[$index];
        $request->merge(['header' => json_encode($header)]);

        $responseDate = $request->only([
            'title',
            'type',
            'body',
            'header',
            'code',
            'description',
            'header',
            'delay'
        ]);

        if ($uuid)
            $this->responseRepository->updateResponse($responseDate, $uuid);
        else
            $this->responseRepository->createResponse($responseDate);

        return redirect()->route('response.index')->with('success', 'Successfully done.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $uuid)
    {
        $response = $this->responseRepository->findResponseByUuid($uuid);
        return view('response.edit', compact('response'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ResponseRequest $request, string $uuid)
    {
        return $this->saveResponse($request, $uuid);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $uuid)
    {
        $this->responseRepository->destroyResponseByUuid($uuid);
    }
}
