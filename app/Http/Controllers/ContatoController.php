<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;
use App\Http\Requests\ContatoRequest;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($letra)
    {
        $contato = Contato::indexLetra($letra)->sortBy('nome');
        return view('contato.index', [
            'contato' => $contato,
            'criterio' => $letra
        ]);
    }

    public function lista(){
        $contato = Contato::all()->sortBy('nome');
        return view('contato.lista', compact('contato'),  compact('criterio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contato.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//armazena no banco passando pelo request
    {
        $contato = Contato::create($request->all());
        return redirect('contato/lista');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contato = Contato::find($id); //Acha o contato pela id
        return view('contato.show', ['data' =>$contato]); //Coloca na váriavel data e mostra
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contato = Contato::find($id);
        return view('contato.edit', ['data' => $contato]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contato = Contato::find($id);  //Pega o contato editado e coloca no banco as edições
        $contato->fill($request->all());
        $contato->update();
        return redirect('contato/lista');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contato::destroy($id);
        return redirect('contato');
    }
}
