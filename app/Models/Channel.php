<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Channel extends Model
{
    use HasFactory;
    protected $fillable = ['channel_name', 'channel_icon'];

    /**
     * @return HasMany
     */
    public function programme()
    {
        return $this->hasOne('App\Models\Programme');
    }
}
