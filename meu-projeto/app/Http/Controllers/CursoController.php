<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exs = ex::all();
        return view('exs.index')->with('exs', $exs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('exs.create', compact('', ''));
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ex::create([
            'ex' => $request->ex,
        ]);

        return redirect()->route('exs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ex = ex::findOrFail($id);
        return view('exs.show', compact('ex'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ex = ex::findOrFail($id);
        return view('exs.edit', compact(''));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ex = ex::findOrFail($id);
        $ex->update($request->only(''));

        return redirect()->route('exs.index')->with('success', 'ex atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ex = ex::findOrFail($id);
        $ex->delete();

        return redirect()->route('exs.index');
    }
}
