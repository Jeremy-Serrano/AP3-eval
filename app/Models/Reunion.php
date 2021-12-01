<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reunion extends Model
{
    use HasFactory;

    protected $table = 'Reunion';
    protected $primaryKey = 'Id_Reunion';
    public $timestamps = false ;

    protected $fillable = [
        'DateReunion',
        'objet',
        
        
    ];

    //-------------------double clé etrangere----------------//
    
    public function convoquer(){
        return $this->belongsToMany('App\Models\Entraineur', 'Convoquer', 'Id_Reunion', 'Id_Personnes');
    }
}
