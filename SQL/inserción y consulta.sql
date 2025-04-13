-- -----------------------------------------------------
-- Table `teapoyamossas`.`empleados`
-- -----------------------------------------------------


INSERT INTO `teapoyamossas`.`empleados` (`idempleados`, `nombre`, `apellido`, `Especialidad`) VALUES
(1001234567, 'Juan', 'Perez', 'Abogado Penalista'),
(1002345678, 'Maria', 'Gomez', 'Abogado Civil'),
(1003456789, 'Carlos', 'Lopez', 'Abogado Laboral'),
(1004567890, 'Ana', 'Rodriguez', 'Asesor Legal'),
(1005678901, 'Luis', 'Fernandez', 'Consultor Jurídico'),
(1006789012, 'Elena', 'Martinez', 'Abogado Corporativo'),
(1007890123, 'Pedro', 'Sanchez', 'Abogado Penalista'),
(1008901234, 'Diana', 'Jimenez', 'Notario'),
(1009012345, 'Fernando', 'Ruiz', 'Abogado Civil'),
(1010123456, 'Andrea', 'Vargas', 'Asesor Legal');

-- -----------------------------------------------------
-- Table `teapoyamossas`.`cliente`
-- -----------------------------------------------------


INSERT INTO `teapoyamossas`.`cliente` (`idcliente`, `nombrecliente`, `numerocontacto`, `direccion`, `descripciondelcaso`) VALUES
(2001234567, 'Jose Ramirez', '3001234567', 'Calle 10 #45-67', 'Caso de divorcio en proceso de conciliación'),
(2002345678, 'Luisa Fernandez', '3017654321', 'Avenida 15 #98-12', 'Demanda laboral por despido injustificado'),
(2003456789, 'Roberto Gomez', '3209876543', 'Carrera 7 #23-45', 'Asesoría para constitución de empresa'),
(2004567890, 'Carolina Lopez', '3106785432', 'Calle 50 #12-34', 'Herencia y sucesión en disputa'),
(2005678901, 'Miguel Torres', '3123456789', 'Carrera 20 #30-15', 'Defensa en proceso penal'),
(2006789012, 'Andrea Sanchez', '3229876543', 'Calle 5 #67-89', 'Contrato de arrendamiento en conflicto'),
(2007890123, 'Felipe Castro', '3145678901', 'Avenida 30 #12-67', 'Demanda civil por daños y perjuicios'),
(2008901234, 'Monica Rivera', '3156789012', 'Carrera 9 #45-67', 'Registro de marca y propiedad intelectual'),
(2009012345, 'Javier Herrera', '3167890123', 'Calle 100 #34-56', 'Revisión y redacción de contratos comerciales'),
(2010123456, 'Paola Montoya', '3178901234', 'Carrera 12 #98-23', 'Asesoría en testamentos y herencias');

-- -----------------------------------------------------
-- Table `teapoyamossas`.`Proceso`
-- -----------------------------------------------------

INSERT INTO `teapoyamossas`.`Proceso` (`idProceso`, `nombreproceso`, `juzgado`, `cliente_idcliente`, `empleados_idempleados`, `nombredeljuez`, `ciudad`, `departamento`, `estado`) VALUES
(1, 'Divorcio', 'Juzgado 1', 2001234567, 1002345678, 'Juez Martinez', 'Bogotá', 'Cundinamarca', 'Activo'),
(2, 'Demanda laboral', 'Juzgado 2', 2002345678, 1003456789, 'Juez Ramirez', 'Medellín', 'Antioquia', 'En curso'),
(3, 'Constitución de empresa', 'Juzgado 3', 2003456789, 1005678901, 'Juez Gomez', 'Cali', 'Valle del Cauca', 'Finalizado'),
(4, 'Herencia en disputa', 'Juzgado 4', 2004567890, 1006789012, 'Juez Rodriguez', 'Barranquilla', 'Atlántico', 'Activo'),
(5, 'Defensa penal', 'Juzgado 5', 2005678901, 1001234567, 'Juez Lopez', 'Cartagena', 'Bolívar', 'En revisión'),
(6, 'Registro de marca', 'Juzgado 6', 2008901234, 1008901234, 'Juez Peña', 'Bucaramanga', 'Santander', 'En trámite'),
(7, 'Redacción de contratos', 'Juzgado 7', 2009012345, 1009012345, 'Juez Herrera', 'Pereira', 'Risaralda', 'Pendiente'),
(8, 'Arrendamiento en conflicto', 'Juzgado 8', 2006789012, 1004567890, 'Juez Fernandez', 'Manizales', 'Caldas', 'Finalizado'),
(9, 'Testamento', 'Juzgado 9', 2010123456, 1010123456, 'Juez Suarez', 'Neiva', 'Huila', 'En revisión'),
(10, 'Accidente laboral', 'Juzgado 10', 2007890123, 1007890123, 'Juez Castro', 'Ibagué', 'Tolima', 'En curso');

-- -----------------------------------------------------
-- Consulta para el botón
-- -----------------------------------------------------
select * from `teapoyamossas`.`Proceso` as p
inner join `teapoyamossas`.`Cliente` as c
on p.`cliente_idcliente` = c.idcliente
left join `teapoyamossas`.`empleados` as e
on p.`empleados_idempleados` = e.idempleados;



