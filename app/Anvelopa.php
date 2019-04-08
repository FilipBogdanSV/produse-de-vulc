<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anvelopa extends Model
{

    protected $table = 'anvelope';

    protected $fillable = [
        'nume',
        'img_name',
        'dimensiune',
        'descriere'
    ];
}
