<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;


    // old version of coupon

    public function discount($subtotal)
    {
        return ($subtotal * ($this->pourcentage / 100));
    }
}
