<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgrammeDetail extends Model
{
    use HasFactory;

    public function programme() {
    	return $this->belongsTo('App\Models\Programme');
    }
}
