<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Controller\onderhoudController;

class onderhoud extends Model
{
    use HasFactory;

    protected $fillable = [

        'naam',
        'omschrijving',
        'vergoeding',
        'apparaatid'



    ];

    protected $table = 'onderhouden';

    public $timestamps = false;
}
