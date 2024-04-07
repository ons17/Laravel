<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $categories = category::get();

        return view('admin.category.index', ["categories" => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(('admin.category.create'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ca = new category();
        $ca->name = $request->name;
        $ca->save();

        return redirect()->route('category.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return view(('admin.category.update'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ca = category::find($id);
        $ca->delete();

        // Utilisation de with() avec une clé "success" et une valeur pour passer le message
        return redirect()->route("category.index")->with('success', 'catégorie supprimé avec succès');
    }
}