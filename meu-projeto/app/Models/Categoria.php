<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    protected $fillable = ['nome', 'max_horas'];

    public function curso(){
        return $this -> belongsTo(Curso::class);
    }

    public function documento(){
        return $this -> hasMany(Documento::class);
    }

    public function comprovate(){
        return $this -> hasMany(Comprovate::class);
    }
}
