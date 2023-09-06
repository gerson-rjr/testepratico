<?php

namespace App\Http\Controllers;

use App\Models\cep;
use Illuminate\Http\Request;

class CepController extends Controller
{

    public function store(Request $request)
    {
        $cep = new Cep;
        $cep->cep = $request->cep;
        $cep->logradouro = $request->logradouro;
        $cep->complemento = $request->complemento;
        $cep->bairro = $request->bairro;
        $cep->localidade = $request->localidade;
        $cep->uf = $request->uf;
        $cep->ibge = $request->ibge;
        $cep->gia = $request->gia;
        $cep->ddd = $request->ddd;
        $cep->siafi = $request->siafi;
        $cep->save();
        return redirect('/');
    }

}
