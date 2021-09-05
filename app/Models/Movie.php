<?php

namespace App\Models;

use App\Migrations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['title','genre','release','synopsis','rating','image'];
    
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}


