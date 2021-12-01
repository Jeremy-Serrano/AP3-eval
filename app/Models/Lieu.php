<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lieu extends Model
{
    use HasFactory;

    protected $table = 'Lieu';
    protected $primaryKey = 'Id_Lieu';
    public $timestamps = false ;

    protected $fillable = [
        'AdresseLieu',
        

        
    ];
}
