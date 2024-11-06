<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    public function author(){
        return $this->belongsTo(authors::class);
    }
}
