<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChessPiece extends Model
{
    public function scopeIsDark($query)
    {
        return $this->where('is_dark', true);
    }
}
