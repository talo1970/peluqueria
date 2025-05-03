<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TrabajoRealizado extends Model
{
    /** @use HasFactory<\Database\Factories\TrabajoRealizadoFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nombre',
        'descripcion',
        'fecha_inicio',
        'fecha_fin',
        'cliente_id',
    ];
    public function cliente()
    {
        return $this->belongsTo(Clientas::class);
    }

}
