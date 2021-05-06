<?php

namespace App\Http\Controllers;

use App\Http\Resources\AplicacaoResource;
use App\Models\Aplicacao;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AplicacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return mixed|\Illuminate\Http\Response
     */
    public function index()
    {
        return AplicacaoResource::collection(Aplicacao::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aplicacao = Aplicacao::create($request->all());
        return new AplicacaoResource($aplicacao);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aplicacao  $aplicacao
     * @return mixed|\Illuminate\Http\Response
     */
    public function show(Aplicacao $aplicacao)
    {
        return new AplicacaoResource($aplicacao);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aplicacao  $aplicacao
     * @return mixed|\Illuminate\Http\Response
     */
    public function update(Request $request, Aplicacao $aplicacao)
    {
        $sucesso = $aplicacao->update($request->all());
        return new AplicacaoResource($aplicacao);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aplicacao  $aplicacao
     * @return mixed|\Illuminate\Http\Response
     */
    public function destroy(Aplicacao $aplicacao)
    {
        $aplicacao->delete();
        return \response("Aplicacao deletada com sucesso", Response::HTTP_OK);
    }
}
