<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Controller\apparaatController;

class apparaat extends Model
{
    use HasFactory;

    protected $fillable = [

        'naam',
        'omschrijving',
        'vergoeding',
        'gewicht',
        'onderdelen',

    ];

    protected $table = 'apparaten';

    public $timestamps = false;
}
