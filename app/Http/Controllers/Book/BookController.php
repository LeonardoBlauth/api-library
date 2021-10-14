<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Traits\BaseDestroy\BaseDestroyController;
use App\Http\Controllers\Traits\BaseShow\BaseShowController;
use App\Http\Controllers\Traits\RequestValidation\RequestValidationController;
use App\Http\Requests\BookStorePostRequest;
use App\Http\Requests\BookUpdatePostRequest;
use Illuminate\Http\JsonResponse;

class BookController
{
    use BaseShowController, RequestValidationController, BaseDestroyController;

    public function store(BookStorePostRequest $request): JsonResponse
    {
        return $this->validatedStore($request);
    }

    public function update(BookUpdatePostRequest $request, int $id): JsonResponse
    {
        return $this->validatedUpdate($request, $id);
    }
}
