<?php

namespace App\Livewire\Clienta;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Clientas;

class ClientaTable extends DataTableComponent
{
    protected $model = Clientas::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Tipo documento id", "tipo_documento_id")
                ->sortable(),
            Column::make("Numero documento", "numero_documento")
                ->sortable(),
            Column::make("Apellido nombre", "apellido_nombre")
                ->sortable(),
            Column::make("Fecha nacimiento", "fecha_nacimiento")
                ->sortable(),
            Column::make("Direccion", "direccion")
                ->sortable(),
            Column::make("Departamento piso", "departamento_piso")
                ->sortable(),
            Column::make("Codigo postal", "codigo_postal")
                ->sortable(),
            Column::make("Celular", "celular")
                ->sortable(),
            Column::make("Telefono", "telefono")
                ->sortable(),
            Column::make("Telefono aux", "telefono_aux")
                ->sortable(),
            Column::make("Fecha ingreso", "fecha_ingreso")
                ->sortable(),
            Column::make("Estado", "estado")
                ->sortable(),
            Column::make("Favorita", "favorita")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable(),
            Column::make("Updated at", "updated_at")
                ->sortable(),
        ];
    }
}
