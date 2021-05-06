<?php

namespace App\Http\Controllers;

use App\Http\Resources\PessoaResource;
use App\Models\Pessoa;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return mixed|\Illuminate\Http\Response
     */
    public function index()
    {
        return PessoaResource::collection(Pessoa::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pessoa = Pessoa::create($request->all());
        if ($pessoa)
            return new PessoaResource($pessoa);
        return \response("Algo inesperado aconteceu", Response::HTTP_INTERNAL_SERVER_ERROR);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return mixed|\Illuminate\Http\Response
     */
    public function show(Pessoa $pessoa)
    {
        return new PessoaResource($pessoa);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pessoa  $pessoa
     * @return mixed|\Illuminate\Http\Response
     */
    public function update(Request $request, Pessoa $pessoa)
    {
        $atualizado = $pessoa->update($request->all());
        if ($atualizado)
            return new PessoaResource($pessoa);
        return \response("Algo inesperado aconteceu", Response::HTTP_INTERNAL_SERVER_ERROR);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pessoa $pessoa)
    {
        $pessoa->delete();
        return \response("Pessoa deletada com sucesso", Response::HTTP_OK);
    }
}
