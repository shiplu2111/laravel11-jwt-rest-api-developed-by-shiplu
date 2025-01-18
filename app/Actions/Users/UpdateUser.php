<?php

namespace App\Actions\Users;

use App\Models\User;

class UpdateUser
{
    public function __invoke(
        User $user,
        string $name,
        string $username,
        string $email,
    ): void {
        $user->fill([
            'name'  => $name,
            'email' => $email,
            'username' => $username,
        ]);

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
            $user->sendEmailVerificationNotification();
        }

        $user->save();
    }
}
