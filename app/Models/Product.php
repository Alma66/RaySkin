<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

     /**
     * El nombre de la tabla asociada con el modelo.
     *
     * @var string
     */
    protected $table = 'productos';


    /**
     * Los atributos que se pueden llenar mediante asignación masiva.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'brand_id',
        'category_id',
    ];

    /**
     * Los atributos que deben ser casteados.
     *
     * @return array<string, string>
     */
    protected $casts = [
        'price' => 'decimal:2',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Obtener la marca asociada al producto.
     */
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    /**
     * Obtener la categoría asociada al producto.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Habilitar las marcas de tiempo.
     *
     * @var bool
     */
    public $timestamps = true;
}
