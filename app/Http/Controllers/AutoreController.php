<?php

namespace App\Http\Controllers;

use App\Models\Autore;
use App\Http\Requests\AutoreRequest;

/**
 * Class AutoreController
 * @package App\Http\Controllers
 */
class AutoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autores = Autore::paginate();

        return view('autore.index', compact('autores'))
            ->with('i', (request()->input('page', 1) - 1) * $autores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $autore = new Autore();
        return view('autore.create', compact('autore'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AutoreRequest $request)
    {
        Autore::create($request->validated());

        return redirect()->route('autores.index')
            ->with('success', 'Autore created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $autore = Autore::find($id);

        return view('autore.show', compact('autore'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $autore = Autore::find($id);

        return view('autore.edit', compact('autore'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AutoreRequest $request, Autore $autore)
    {
        $autore->update($request->validated());

        return redirect()->route('autores.index')
            ->with('success', 'Autore updated successfully');
    }

    public function destroy($id)
    {
        Autore::find($id)->delete();

        return redirect()->route('autores.index')
            ->with('success', 'Autore deleted successfully');
    }
}
