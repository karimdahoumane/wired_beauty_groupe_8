<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapport extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $primaryKey = null;

    public $incrementing = false;

    protected $fillable = [
        "product_code",
        "user_id",
        "zone_code",
        "score_skinbiosense",
        "session_id",
        "mesure"
    ];
}
