<?php

namespace App\Http\Controllers;

use App\Models\annonce;
use App\Models\comment;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('annonce.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function AnnoncePub()
    {
        $annonces = annonce::all();
        return view('annonce.annonce-generale', compact('annonces'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'module_type' => 'required|string',
            'category' => 'required|array',
            'Description' => 'required|string',
            'content' => 'nullable|string',
            'document' => 'nullable|file|mimes:pdf,doc,docx,jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $post = new annonce();
        $post->title = $request->input('title');
        $post->module_type = $request->input('module_type');
        $post->category = implode(' | ', $request->input('category'));
        $post->Description = $request->input('Description');
        $post->content = $request->input('content');
        $post->formateur_name = auth()->user()->FirstName;

        if ($request->hasFile('document')) {
            $path = $request->file('document')->store('documents', 'public');
            $post->document_path = $path;
        }

        $post->save();

        return redirect()->back()->with('success', 'Post created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(annonce $annonce)
    {
        $comments = comment::where('annonce_id', $annonce->id )->get();
        return view('annonce.show', compact('annonce','comments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function CommentsStore(Request $request)
    {
        $request->validate([
            'comment' => 'required|string|max:255',
        ]);

        comment::create([
            'content' => $request->comment,
            'user_name' => auth()->user()->FirstName,
            'user_role' => auth()->user()->role,
            'annonce_id' => $request->annonce_id,
        ]);

        return back()->with('success', 'Comment added successfully!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function search(Request $request)
    {
        $query = Annonce::query();

        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        if ($request->filled('module_type')) {
            $query->where('module_type', $request->module_type);
        }

        $annonces = $query->get();

        return view('annonce.annonce-generale', compact('annonces'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(annonce $annonce)
    {
        //
    }
}
