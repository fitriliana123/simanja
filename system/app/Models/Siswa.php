<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    use HasFactory;
    function Kelas(){
        return $this->belongsTo('App\Models\kelas', 'kelas');
    }
}
