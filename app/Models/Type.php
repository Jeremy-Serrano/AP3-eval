<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $table = 'Type';
    protected $primaryKey = 'Id_Type';
    public $timestamps = false ;

    protected $fillable = [
        'NomType',
        
        
    ];

    public function Evenement(){
        return $this ->hasMany ('App\Models\Evenement' , 'Id_Type');
    }
}
