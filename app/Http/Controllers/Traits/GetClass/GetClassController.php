<?php

namespace App\Http\Controllers\Traits\GetClass;

trait GetClassController
{
    public function getClass(): string
    {
        $model = substr(self::class, 21, -10);
        return "App\\Models\\{$model}";
    }
}
