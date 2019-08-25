<?php

namespace App\Models;

use App\ApiModel;

class LinkedSocialAccount extends ApiModel
{
    protected $fillable = [
        'provider_name',
        'provider_id',
    ];

    /**
     * Relationship between the social account and the user
     *
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
