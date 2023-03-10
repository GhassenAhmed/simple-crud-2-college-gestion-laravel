<?php

namespace App\Http\Controllers;

use App\Models\Edudiant;
use App\Http\Requests\StoreEdudiantRequest;
use App\Http\Requests\UpdateEdudiantRequest;

class EdudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants=Edudiant::with('departement')->get();
        return view('college.indexEtudiants',compact('etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.Etudinat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEdudiantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEdudiantRequest $request)
    {
        $etudiant=new Etudiant();
        $etudiant->cin=$request->input('cin');
        $etudiant->nom=$request->input('nom');
        $etudiant->prenom=$request->input('prenom');
        $etudiant->departement=$request->input('departement');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Edudiant  $edudiant
     * @return \Illuminate\Http\Response
     */
    public function show(Edudiant $edudiant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Edudiant  $edudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(Edudiant $edudiant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEdudiantRequest  $request
     * @param  \App\Models\Edudiant  $edudiant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEdudiantRequest $request, Edudiant $edudiant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Edudiant  $edudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Edudiant $edudiant)
    {
        //
    }
}
