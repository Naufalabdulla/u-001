<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hiragana extends Model
{
    use HasFactory;

    public  function alphabet() {
        return $this->belongsTo(alphabet::class);
    }
}
