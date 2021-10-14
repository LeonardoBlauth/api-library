<?php

namespace App\Http\Controllers\Traits\BaseDestroy;

use App\Http\Controllers\Traits\GetClass\GetClassController;
use Illuminate\Http\JsonResponse;

trait BaseDestroyController
{
    use GetClassController;

    public function destroy(int $id): JsonResponse
    {
        $qtyResourcesRemoved = $this->getClass()::destroy($id);

        return $qtyResourcesRemoved === 0
            ?
            response()
                ->json(
                    [
                        'Error' => 'Resource not found'
                    ],
                    404
                )
            :
            response()
                ->json(
                    null,
                    204
                );
    }
}
