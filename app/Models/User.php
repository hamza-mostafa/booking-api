<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'email_verified_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Defines the relationship between user and socialprovider table
     *
     * @return HasMany
     */
    public function linkedSocialAccounts(): HasMany
    {
        return $this->hasMany(LinkedSocialAccount::class);
    }

    /**
     * Defines the relationship between user and teams
     *
     * @return BelongsToMany
     */
    public function team(): BelongsToMany
    {
        return $this->belongsToMany(Team::class);
    }

    /**
     * Defines the relationship between user and appointments
     *
     * @return HasManyThrough
     */
    public function Appointment(): HasManyThrough
    {
        return $this->hasManyThrough(Appointment::class, Calendar::class);
    }

    /**
     * Determine if the user has verified their email address.
     *
     * @return bool
     */
    public function hasVerifiedEmail() : bool
    {
        return $this->email_verified_at !== null;
    }

    /**
     * Mark the given user's email as verified.
     *
     * @return bool
     */
    public function markEmailAsVerified() : bool
    {
        return (bool)$this->update(['email_verified_at' => now()]);
    }

    /**
     * Send the email verification notification.
     *
     * @return void
     */
    public function sendEmailVerificationNotification()
    {
        // @todo this should init an event to send an email of verification
    }


}
