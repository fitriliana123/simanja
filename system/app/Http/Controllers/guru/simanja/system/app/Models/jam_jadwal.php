<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jam_jadwal extends Model
{
    protected $table = 'jam_jadwal';
    use HasFactory;
    function Jadwal(){
        return $this->hasOne('App\Models\Jadwal', 'id_jam');
    }
}
