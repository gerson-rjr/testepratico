<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class ApiViaCepController extends Controller
{

    public function __invoke(Request $request) {

        $cep = $request->input('cep');
        // $cep = '01001000';
        $response = Http::get('viacep.com.br/ws/'.$cep.'/json')->json();
        $cep = $response["cep"];
        $logradouro = $response["logradouro"];
        $complemento = $response["complemento"];
        $bairro = $response["bairro"];
        $localidade = $response["localidade"];
        $uf = $response["uf"];
        $ibge = $response["ibge"];
        $gia = $response["gia"];
        $ddd = $response["ddd"];
        $siafi = $response["siafi"];
        return view('dashboard', [
            "cep"=>$cep,
            "logradouro"=>$logradouro,
            "complemento"=>$complemento,
            "bairro"=>$bairro,
            "localidade"=>$localidade,
            "uf"=>$uf,
            "ibge"=>$ibge,
            "gia"=>$gia,
            "ddd"=>$ddd,
            "siafi"=>$siafi,
    ]);
    }


}