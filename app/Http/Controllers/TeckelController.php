<?php

namespace App\Http\Controllers;

use App\Models\Teckel;
use App\Http\Requests\StoreTeckelRequest;
use App\Http\Requests\UpdateTeckelRequest;

class TeckelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTeckelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeckelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teckel  $teckel
     * @return \Illuminate\Http\Response
     */
    public function show(Teckel $teckel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teckel  $teckel
     * @return \Illuminate\Http\Response
     */
    public function edit(Teckel $teckel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeckelRequest  $request
     * @param  \App\Models\Teckel  $teckel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeckelRequest $request, Teckel $teckel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teckel  $teckel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teckel $teckel)
    {
        //
    }
}
