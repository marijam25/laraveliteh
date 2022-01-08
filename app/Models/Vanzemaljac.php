<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Planeta;

class Vanzemaljac extends Model
{
    use HasFactory;


    protected $fillable = [
        'ime',
        'boja',
        'visina',
        'tezina',
        'planeta_id'
    ];

    public function planeta()
    {
        return $this->belongsTo(Planeta::class);
    }
}
