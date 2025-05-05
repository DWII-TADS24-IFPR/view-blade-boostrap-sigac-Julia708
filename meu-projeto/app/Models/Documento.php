<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $table = 'documentos';
    protected $fillable = ['url', 'descricao', 'horas_in', 'status', 'comentaio', 'horas_out'];

    public function categoria(){
        return $this -> belongsTo(Categoria::class);
    }
}
