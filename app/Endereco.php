<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    public function client(){
        return $this->belongsTo('App\Client');
        // return $this->hasOne(Endereco::class);
    }
}
