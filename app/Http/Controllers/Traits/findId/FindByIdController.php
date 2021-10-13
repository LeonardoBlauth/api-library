<?php

namespace App\Http\Controllers\Traits\findId;

use App\Http\Controllers\Traits\GetClass\GetClassController;

trait FindByIdController
{
    use GetClassController;

    public function findResourceById(int $id)
    {
        return $this->getClass()::findOrFail($id);
    }
}
