<?php


namespace App\Models;

use App\ApiModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TimeUnit extends ApiModel
{
    /**
     * @return HasMany
     */
    public function users() : HasMany
    {
        return $this->hasMany(User::class);
    }
}
