<?php

namespace App\Models;

class AnonymousCustomer extends User
{
    /**
     * @return HasOne
     */
    public function events(): HasOne
    {
        return $this->hasOne(Calendar::class);
    }

    public function code()
    {
        // @todo this should return a special code that is engraved in QR and other marketing stuff
    }
}
