<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'Personnes';
    protected $primaryKey = 'Id_Personnes';
    public $timestamps = false ;

    protected $fillable = [
        'nom',
        'prenom',
        'emailPersonne',
        'Age',
        'pswd',
        
    ];

    protected $hidden = [
        'PSWD',
        'remember_token',
    ];

    public function getAuthPassword(){
        return $this->pswd;
    }

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //----------------heritage-----------------------------------------------------------//

    public function entraineur(){
        return $this->hasOne(Entraineur::class, 'Id_Personnes');
    }

    public function joueur(){
        return $this->hasOne(Joueur::class, 'Id_Personnes');
    }
}
