<?php

namespace App\Models; // define el donde reside este elemento

use Illuminate\Database\Eloquent\Model; // Importa la base modelo de eloquent (parte del framework Laravel)

class empleados extends Model
{
    protected $table = 'teapoyamossas.empleados'; // Esta linea especifica el nombre de la tabla que este modelo representa, en algunas partes aparecia que se debía referenciar directamente a la base de datos, en otros, que no era necesario, lo dejo incluido mejor, para que lo tenga en cuenta parce. 
    protected $primaryKey = 'idempleados'; // Esta línea representa la llave primaria de la tabla Proceso
    public $timestamps = false; // Omite los campos created_at y updated_at
    
    protected $fillable = [
        'nombre',
        'apellido',
        'especialidad'
    ];
    
    // Relación con Proceso
    public function procesos()
    {
        return $this->hasMany(Proceso::class, 'empleados_idempleados', 'idempleados');
    }
}