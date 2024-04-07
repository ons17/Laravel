<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Suppliers;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = Suppliers::get();

        return view('admin.Suppliers.index', ["suppliers" => $suppliers]);

    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(('admin.Suppliers.create'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $s = new Suppliers();
        $s->first_name = $request->first_name;
        $s->last_name = $request->last_name;
        $s->email = $request->email;
        $s->password = $request->password;
        $s->phone = $request->phone;
        $s->country = $request->country;
        $s->save();

        return redirect()->route('Suppliers.index');
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
        return view(('admin.Suppliers.update'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $s = Suppliers::find($id);
        $s->delete();

        // Utilisation de with() avec une clé "success" et une valeur pour passer le message
        return redirect()->route("Suppliers.index")->with('success', 'fournisseur supprimé avec succès');
    }
}
