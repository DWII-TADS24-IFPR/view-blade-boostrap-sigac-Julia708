<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Declaracao extends Model
{
    protected $table = 'declaracoes';
    protected $fillable = ['hash', 'data'];

    public function aluno(){
        return $this -> belongsTo(Aluno::class);
    }

    public function comprovante(){
        return $this -> belongsTo(Comprovante::class);
    }
}
