CREATE SCHEMA IF NOT EXISTS `dbmatricula`;
USE `dbmatricula` ;

CREATE TABLE IF NOT EXISTS `dbmatricula`.`alumno` (
  `CodigoAlumno` VARCHAR(11) NOT NULL,
  `DNI` CHAR(8) NULL DEFAULT NULL,
  `Apellidos` VARCHAR(200) NULL DEFAULT NULL,
  `Nombres` VARCHAR(150) NULL DEFAULT NULL,
  `Correo` VARCHAR(150) NULL DEFAULT NULL,
  `Direccion` VARCHAR(150) NULL DEFAULT NULL,
  `Ubigeo` VARCHAR(150) NULL DEFAULT NULL,
  `Celular` VARCHAR(11) NULL DEFAULT NULL,
  `LugarNacimiento` VARCHAR(150) NULL DEFAULT NULL,
  `IDEscuela` INT(11) NOT NULL,
  PRIMARY KEY (`CodigoAlumno`)
)
DEFAULT CHARACTER SET = utf8mb4;


CREATE TABLE IF NOT EXISTS `dbmatricula`.`curso` (
  `CodigoCurso` VARCHAR(6) NOT NULL,
  `CodigoDocente` VARCHAR(9) NOT NULL,
  `NombreCurso` VARCHAR(450) NULL DEFAULT NULL,
  `Categoria` VARCHAR(50) NULL DEFAULT NULL,
  `HT` INT(11) NULL DEFAULT NULL,
  `HP` INT(11) NULL DEFAULT NULL,
  `HL` INT(11) NULL DEFAULT NULL,
  `TH` INT(11) NULL DEFAULT NULL,
  `CREDITOS` INT(11) NULL DEFAULT NULL,
  `PreRequisito` VARCHAR(18) NULL DEFAULT NULL,
  `Estado` BIT(1) NULL DEFAULT NULL,
  `IDEscuela` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`CodigoCurso`)
)
DEFAULT CHARACTER SET = utf8mb4;

CREATE TABLE IF NOT EXISTS `dbmatricula`.`detalle_matricula` (
  `IDDetalleM` INT(11) NOT NULL AUTO_INCREMENT,
  `Notas` INT(11) NULL DEFAULT NULL,
  `IDMatricula` INT(11) NULL DEFAULT NULL,
  `CodigoCurso` VARCHAR(6) NULL DEFAULT NULL,
  PRIMARY KEY (`IDDetalleM`)
)
DEFAULT CHARACTER SET = utf8mb4;

CREATE TABLE IF NOT EXISTS `dbmatricula`.`detalle_registro` (
  `idDetalleR` INT(11) NOT NULL AUTO_INCREMENT,
  `PC1` INT(11) NULL DEFAULT NULL,
  `PC2` INT(11) NULL DEFAULT NULL,
  `PC3` INT(11) NULL DEFAULT NULL,
  `PP1` INT(11) NULL DEFAULT NULL,
  `PP2` INT(11) NULL DEFAULT NULL,
  `PP3` INT(11) NULL DEFAULT NULL,
  `PA1` INT(11) NULL DEFAULT NULL,
  `PA2` INT(11) NULL DEFAULT NULL,
  `PA3` INT(11) NULL DEFAULT NULL,
  `PF` DECIMAL(8,2) NULL DEFAULT NULL,
  `IdRegistroNotas` INT(11) NULL DEFAULT NULL,
  `IDDetalleM` INT(11) NOT NULL,
  PRIMARY KEY (`idDetalleR`)
)
DEFAULT CHARACTER SET = utf8mb4;

CREATE TABLE IF NOT EXISTS `dbmatricula`.`docente` (
  `CodigoDocente` VARCHAR(9) NOT NULL,
  `DNI` CHAR(8) NULL DEFAULT NULL,
  `Apellidos` VARCHAR(200) NULL DEFAULT NULL,
  `Nombres` VARCHAR(200) NULL DEFAULT NULL,
  `Correo` VARCHAR(200) NULL DEFAULT NULL,
  `Password` VARCHAR(200) NULL DEFAULT NULL,
  `Celular` CHAR(11) NULL DEFAULT NULL,
  `IDEscuela` INT(11) NOT NULL,
  PRIMARY KEY (`CodigoDocente`)
)
DEFAULT CHARACTER SET = utf8mb4;

CREATE TABLE IF NOT EXISTS `dbmatricula`.`escuelaprofesional` (
  `IDEscuela` INT(11) NOT NULL AUTO_INCREMENT,
  `NombreEscuela` VARCHAR(200) NULL DEFAULT NULL,
  `URL` VARCHAR(500) NULL DEFAULT NULL,
  `Telefono` VARCHAR(11) NULL DEFAULT NULL,
  PRIMARY KEY (`IDEscuela`)
)
DEFAULT CHARACTER SET = utf8mb4;

CREATE TABLE IF NOT EXISTS `dbmatricula`.`matricula` (
  `IDMatricula` INT(11) NOT NULL AUTO_INCREMENT,
  `FechaMatricula` DATE NULL DEFAULT NULL,
  `NumeroCredito` INT(11) NULL DEFAULT NULL,
  `MaximoCreditos` INT(11) NULL DEFAULT NULL,
  `MinimoCreditos` INT(11) NULL DEFAULT NULL,
  `CodigoAlumno` VARCHAR(11) NULL DEFAULT NULL,
  `IDSemestre` INT(11) NULL DEFAULT NULL,
  `IDEscuela` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`IDMatricula`)
)
DEFAULT CHARACTER SET = utf8mb4;

CREATE TABLE IF NOT EXISTS `dbmatricula`.`prerequisito` (
  `idPreRequisito` INT(11) NOT NULL AUTO_INCREMENT,
  `CodigoCursoPreRequisito` VARCHAR(6) NULL DEFAULT NULL,
  `CodigoCurso` VARCHAR(6) NOT NULL,
  `Estado` BIT(1) NULL DEFAULT NULL,
  PRIMARY KEY (`idPreRequisito`)
)
DEFAULT CHARACTER SET = utf8mb4;

CREATE TABLE IF NOT EXISTS `dbmatricula`.`registronotas` (
  `IdRegistroNotas` INT(11) NOT NULL AUTO_INCREMENT,
  `CodigoDocente` VARCHAR(9) NULL DEFAULT NULL,
  `FechaRegistro` DATE NULL DEFAULT NULL,
  `PromedioPG` DECIMAL(8,2) NULL DEFAULT NULL,
  `PromedioAG` DECIMAL(8,2) NULL DEFAULT NULL,
  PRIMARY KEY (`IdRegistroNotas`)
)
DEFAULT CHARACTER SET = utf8mb4;

CREATE TABLE IF NOT EXISTS `dbmatricula`.`semestreacademico` (
  `IDSemestre` INT(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` VARCHAR(50) NULL DEFAULT NULL,
  PRIMARY KEY (`IDSemestre`)
)
DEFAULT CHARACTER SET = utf8mb4;

CREATE TABLE IF NOT EXISTS `dbmatricula`.`usuario` (
  `idUsuario` INT(11) NOT NULL AUTO_INCREMENT,
  `Appelidos` VARCHAR(200) NULL DEFAULT NULL,
  `Nombres` VARCHAR(200) NULL DEFAULT NULL,
  `Direccion` VARCHAR(200) NULL DEFAULT NULL,
  `Celular` VARCHAR(11) NULL DEFAULT NULL,
  `Correo` VARCHAR(150) NULL DEFAULT NULL,
  `Usuario` VARCHAR(15) NULL DEFAULT NULL,
  `Password` VARCHAR(100) NULL DEFAULT NULL,
  `Modificar` BIT(1) NULL DEFAULT NULL,
  `Eliminar` BIT(1) NULL DEFAULT NULL,
  `Categoria` VARCHAR(150) NULL DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
)
DEFAULT CHARACTER SET = utf8mb4;



INSERT INTO `escuelaprofesional` (`IDEscuela`, `NombreEscuela`, `URL`, `Telefono`) VALUES
(1, 'ing. informatica y sistemas', 'www.EAPIIS.edu.pe', '99999999'),
(10, 'ing. minas', 'www.EAPm.edu.pe', '4563434'),
(3, 'ing. agro industrias', 'www.EAPAI.edu.pe', '44444444'),
(9, 'ing. civil', 'www.EAPC.edu.pe', '64657'),
(5, 'administracion', 'www.EAPA.edu.pe', '7777777'),
(6, 'educacion inicial', 'www.EAPEIIB.edu.pe', '1234567'),
(7, 'ciencia politica', 'www.EAPCPG.edu.pe', '9845632'),
(8, 'veterinaria', 'www.EAPV.edu.pe', '65421');

INSERT INTO  semestreacademico VALUES ('0', '2021-I');

INSERT INTO usuario VALUES ('0', 'Serrano Perez', 'Eli', 'Av. Abancay', '986745667', 'eli@gmail.com', 'eli@gmail.com', '1234', '1', '1', 'Súper Usuario');

SELECT * from alumno INNER JOIN escuelaprofesional ON alumno.IDEscuela=escuelaprofesional.IDEscuela WHERE CodigoAlumno=