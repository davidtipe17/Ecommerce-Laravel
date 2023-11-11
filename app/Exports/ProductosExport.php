<?php

namespace App\Exports;

use App\Models\Venta;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ProductosExport implements FromQuery, WithHeadings, WithMapping
{
    use Exportable;

    public function __construct(int $data)
    {
        $this->data = $data;
    }
    
    public function headings(): array
    {
        return [
            'Nombre', 
            'Apellido', 
            'Correo', 
            'Numero de celular', 
            'Direccion', 
            'Total Pagado', 
            'Transaccion', 
            'Fecha de registro', 
            'Estado'
        ];
    }
    public function query()
    {
        return Venta::query()
        ->where('cliente_id', $this->data)
        ->select([
            'cliente_nombres',
            'cliente_apellidos',
            'cliente_email',
            'cliente_telefono',
            'direccion_entrega',
            'total',
            'transaccion',
            'fecha_registro',
            'estado'
        ]);
    }
    public function map($historial): array
    {
        return [
            $historial->cliente_nombres, // Columna A (Nombre)
            $historial->cliente_apellidos, // Columna B (Apellido)
            $historial->cliente_email, // Columna C (Correo)
            $historial->cliente_telefono, // Columna D (Numero de celular)
            $historial->direccion_entrega, // Columna E (Direccion)
            $historial->total, // Columna F (Total Pagado)
            $historial->transaccion, // Columna G (Transaccion)
            $historial->fecha_registro, // Columna H (Fecha de registro)
            $historial->estado, // Columna I (Estado)
        ];
    }
    

    
}
