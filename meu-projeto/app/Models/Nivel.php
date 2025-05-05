<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    protected $table = 'niveis';
    protected $fillable = ['nome'];

    public function curso(){
        return $this -> hasMany(Curso::class);
    }
}
