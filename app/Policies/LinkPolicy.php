<?php

namespace App\Policies;

use App\Models\Link;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class LinkPolicy
{
    public function permission(User $user, Link $link)
    {
        return $link->user->is($user);
    }
}
