<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    public function bookss(){
        return $this->belongsToMany(books::class);
    }
}
