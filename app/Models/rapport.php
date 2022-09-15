<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Controller\rapportController;

class rapport extends Model
{
    use HasFactory;

    protected $fillable = [

        'inkoop',
        'werkvoorraad',
        'date',



    ];

    protected $table = 'rapportage';

    public $timestamps = false;
}
