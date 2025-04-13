<?php

namespace App\Models; // define el donde reside este elemento

use Illuminate\Database\Eloquent\Model; // Importa la base modelo de eloquent (parte del framework Laravel)

class Proceso extends Model
{
    protected $table = 'teapoyamossas.proceso'; // Esta linea especifica el nombre de la tabla que este modelo representa, en algunas partes aparecia que se debía referenciar directamente a la base de datos, en otros, que no era necesario, lo dejo incluido mejor, para que lo tenga en cuenta parce. 
    protected $primaryKey = 'idProceso'; // Esta línea representa la llave primaria de la tabla Proceso
    public $timestamps = false; // Omite los campos created_at y updated_at
    
    protected $fillable = [
        'nombreproceso',
        'juzgado',
        'cliente_idcliente',
        'empleados_idempleados',
        'nombredeljuez', // este atributo aparece en la base de datos con espacio, no estoy muy seguro si debo incluir guiones para eliminar el espacio o eso no tiene nada que ver para que traiga los datos de la tablas, hay le dejo la duda parce jajajaja
        'ciudad',
        'departamento',
        'estado'
    ];
    
    // Esta línea establece la relación con la entidad cliente
    public function cliente()
    {
        return $this->belongsTo(cliente::class, 'cliente_idcliente', 'idcliente'); //parce, en este punto he revisado el tema de las minusculas y mayusculas tratando de que queden IGUAL a la base de datos, no se tiene mucho, poco o nada que ver jajajajaja. Pero creo importante tener en cuenta para posibles fallos. 
    }
    
       // Esta línea establece la relación con la entidad 
    public function empleado()
    {
        return $this->belongsTo(empleados::class, 'empleados_idempleados', 'idempleados');
    }
}
