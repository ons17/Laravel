<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\customer;

class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $customers = customer::get();

        return view('admin.customer.index', ["customers" => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(('admin.customer.create'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $c = new customer();
        $c->first_name = $request->first_name;
        $c->last_name = $request->last_name;
        $c->email = $request->email;
        $c->password = $request->password;
        $c->phone = $request->phone;
        $c->country = $request->country;
        $c->save();

        return redirect()->route('customer.index');

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
        return view(('admin.customer.update'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $p = customer::find($id);
        $p->delete();

        // Utilisation de with() avec une clé "success" et une valeur pour passer le message
        return redirect()->route("customer.index")->with('success', 'client supprimé avec succès');
    }
}
