-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema teapoyamossas
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema teapoyamossas
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `teapoyamossas` ;
USE `teapoyamossas` ;

-- -----------------------------------------------------
-- Table `teapoyamossas`.`empleados`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `teapoyamossas`.`empleados` (
  `idempleados` INT NOT NULL,
  `nombre` VARCHAR(45) NULL,
  `apellido` VARCHAR(45) NULL,
  `Especialidad` VARCHAR(45) NULL,
  PRIMARY KEY (`idempleados`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `teapoyamossas`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `teapoyamossas`.`cliente` (
  `idcliente` INT NOT NULL,
  `nombrecliente` VARCHAR(45) NULL,
  `numerocontacto` VARCHAR(45) NULL,
  `direccion` VARCHAR(45) NULL,
  `descripciondelcaso` VARCHAR(1000) NULL,
  PRIMARY KEY (`idcliente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `teapoyamossas`.`Proceso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `teapoyamossas`.`Proceso` (
  `idProceso` INT NOT NULL,
  `nombreproceso` VARCHAR(45) NULL,
  `juzgado` VARCHAR(45) NULL,
  `cliente_idcliente` INT NOT NULL,
  `empleados_idempleados` INT NOT NULL,
  `nombredeljuez` VARCHAR(1000) NULL,
  `ciudad` VARCHAR(1000) NULL,
  `departamento` VARCHAR(1000) NULL,
  `estado` VARCHAR(1000) NULL,
  PRIMARY KEY (`idProceso`, `cliente_idcliente`, `empleados_idempleados`),
  INDEX `fk_Proceso_cliente1_idx` (`cliente_idcliente` ASC) VISIBLE,
  INDEX `fk_Proceso_empleados1_idx` (`empleados_idempleados` ASC) VISIBLE,
  CONSTRAINT `fk_Proceso_cliente1`
    FOREIGN KEY (`cliente_idcliente`)
    REFERENCES `teapoyamossas`.`cliente` (`idcliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Proceso_empleados1`
    FOREIGN KEY (`empleados_idempleados`)
    REFERENCES `teapoyamossas`.`empleados` (`idempleados`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
