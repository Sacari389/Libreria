<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Autore
 *
 * @property $aut_id
 * @property $aut_nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Libro[] $libros
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Autore extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['aut_id', 'aut_nombre'];
    protected $primaryKey = 'aut_id';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function libros()
    {
        return $this->hasMany(\App\Models\Libro::class, 'aut_id', 'lib_id_autor');
    }
    

}
