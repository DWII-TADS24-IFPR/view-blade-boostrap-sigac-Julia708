<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comprovante extends Model
{
    protected $table = 'comprovantes';
    protected $fillable = ['horas', 'atividade'];

    
    
    public function aluno(){
        return $this -> belongsTo(Aluno::class);
    }
}
