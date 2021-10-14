<?php

namespace App\Http\Controllers\Address;

use App\Http\Controllers\Traits\BaseDestroy\BaseDestroyController;
use App\Http\Controllers\Traits\BaseShow\BaseShowController;
use App\Http\Controllers\Traits\RequestValidation\RequestValidationController;
use Illuminate\Http\JsonResponse;

class AddressController
{
    use BaseShowController, RequestValidationController, BaseDestroyController;
    public function store(AddressStorePostRequest $request): JsonResponse
    {
        return $this->validatedStore($request);
    }

    public function update(AddressUpdatePostRequest $request, int $id): JsonResponse
    {
        return $this->validatedUpdate($request, $id);
    }
}
