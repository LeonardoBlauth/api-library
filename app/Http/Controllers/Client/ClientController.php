<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Traits\BaseDestroy\BaseDestroyController;
use App\Http\Controllers\Traits\BaseShow\BaseShowController;
use App\Http\Controllers\Traits\RequestValidation\RequestValidationController;
use App\Http\Requests\ClientStorePostRequest;
use App\Http\Requests\ClientUpdatePostRequest;
use Illuminate\Http\JsonResponse;

class ClientController
{
    use BaseShowController, RequestValidationController, BaseDestroyController;

    public function store(ClientStorePostRequest $request): JsonResponse
    {
        return $this->validatedStore($request);
    }

    public function update(ClientUpdatePostRequest $request, int $id): JsonResponse
    {
        return $this->validatedUpdate($request, $id);
    }
}
