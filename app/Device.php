<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    public function problems() {
        return $this->belongsToMany(Problem::class, 'diagnoses', 'device_id', 'case_id');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
