<?php

namespace App\Models;


class Appointment extends ApiModel
{
    /**
     * Defines the relationship
     *
     * @return mixed
     */
    public function Calendar()
    {
        return $this->belongsTo(Calendar::class);
    }

    /**
     * Defines the relationship
     *
     * @return mixed
     */
    public function booker()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Defines the relationship
     *
     * @return mixed
     */
    public function Attendees()
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * Has a defined quantity of slots
     *
     * @return mixed
     */
    public function slots()
    {
        return $this->hasMany(Slot::class);
    }

    /**
     * Has a defined place
     *
     * @return mixed
     */
    public function place()
    {
        return $this->hasOne(Place::class);
    }
}
