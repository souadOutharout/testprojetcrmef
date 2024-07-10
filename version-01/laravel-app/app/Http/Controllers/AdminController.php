<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Http\Controllers\Controller;
use App\Models\annonce;
use App\Models\diplom;
use App\Models\diplome;
use App\Models\etablissement;
use App\Models\liste;
use App\Models\Profil;
use App\Models\reclamation;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * @OA\Get(
     *     path="/admin",
     *     summary="Display a listing of the resource.",
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation"
     *     )
     * )
     */
    public function index()
    {
        //model
        $NomberUser = Profil::count();
        $reclamtion = reclamation::count();
        $annonce  = annonce::count();
        $diplome  = diplome::count();
       
        //front-end
        return view('admin.index',compact('NomberUser','annonce','reclamtion','diplome'));
    }


    /**
     * @OA\Get(
     *     path="/admin/formateurs",
     *     summary="List all formateurs.",
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation"
     *     )
     * )
     */
    public function ListFormateur()
    {
        $users = Profil::all();
        return view('admin.formateur', compact('users'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function DiplomeCreate(Request $request)
    {
        return view('profil.create');
    }


    public function diplome(Request $request)
    {
        $formFields = $request->validate([
            'intitule' => 'required|string|max:255',
            'date_obtention' => 'required|string|max:255',
        ]);
        $formFields['formateur_id'] = auth()->user()->id;
        diplome::create($formFields);
        return redirect()->route('diplome.create')->with('success', 'Votre chambre a bien été créée.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function etablissement(Request $request)
    {
        $formFields = $request->validate([
            'nom' => 'required',
            'adresse' => 'required',
        ]);
        $formFields['formateur_id'] = auth()->user()->id;
        etablissement::create($formFields);
        return redirect()->route('diplome.create')->with('success', 'Votre chambre a bien été créée.');
    }

    /**
     * Display the specified resource.
     */
    public function ListReclamation()
    {
        $reclamations = reclamation::all();
        return view('admin.reclamation', compact('reclamations'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function UpdateReclamations(Request $request, $id)
    {
        $reclamation = reclamation::findOrFail($id);
        $reclamation->status = $request->input('status');
        $reclamation->save();

        return redirect()->back()->with('success', 'Le statut de la réclamation a été mis à jour.');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'a' => 'required|string|max:255',
            'b' => 'required|string|max:255',
            'c' => 'required|string|max:255',
            'd' => 'required|string|max:255',
        ]);
        $emploi = liste::findOrFail($id);
        $emploi->a = $request->input('a');
        $emploi->b = $request->input('b');
        $emploi->c = $request->input('c');
        $emploi->d = $request->input('d');
        $emploi->save();

        return redirect()->back()->with('success', 'Emploi mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function UsersUpdate(Request $request, $id)
    {
        $user = Profil::findOrFail($id);
        $user->FirstName = $request->input('FirstName');
        $user->LastName = $request->input('LastName');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->CIN = $request->input('CIN');
        $user->city = $request->input('city');
        $user->save();
    
        return redirect()->back()->with('success', 'User updated successfully.');
    }
    
    public function destroy($id)
    {
        $user = Profil::findOrFail($id);
        $user->delete();
    
        return redirect()->back()->with('success', 'User deleted successfully.');
    }
    
}
