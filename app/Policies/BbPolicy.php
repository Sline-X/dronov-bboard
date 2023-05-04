<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Bb;

class BbPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function update(User $user, Bb $bb)
    {
        return $bb->user->id === $user->id;
    }

    public function destroy(User $user, Bb $bb)
    {
        return $this->update($user, $bb);
    }
}
