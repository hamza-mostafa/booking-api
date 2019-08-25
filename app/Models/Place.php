<?php

namespace App\Models;

class Place extends ApiModel
{
    public function Appointment()
    {
        return $this->hasMany(Appointment::class);
    }

    public function slots()
    {
        return $this->hasMany(Slot::class);
    }
}
