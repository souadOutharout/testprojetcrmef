<?php

namespace App\Http\Controllers;

use App\Models\diplome;
use App\Models\etablissement;
use App\Models\liste;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ListeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etablissement = etablissement::where('formateur_id', Auth::id())->get();
        return view('list-card.index',compact('etablissement'));
    }
    /**
     * Display a listing of the resource.
     */
    public function listeDiplom()
    {
        $diplome = diplome::where('formateur_id', Auth::id())->get();
        return view('list-card.diplome',compact('diplome'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $emploi = liste::all();
        return view('list-card.edit', compact('emploi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(liste $liste)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(liste $liste)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, liste $liste)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(liste $liste)
    {
        //
    }
}
