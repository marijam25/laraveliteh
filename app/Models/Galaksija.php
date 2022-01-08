<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Planeta;

class Galaksija extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'oznaka',
        'broj_planeta',
        'udaljenost_zemlja'
    ];

    public function planete()
    {
        return $this->hasMany(Planeta::class);
    }
}
