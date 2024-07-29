<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = 'mapel';
    use HasFactory;
    
    function Guru(){
        return $this->hasOne('App\Models\guru', 'mata_pelajaran');
    }
    
}
