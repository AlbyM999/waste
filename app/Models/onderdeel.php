<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Controller\onderdeelController;

class onderdeel extends Model
{
    use HasFactory;

    protected $fillable = [

        'naam',
        'omschrijving',
        'prijs per kg',
        'voorraad',


    ];

    protected $table = 'onderdelen';

    public $timestamps = false;
}
