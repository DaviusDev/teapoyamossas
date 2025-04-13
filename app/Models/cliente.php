<?php

namespace App\Models; // define el donde reside este elemento

use Illuminate\Database\Eloquent\Model; // Importa la base modelo de eloquent (parte del framework Laravel)

class Cliente extends Model
{
    protected $table = 'teapoyamossas.cliente'; // Esta linea especifica el nombre de la tabla que este modelo representa, en algunas partes aparecia que se debía referenciar directamente a la base de datos, en otros, que no era necesario, lo dejo incluido mejor, para que lo tenga en cuenta parce. 
    protected $primaryKey = 'idcliente'; // Esta línea representa la llave primaria de la tabla Proceso
    public $timestamps = false; // Omite los campos created_at y updated_at
    
    protected $fillable = [
        'nombrecliente',
        'numerocontacto',
        'direccion',
        'descripciondelcaso' // en este caso, el atributo fue creado con espacios en la tabla, razón por la cual aquí lo dejo igual parce, no se si se deban incluir guiones o no para evitar potenciales fallos. 
    ];
    
    // Relación con Proceso
    public function procesos()
    {
        return $this->hasMany(Proceso::class, 'cliente_idcliente', 'idcliente');
    }
}