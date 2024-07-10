<?php

namespace App\Http\Controllers;

use App\Models\profil;
use Illuminate\Support\Facades\Hash;
use App\Models\registre;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class RegistreController extends Controller
{
    /**
     * @OA\Get(
     *     path="/register",
     *     summary="Display register form.",
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation"
     *     )
     * )
     */
    public function index()
    {
        return view('auth.registre');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * @OA\Post(
     *     path="/register",
     *     summary="Register a new user.",
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(property="FirstName", type="string"),
     *                 @OA\Property(property="LastName", type="string"),
     *                 @OA\Property(property="CIN", type="string"),
     *                 @OA\Property(property="email", type="string"),
     *                 @OA\Property(property="password", type="string")
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation"
     *     )
     * )
     */
    public function store(Request $request)
    {
        $request->validate([
            'FirstName' => 'required|string|max:60',
            'LastName' => 'required|string|max:60',
            'CIN' => [
                'required',
                'string',
                'max:60',
                Rule::unique('profils', 'CIN'),
            ],
            'email' => [
                'required',
                'email',
                Rule::unique('profils', 'email'),
            ],
            'password' => 'required|string|confirmed',
            'role' => 'required',
        ]);

        $formFields = [
            'FirstName' => $request->FirstName,
            'LastName' => $request->LastName,
            'CIN' => $request->CIN,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ];

        Profil::create($formFields);

        return redirect()->route('login')->with('success', 'Votre compte a bien été créé.');
    }

    /**
     * Display the specified resource.
     */
    public function show(registre $registre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(registre $registre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, registre $registre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(registre $registre)
    {
        //
    }
}
