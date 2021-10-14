<?php

namespace App\Http\Controllers\Traits\BaseShow;

use App\Http\Controllers\Traits\GetClass\GetClassController;
use Illuminate\Http\JsonResponse;
use Spatie\QueryBuilder\QueryBuilder;

trait BaseShowController
{
    use GetClassController;

    public function index(): JsonResponse
    {
        $validFields = $this->getClass()::make()->getFillable();
        array_push($validFields, 'id');

        $resource = QueryBuilder::for($this->getClass()::make())
            ->allowedFields($validFields)
            ->get();

        return response()
            ->json(
                $resource,
                200
            );
    }

    public function show(int $id): JsonResponse
    {
        $validFields = $this->getClass()::make()->getFillable();
        array_push($validFields, 'id');

        $resource = QueryBuilder::for($this->getClass()::make())
            ->where('id', $id)
            ->allowedFields($validFields)
            ->get();

        return is_null($resource)
            ?
            response()
                ->json(
                    null,
                    204
                )
            :
            response()
                ->json(
                    $resource,
                    200
                );
    }
}
