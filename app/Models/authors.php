<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class authors extends Model
{
    public function bookss() {
        return $this->hasMany(books::class);
    }
    public function category(){
        return $this->belongsToMany(categories::class);
    }
}
