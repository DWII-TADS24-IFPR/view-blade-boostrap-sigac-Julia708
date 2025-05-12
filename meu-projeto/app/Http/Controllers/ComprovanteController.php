<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comprovante;

class ComprovanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comprovantes = Comprovante::all();
        return view('comprovantes.index')->with('comprovantes', $comprovantes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('comprovantes.create', compact('', ''));
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Comprovante::create([
            'comprovante' => $request->comprovante,
        ]);

        return redirect()->route('comprovantes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comprovante = Comprovante::findOrFail($id); 
        return view('comprovantes.show', compact('comprovantes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comprovante = Comprovante::findOrFail($id);
        return view('comprovantes.edit', compact(''));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $comprovante = Comprovante::findOrFail($id);
        $comprovante->update($request->only(''));

        return redirect()->route('comprovantes.index')->with('success', 'Comprovantes atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comprovante = Comprovante::findOrFail($id);
        $comprovante->delete();

        return redirect()->route('comprovantes.index');
    }
}
