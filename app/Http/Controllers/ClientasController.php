<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClientasRequest;
use App\Http\Requests\UpdateClientasRequest;
use App\Models\Clientas;

class ClientasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('clientas.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Clientas $clientas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clientas $clientas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientasRequest $request, Clientas $clientas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clientas $clientas)
    {
        //
    }
}
