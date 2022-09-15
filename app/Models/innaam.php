<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Controller\innaamController;

class innaam extends Model
{
    use HasFactory;

    protected $fillable = [

        'apparaten',
        'time',



    ];

    protected $table = 'innames';

    public $timestamps = false;
}
