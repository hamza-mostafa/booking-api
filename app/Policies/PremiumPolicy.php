<?php

namespace App\Policies;

use App\Models\PremiumCustomer;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PremiumPolicy
{
    use HandlesAuthorization;

    /**
     * Confirms if the user is a premium customer.
     * @param  User $user
     * @return bool
     */
    public function isPremium(User $user): bool
    {
        return $user instanceof PremiumCustomer;
    }
}
