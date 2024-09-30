<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

     /**
     * El nombre de la tabla asociada con el modelo.
     *
     * @var string
     */
    protected $table = 'reviews';


    /**
     * Los atributos que se pueden llenar mediante asignación masiva.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'pack_id',
        'user_id',
        'rating',
        'comment',
        'review_date',
    ];

    /**
     * Los atributos que deben ser casteados.
     *
     * @return array<string, string>
     */
    protected $casts = [
        'review_date' => 'datetime',
        'rating' => 'integer',
    ];

    /**
     * Obtener el paquete asociado a la reseña.
     */
    public function pack()
    {
        return $this->belongsTo(Pack::class);
    }

    /**
     * Obtener el usuario asociado a la reseña.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Habilitar las marcas de tiempo.
     *
     * @var bool
     */
    public $timestamps = false;
}
