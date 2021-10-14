<?php

namespace App\Http\Controllers\Traits\RequestValidation;

use App\Http\Controllers\Traits\findId\FindByIdController;
use App\Http\Controllers\Traits\GetClass\GetClassController;
use Illuminate\Http\JsonResponse;

trait RequestValidationController
{
    use GetClassController, findByIdController;

    public function validatedStore($request): JsonResponse
    {
        return response()
            ->json(
                $this->getClass()::create($request->validated()),
                201
            );
    }

    public function validatedUpdate($request, int $id): JsonResponse
    {
        $resource = $this->findResourceById($id);

        $resource->fill($request->validated());
        $resource->save();

        return response()
            ->json(
                $resource,
                200
            );
    }
}
