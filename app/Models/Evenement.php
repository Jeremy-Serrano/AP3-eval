<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;
    protected $table = 'Evenement';
    protected $primaryKey = 'Id_Evenement';
    public $timestamps = false ;

    protected $fillable = [
        'Lieu',
        'Type',
        'DateEvent',
        
    ];

    //------------------------clé plusieurs a plusieurs---------------------------//

    public function inscrire(){
    	return $this->belongsToMany('App\Models\Joueur', 'Inscrire', 'Id_Evenement','Id_Personnes');
    }

    //------------clé etrangere------------------------------------//

    public function Entraineur(){
        return $this->belongsTo('App\Models\Entraineur', 'Id_Personnes');
    }

    public function lieu(){
        return $this->belongsTo('App\Models\Lieu', 'Id_Lieu');
    }

    public function type(){
        return $this->belongsTo('App\Models\Type', 'Id_Type');
    }
}
