<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Traits\BaseDestroy\BaseDestroyController;
use App\Http\Controllers\Traits\BaseShow\BaseShowController;
use App\Http\Controllers\Traits\RequestValidation\RequestValidationController;
use App\Http\Requests\AuthorStorePostRequest;
use App\Http\Requests\AuthorUpdatePostRequest;
use Illuminate\Http\JsonResponse;

class AuthorController
{
    use BaseShowController, RequestValidationController, BaseDestroyController;

    public function store(AuthorStorePostRequest $request): JsonResponse
    {
        return $this->validatedStore($request);
    }

    public function update(AuthorUpdatePostRequest $request, int $id): JsonResponse
    {
        return $this->validatedUpdate($request, $id);
    }
}
