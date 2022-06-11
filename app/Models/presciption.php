<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class presciption extends Model
{
    use HasFactory;

   protected $fillable = [
        "medecine_id",
    ];
}
