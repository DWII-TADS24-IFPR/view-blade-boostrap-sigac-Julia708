<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'alunos';
    protected $fillable = ['nome', 'cpf', 'email', 'senha', 'turma_id', 'curso_id'];

    public function pessoa(){
        return $this -> belongsTo(Pessoa::class);
    }

    public function turma(){
        return $this -> belongsTo(Turma::class);
    }

    public function curso(){
        return $this -> belongsTo(Curso::class);
    }

    public function comprovante(){
        return $this -> hasMany(Comprovante::class);
    }

    public function declaracao(){
        return $this -> hasMany(Declaracao::class);
    }
}
