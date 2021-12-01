<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdreDuJour extends Model
{
    use HasFactory;

    protected $table = 'OrdreDuJour';
    protected $primaryKey = 'Id_Sujet';
    public $timestamps = false ;

    protected $fillable = [
        'SujetAborde',
        
        
    ];

    public function reunion(){
        return $this->belongsTo('App\Models\Reunion', 'Id_Reunion');
    }
}
