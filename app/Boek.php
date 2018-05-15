<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boek extends Model
{
    public $table = "boek";

    protected $fillable = [
        'afbeelding', 'auteur', 'titel', 'omschrijving'
    ];
}
