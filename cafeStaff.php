<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cafeStaff extends Model
{
    use HasFactory;
    public function cafes(){
        return $this->belongsTo(Cafe::class);
    }
}
