<?php


namespace App\Models;

use App\Models\ApiModel;

class Calendar extends ApiModel
{

    public function owner(){
        return $this->belongsTo(User::class);
    }

    public function appointments(){
        return $this->hasMany(Appointment::class);
    }

    public function TimeUnit()
    {
        return $this->hasOne(TimeUnit::class);
    }


}
