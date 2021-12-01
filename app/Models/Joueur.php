<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joueur extends Model
{
    use HasFactory;
    protected $table = 'Joueur';
    protected $primaryKey = 'Id_Personnes';
    public $timestamps = false ;

    protected $fillable = [
        'Categorie',
        'Poste',
        'DateEntreeClub',
        
    ];

    //---------------héritage---------------------------------------------//

    public function personne(){
    	return $this->hasOne('User', 'Id_Personnes');
    }

    //----------clé etrangere---------------------------------------------//

    public function tarifs(){
    	return $this->belongsTo('App\Models\Tarifs', 'Id_Tarifs');
    }
    //--------------Double clé etrangere--------------//
        public function evenement(){
        return $this->belongsToMany('App\Models\Evenement', 'Inscrire', 'Id_Personnes', 'Id_Evenement')
        ->withPivot('Absence')
        ->withPivot('TravailRealise');
    }

}
