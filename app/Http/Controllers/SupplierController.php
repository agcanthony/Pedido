<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = Supplier::all();
        
        return view('suppliers.index',compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome'       => 'required',
            'documento'  => 'required',
            'email'      => 'required',
            'telefone'   => 'required',
            'endereco'   => 'required',
            'numero'     => 'required',
        ]);

        Supplier::create($request->all());
         
        return redirect()->route('suppliers.index')->with('success','Fornecedor criado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        return view('suppliers.show',compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $supplier)
    {
        return view('suppliers.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supplier $supplier)
    {
        $request->validate([
            'nome'       => 'required',
            'documento'  => 'required',
            'email'      => 'required',
            'dataNasc'   => 'required',
            'endereco'   => 'required',
            'numero'     => 'required',
        ]);

        $supplier->update($request->all());
        
        return redirect()->route('suppliers.index')->with('success','Fornecedor atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
         
        return redirect()->route('suppliers.index')->with('success','Fornecedor removido com sucesso.');
    }
}
