<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentDetail extends Model
{
    use HasFactory;
    
    public function rent() {
        return $this->belongsTo(Rent::class);
    }

    public function movie() {
        return $this->belongsTo(Movie::class);
    }
}
