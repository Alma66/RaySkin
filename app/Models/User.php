<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

     /**
     * El nombre de la tabla asociada con el modelo.
     *
     * @var string
     */
    protected $table = 'users';


    /**
     * Los atributos que se pueden llenar mediante asignación masiva.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'phone',
    ];

    /**
     * Los atributos que deben estar ocultos para la serialización.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Obtener los atributos que deben ser casteados.
     *
     * @return array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Obtener las ventas asociadas al usuario.
     */
    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

    /**
     * Obtener las reseñas asociadas al usuario.
     */
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    /**
     * Habilitar las marcas de tiempo.
     *
     * @var bool
     */
    public $timestamps = true;
}
