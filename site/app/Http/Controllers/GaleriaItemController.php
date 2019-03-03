<?php

namespace App\Http\Controllers;

use App\GaleriaItem;
use Illuminate\Http\Request;

class GaleriaItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('galeria');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // exibe a pag com o formulario
        return view('galeria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // criando uma nova galeriaItem vazia
        $galeriaItem = new GaleriaItem;

        // pegando os valores que foram enviados do formulario
        // inserindo nas propiedades da variavel
        $galeriaItem->category = $request->get('category');
        $galeriaItem->img = $request->get('image');

        // todos os valores que estao na variavel
        $galeriaItem->save();
        
        // redireciona para uma pagina                          passa uma mensagem para ser exibida na pagina de destino
        return redirect(action('GaleriaItemController@create'))->with('success','seu cadastro ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GaleriaItem  $galeriaItem
     * @return \Illuminate\Http\Response
     */
    public function show(GaleriaItem $galeriaItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GaleriaItem  $galeriaItem
     * @return \Illuminate\Http\Response
     */
    public function edit(GaleriaItem $galeriaItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GaleriaItem  $galeriaItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GaleriaItem $galeriaItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GaleriaItem  $galeriaItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(GaleriaItem $galeriaItem)
    {
        //
    }
}
