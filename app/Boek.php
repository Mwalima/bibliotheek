<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boek extends Model
{
    public $table = "Boek";

    protected $fillable = [
        'afbeelding', 'auteur', 'titel', 'omschrijving'
    ];
}
