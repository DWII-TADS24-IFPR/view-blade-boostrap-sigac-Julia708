<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class RelatorioController extends Controller
{
    function emitirRelatorio(){

        $dados = ['curso'=> 'Analise de sistema',
                  'alunos' => ['joal','luana','russi'],
                  'duracao' => 4
        ];

        $html = View::make('relatorio.curso', ['dados' => $dados])->render();

        $dompdf = new Dompdf();

        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4', 'landscape');

        $dompdf->render();
        
        $dompdf->stream();

    }
}

// vsdjfaljfsçdfjsçejf