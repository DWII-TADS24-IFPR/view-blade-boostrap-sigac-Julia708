<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $table = 'turmas';
    protected $fillable = ['ano'];

    public function curso(){
        return $this -> belongsTo(Curso::class);
    }

    public function aluno(){
        return $this -> hasMany(Aluno::class);
    }
}
