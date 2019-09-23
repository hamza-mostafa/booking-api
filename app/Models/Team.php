<?php


namespace App\Models;

use App\ApiModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends ApiModel
{
    /**
     * @return HasMany
     */
    public function members() : HasMany
    {
        return $this->hasMany(User::class);
    }

    /**
     * @return BelongsTo
     */
    public function leader() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
