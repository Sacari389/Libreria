<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Editoriale
 *
 * @property $edt_id
 * @property $edt_nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Libro[] $libros
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Editoriale extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['edt_id', 'edt_nombre'];
    protected $primaryKey = 'edt_id';
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function libros()
    {
        return $this->hasMany(\App\Models\Libro::class, 'edt_id', 'lib_id_editorial');
    }
    

}
