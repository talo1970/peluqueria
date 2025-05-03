<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoDocumento extends Model
{
    /** @use HasFactory<\Database\Factories\TipoDocumentoFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $table = 'tipo_documentos';
    protected $fillable = [
        'nombre',
    ];

    public function clientas()
    {
        return $this->hasMany(Clientas::class);
    }

}
