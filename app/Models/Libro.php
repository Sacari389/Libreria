<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Libro
 *
 * @property $lib_id
 * @property $lib_titulo
 * @property $lib_fecha_publicacion
 * @property $lib_id_autor
 * @property $lib_id_editorial
 * @property $lib_id_categoria
 * @property $created_at
 * @property $updated_at
 *
 * @property Autore $autore
 * @property Categoria $categoria
 * @property Editoriale $editoriale
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Libro extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['lib_id', 'lib_titulo', 'lib_fecha_publicacion', 'lib_id_autor', 'lib_id_editorial', 'lib_id_categoria'];
    protected $primaryKey = 'lib_id';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function autore()
    {
        return $this->belongsTo(\App\Models\Autore::class, 'lib_id_autor', 'aut_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categoria()
    {
        return $this->belongsTo(\App\Models\Categoria::class, 'lib_id_categoria', 'cat_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function editoriale()
    {
        return $this->belongsTo(\App\Models\Editoriale::class, 'lib_id_editorial', 'edt_id');
    }
    

}
