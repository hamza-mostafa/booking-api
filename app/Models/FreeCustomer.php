<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;

class FreeCustomer extends User
{
    /**
     * @return HasOne
     */
    public function calendar(): HasOne
    {
        return $this->hasOne(Calendar::class);
    }
}
