<?php

namespace App\Http\Controllers;

use App\Models\diplome;
use App\Models\liste;
use App\Models\profil;
use App\Http\Controllers\Controller;
use App\Models\reclamation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $diplomes = diplome::where('formateur_id', Auth::id())->get();
        $emploi = liste::all();

        return view('profil.index', compact('diplomes', 'emploi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profil.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function suivi()
    {
        return view('profil.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function reclamation()
    {
        return view('list-card.show');
    }

    /**
     * Update the specified resource in storage.
     */
    public function ReclamationStore(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $validatedData['stagiaire_id'] = auth()->user()->email;
        reclamation::create($validatedData);

        return redirect()->route('reclamation')->with('success', 'Réclamation soumise avec succès.');
    }


    public function ProfilUpdate(Request $request, $id)
    {
        $user = profil::findOrFail($id);

        $request->validate([
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($user->image) {
                Storage::delete('public/' . $user->image);
            }
            $imagePath = $request->file('image')->store('images', 'public');
            $user->image = $imagePath;
        }

        $user->email = $request->input('email');
        $user->Bio = $request->input('Bio');

        if ($request->input('password')) {
            $user->password = bcrypt($request->input('password'));
        }

        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

    public function notFound()
    {
        return response()->view('notfond.404', [], 404);
    }
}
