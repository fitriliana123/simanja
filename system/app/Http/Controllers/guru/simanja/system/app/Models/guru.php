<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    protected $table= 'guru';
    use HasFactory;

    function Mapel(){
        return $this->belongsTo('App\Models\Mapel', 'mata_pelajaran');
    }
}
