<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alphabet extends Model
{
    use HasFactory;

    public function hiragana(){
        return $this->hasOne(hiragana::class);
    }
}
