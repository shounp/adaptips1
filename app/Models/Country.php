<?php

namespace App\Models;

use App\Migrations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['country','id_movie'];

    public function movie()
    {
        return $this->hasOne(Movie::class);
    }
}
