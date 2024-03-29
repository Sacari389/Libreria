<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    protected $fillable = ['id_editorial', 'nombre'];

    public function libros()
    {
        return $this->hasMany(Libro::class);
    }
}
