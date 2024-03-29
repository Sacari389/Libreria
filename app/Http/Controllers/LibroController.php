<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Http\Requests\LibroRequest;
use App\Models\Autore;
use App\Models\Editoriale;
use App\Models\Categoria;
use App\Exports\LibrosExport;
use Maatwebsite\Excel\Facades\Excel;

/**
 * Class LibroController
 * @package App\Http\Controllers
 */
class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libros = Libro::paginate();

        return view('libro.index', compact('libros'))
            ->with('i', (request()->input('page', 1) - 1) * $libros->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $libro = new Libro();
        $autore = Autore::pluck('aut_nombre','aut_id');
        $categoria = Categoria::pluck('cat_nombre','cat_id');
        $editoriale = Editoriale::pluck('edt_nombre','edt_id');
        return view('libro.create', compact('libro', 'autore', 'categoria', 'editoriale'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LibroRequest $request)
    {
        Libro::create($request->validated());

        return redirect()->route('libros.index')
            ->with('success', 'Libro created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $libro = Libro::find($id);

        return view('libro.show', compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $libro = Libro::find($id);
        $autore = Autore::pluck('aut_nombre','aut_id');
        $categoria = Categoria::pluck('cat_nombre','cat_id');
        $editoriale = Editoriale::pluck('edt_nombre','edt_id');

        return view('libro.edit', compact('libro', 'autore', 'categoria', 'editoriale'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LibroRequest $request, Libro $libro)
    {
        $libro->update($request->validated());

        return redirect()->route('libros.index')
            ->with('success', 'Libro updated successfully');
    }

    public function destroy($id)
    {
        Libro::find($id)->delete();

        return redirect()->route('libros.index')
            ->with('success', 'Libro deleted successfully');
    }

    public function exportExcel()
    {
        return Excel::download(new LibrosExport, 'libros.xlsx');
    }
}
