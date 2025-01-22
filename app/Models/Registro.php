<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Registro extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'servicio',
        'detalle',
        'total_unitario',
        'total',
        'fecha_pago',
        'metodo_pago',
        'estado_pago',
        'cliente_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'total_unitario' => 'double',
        'total' => 'double',
        'fecha_pago' => 'datetime',
        'estado_pago' => 'boolean',
        'cliente_id' => 'integer',
    ];

    public function cliente(): BelongsTo
    {
        return $this->belongsTo(Cliente::class);
    }
}
