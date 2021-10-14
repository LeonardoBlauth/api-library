<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Traits\BaseDestroy\BaseDestroyController;
use App\Http\Controllers\Traits\BaseShow\BaseShowController;
use App\Http\Controllers\Traits\RequestValidation\RequestValidationController;
use App\Http\Requests\OwnerStorePostRequest;
use App\Http\Requests\OwnerUpdatePostRequest;
use Illuminate\Http\JsonResponse;

class OwnerController
{
    use BaseShowController, RequestValidationController, BaseDestroyController;

    public function store(OwnerStorePostRequest $request): JsonResponse
    {
        return $this->validatedStore($request);
    }

    public function update(OwnerUpdatePostRequest $request, int $id): JsonResponse
    {
        return $this->validatedUpdate($request, $id);
    }
}
