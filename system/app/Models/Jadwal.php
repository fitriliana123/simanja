<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwal';
    use HasFactory;

    function Mapel(){
        return $this->belongsTo('App\Models\Mapel', 'id_mapel');
    }
    function Guru(){
        return $this->belongsTo('App\Models\guru', 'id_guru');
    }
    function Jam(){
        return $this->belongsTo('App\Models\jam_jadwal', 'id_jam');
    }
}
