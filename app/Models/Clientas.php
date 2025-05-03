<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clientas extends Model
{
    /** @use HasFactory<\Database\Factories\ClientasFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'tipo_documento_id',
        'numero_documento',
        'apellido_nombre',
        'fecha_nacimiento',
        'direccion',
        'departamento_piso',
        'codigo_postal',
        'celular',
        'telefono',
        'telefono_aux',
        'fecha_ingreso',
        'estado',
        'favorita',
    ];

    public function tipoDocumento()
    {
        return $this->belongsTo(TipoDocumento::class);
    }
    public function trabajosRealizados()
    {
        return $this->hasMany(TrabajoRealizado::class);
    }



}
