<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Traits\BaseDestroy\BaseDestroyController;
use App\Http\Controllers\Traits\BaseShow\BaseShowController;
use App\Http\Controllers\Traits\RequestValidation\RequestValidationController;
use App\Http\Requests\EmployeeStorePostRequest;
use App\Http\Requests\EmployeeUpdatePostRequest;
use Illuminate\Http\JsonResponse;

class EmployeeController
{
    use BaseShowController, RequestValidationController, BaseDestroyController;

    public function store(EmployeeStorePostRequest $request): JsonResponse
    {
        return $this->validatedStore($request);
    }

    public function update(EmployeeUpdatePostRequest $request, int $id): JsonResponse
    {
        return $this->validatedUpdate($request, $id);
    }
}
