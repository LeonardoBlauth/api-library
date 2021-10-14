<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Traits\BaseDestroy\BaseDestroyController;
use App\Http\Controllers\Traits\BaseShow\BaseShowController;
use App\Http\Controllers\Traits\GetClass\GetClassController;
use App\Http\Requests\UserStorePostRequest;
use App\Http\Requests\UserUpdatePostRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Spatie\QueryBuilder\QueryBuilder;

class UserController
{
    use BaseShowController, GetClassController, BaseDestroyController;

    public function store(UserStorePostRequest $request): JsonResponse
    {
        $validated = $request->validated();

        $existingEmail = User::query()->where('email', '=', $validated['email'])->get();

        if ($existingEmail->count() !== 0) {
            return response()
                ->json(
                    [
                        'Error' => 'This email is already registered'
                    ],
                    405
                );
        }

        $user = User::create($validated);
        $user->password = Hash::make($user->password);
        $user->save();

        return response()
            ->json(
                $user,
                201
            );
    }

    public function update(UserUpdatePostRequest $request, int $id): JsonResponse
    {
        $user = User::find($id);

        if (is_null($user)) {
            return response()
                ->json(
                    [
                        'Error' => 'Resource not founded'
                    ],
                    404
                );
        }

        $user->fill($request->validated());
        $user->password = Hash::make($request->password);
        $user->save();

        return response()
            ->json(
                $user,
                200
            );
    }
}
