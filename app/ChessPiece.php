<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChessPiece extends Model
{
    public function scopeIsBlack($query)
    {
        return $query->where('is_black', true);
    }

    public function scopeIsWhite($query)
    {
        return $query->where('is_black', false);
    }
}
