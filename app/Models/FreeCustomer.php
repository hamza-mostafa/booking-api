<?php

namespace App\Models;

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
