<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Traits\BaseDestroy\BaseDestroyController;
use App\Http\Controllers\Traits\BaseShow\BaseShowController;
use App\Http\Controllers\Traits\RequestValidation\RequestValidationController;
use App\Http\Requests\ColorStorePostRequest;
use App\Http\Requests\ColorUpdatePostRequest;
use Illuminate\Http\JsonResponse;

class ColorController
{
    use BaseShowController, RequestValidationController, BaseDestroyController;

    public function store(ColorStorePostRequest $request): JsonResponse
    {
        return $this->validatedStore($request);
    }

    public function update(ColorUpdatePostRequest $request, int $id): JsonResponse
    {
        return $this->validatedUpdate($request, $id);
    }
}
