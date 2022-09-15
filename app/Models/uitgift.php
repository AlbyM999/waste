<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Controller\uitgiftController;

class uitgift extends Model
{
    use HasFactory;

    protected $fillable = [

        'onderdeel',
        'tijdstip',
        'gewicht',
        'prijs',


    ];

    protected $table = 'uitgiften';

    public $timestamps = false;
}
