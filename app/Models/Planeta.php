<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Galaksija;
use App\Models\Vanzemaljac;

class Planeta extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'oznaka',
        'temperatura',
        'galak_id'
    ];

    public function galaksija()
    {
        return $this->belongsTo(Galaksija::class);
    }

    public function vanzemaljci()
    {
        return $this->hasMany(Vanzemaljac::class);
    }
}
