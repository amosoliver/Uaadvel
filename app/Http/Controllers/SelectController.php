<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelectController extends Controller
{
    public function setor()
    {
        $setor = [
            1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25
        ];

        return $setor;
    }

    public function idade()
    {
        $idade = [
            12, 13, 14, 15, 16, 17
        ];
        return $idade;
    }
    public function anoEscolar()
    {
        $anoEscolar = [
            '6º ano do Fundamental',
            '7º ano do Fundamental',
            '8º ano do Fundamental',
            '9º ano do Fundamental',
            '1º ano do Ensino Médio',
            '2º ano do Ensino Médio',
            '3º ano do Ensino Médio',
        ];

        return $anoEscolar;
    }
    public function ministerio()
    {
        $ministerio = [
            'Louvor',
            'Midia',
            'Pregação',
        ];

        return $ministerio;
    }
    public function oportunidade()
    {
        $oportunidade = [
            'SIM',
            'NÃO'
        ];

        return $oportunidade;
    }
}
