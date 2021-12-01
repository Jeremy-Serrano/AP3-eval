<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entraineur extends Model
{
    use HasFactory;

    protected $table = 'Entraineur';
    protected $primaryKey = 'Id_Personnes';
    public $timestamps = false ;

    protected $fillable = [
        'Diplome',
        'AnneeDexp',
        
    ];

    public function personne(){
    	return $this->hasOne('User', 'Id_Personnes');
    }

    //-------------------double clé etrangere----------------//
    
    public function convoquer(){
        return $this->belongsToMany('App\Models\Reunion', 'Convoquer', 'Id_Personnes', 'Id_Reunion');
    }

    public function mesRemplacants(){
        return $this->belongsToMany('App\Models\Entraineur', 'Remplace_remplacement', 'Id_Personnes', 'Id_Personnes_remplace')
        ->withPivot('DateRemplacement');
    }

    public function remplace(){
        return $this->belongsToMany('App\Models\Entraineur', 'Remplace_remplacement', 'Id_Personnes_remplace', 'Id_Personnes');
    }

}
