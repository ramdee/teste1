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
        //
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
