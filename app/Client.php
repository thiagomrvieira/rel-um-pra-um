<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function endereco(){
        return $this->hasOne('App\Endereco');
        // return $this->hasOne(Endereco::class);
    }
}
