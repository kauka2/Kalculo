<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerCalculo extends Controller
{
    public function Calcular(Request $request)
    {
        $nome = $request->input('nome');
        $capital = $request->input('capital');
        $parcelas = $request->input('parcelas');
        $taxa = $request->input('taxa')/100;
        $total = 0;
        $resultado = [];
        for($i = 1; $i <= $parcelas; $i++){
            $dados[$i]['num'] = $i;
            $dados[$i]['capital'] = number_format($capital, 2, ',', '.');
            $dados[$i]['montante'] = $capital+$capital*$taxa;
            $dados[$i]['parcela'] = $dados[$i]['montante']/($parcelas-($i-1));
            $total += $dados[$i]['parcela'];
            $capital = $dados[$i]['montante'] - $dados[$i]['parcela'];

            $dados[$i]['montante'] = number_format($dados[$i]['montante'], 2, ',', '.');
            $dados[$i]['parcela'] = number_format($dados[$i]['parcela'], 2, ',', '.');
        }
        $total = number_format($total, 2, ',', '.');
        return view('resposta', compact('nome', 'dados', 'total'));
    }
}
