<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    protected $table = 'diagnoses';

    public function solution(){
        return $this->belongsTo('App\Solution');
    }
}
