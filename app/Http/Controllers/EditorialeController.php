<?php

namespace App\Http\Controllers;

use App\Models\Editoriale;
use App\Http\Requests\EditorialeRequest;

/**
 * Class EditorialeController
 * @package App\Http\Controllers
 */
class EditorialeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $editoriales = Editoriale::paginate();

        return view('editoriale.index', compact('editoriales'))
            ->with('i', (request()->input('page', 1) - 1) * $editoriales->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $editoriale = new Editoriale();
        return view('editoriale.create', compact('editoriale'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EditorialeRequest $request)
    {
        Editoriale::create($request->validated());

        return redirect()->route('editoriales.index')
            ->with('success', 'Editoriale created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $editoriale = Editoriale::find($id);

        return view('editoriale.show', compact('editoriale'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $editoriale = Editoriale::find($id);

        return view('editoriale.edit', compact('editoriale'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditorialeRequest $request, Editoriale $editoriale)
    {
        $editoriale->update($request->validated());

        return redirect()->route('editoriales.index')
            ->with('success', 'Editoriale updated successfully');
    }

    public function destroy($id)
    {
        Editoriale::find($id)->delete();

        return redirect()->route('editoriales.index')
            ->with('success', 'Editoriale deleted successfully');
    }
}
