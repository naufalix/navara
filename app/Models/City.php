<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $guarded = [];

    public function city(){
        return $this->belongsTo(City::class);
    }
    public function encyclopedia() {
        return $this->hasMany(Encyclopedia::class, 'city_id');
    }
}
