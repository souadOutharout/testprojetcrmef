<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\profil;


class LoginController extends Controller
{
    /**
     * @OA\Get(
     *     path="/login",
     *     summary="Display login form.",
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation"
     *     )
     * )
     */
    public function index()
    {
        return view('auth.login');
    }
    /**
     * @OA\Get(
     *     path="/update",
     *     summary="Display update form.",
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation"
     *     )
     * )
     */
    public function update()
    {
        return view('profil.edit');
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
     *     path="/login",
     *     summary="Authenticate user.",
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
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
        $email = $request->email;
        $password = $request->password;

        $credentials = ['email' => $email, 'password' => $password];

        $user = profil::where('email', $email)->first();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if ($user === null) {
                return view('notfond.404');
            }
            switch (auth()->user()->role) {
                case "admin":
                    $request->session()->regenerate();
                    return to_route('admin.index')->with('success', 'Vous étes bien connecté ' . $email . " .");


                case 'Formateur':
                    $request->session()->regenerate();
                    return to_route('profil.index')->with('success', 'Vous étes bien connecté ' . $email . " .");

                case 'Stagiaire':
                    $request->session()->regenerate();
                    return to_route('profil.index')->with('success', 'Vous étes bien connecté ' . $email . " .");


                default:
                    return back()->withErrors([
                        'email' => 'Email ou mot de passe incorrect'
                    ])->onlyInput('email');
            }
        } else {
            return back()->withErrors([
                'email' => 'Email ou mot de pass incorrect'
            ])->onlyInput('email');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $user = Profil::findOrFail(Auth::user()->id);
        $user->FirstName = $request->input('FirstName');
        $user->LastName = $request->input('LastName');
        $user->CIN = $request->input('CIN');
        $user->city = $request->input('city');
        $user->diplome = $request->input('diplome');
        $user->matiere = $request->input('matiere');
        $user->phone = $request->input('phone');
        $user->save();

        return redirect()->route('update.profile')->with('success', 'Votre compte a bien été modifié.');
    }


    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, login $login)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return to_route('homepage')->with('success', 'Vous étes bien déconnecté.');
    }
}
