<?php

namespace App\Models;

use App\ApiModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Slot extends ApiModel
{
    /**
     * @return BelongsTo
     */
    public function place() : BelongsTo
    {
        return $this->belongsTo(Event::class);
    }

    /**
     * @return BelongsTo
     */
    public function occupier() : BelongsTo
    {
        return $this->hasOne(User::class);
    }
}
