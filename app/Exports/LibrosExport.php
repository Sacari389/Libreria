<?php

namespace App\Exports;

use App\Models\Libro;
use Maatwebsite\Excel\Concerns\FromCollection;

class LibrosExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Libro::select("lib_id", "lib_nombre")->get();
    }
}
