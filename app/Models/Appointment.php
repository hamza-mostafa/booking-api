<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Appointment extends ApiModel
{
    /**
     *   @return HasMany
     */
    public function Calendar() : HasMany
    {
        return $this->hasMany(Calendar::class);
    }

    /**
     * @return BelongsTo
     */
    public function organizer() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return HasMany
     */
    public function Attendees() : HasMany
    {
        return $this->hasMany(User::class);
    }

    /**
     * @return HasMany
     */
    public function slots() : HasMany
    {
        return $this->hasMany(Slot::class);
    }

    /**
     * @return BelongsTo
     */
    public function event() : BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}
