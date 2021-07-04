<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{HasOne, BelongsTo};

class Programme extends Model
{
    use HasFactory;

    /**
     * @return HasOne
     */
    public function programme_information()
    {
        return $this->HasOne('App\Models\ProgrammeDetail');
    }

    /**
     * @return BelongsTo
     */
    public function channel()
    {
        return $this->belongsTo('App\Models\Channel');
    }
}
