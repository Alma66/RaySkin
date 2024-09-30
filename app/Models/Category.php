<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

     /**
     * El nombre de la tabla asociada con el modelo.
     *
     * @var string
     */
    protected $table = 'categories';


    /**
     * Los atributos que se pueden llenar mediante asignación masiva.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
    ];

    /**
     * Los atributos que deben ser casteados.
     *
     * @return array<string, string>
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Habilitar las marcas de tiempo.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * Obtener los productos asociados a la categoría.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

