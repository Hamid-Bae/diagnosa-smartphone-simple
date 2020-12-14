<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Problem extends Model
{
    protected $table = 'cases';

    public function solution(){
        return $this->belongsTo('App\Solution');
    }
}
