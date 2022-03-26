#drop database modelonotas7;
create database modelonotas7;
use modelonotas7;
CREATE TABLE Docentes (
ceduladocente bigint PRIMARY KEY,
nombresdocente VARCHAR(30) NOT NULL,
apellidosdocente VARCHAR(30) NOT NULL,
emaildocente VARCHAR(30) NOT NULL
);

CREATE TABLE Estudiantes (
codigoestudiante bigint PRIMARY KEY,
nombreestudiante VARCHAR(30) NOT NULL,
apellidosestudiante VARCHAR(30) NOT NULL,
fechanacimiento DATE NOT NULL,
generoestudiante VARCHAR(15) NOT NULL
);

CREATE TABLE Materias (
codigomateria varchar(20) PRIMARY KEY,
nombremateria VARCHAR(30) NOT NULL,
creditosmateria integer NOT NULL
);

insert into Materias (codigomateria, nombremateria, creditosmateria) values ("1234", "Holita", 3);

CREATE TABLE Notas (
consecutivonota bigint AUTO_INCREMENT primary key,
estudiantenota bigint NOT NULL,
materianota varchar(20) NOT NULL,
docentenota bigint NOT NULL,
valornota float NOT NULL,
foreign key (estudiantenota) references Estudiantes(codigoestudiante),
foreign key (docentenota) references Docentes(ceduladocente),
foreign key (materianota) references Materias(codigomateria) 
);

use modelonotas7;
insert into docentes (ceduladocente,nombresdocente,apellidosdocente,emaildocente) values (123456,'Luis Carlos ','Perez Torres','luisperez@libertadores.edu.co' );

insert into docentes (ceduladocente,nombresdocente,apellidosdocente,emaildocente) values (987654,'Ana Rosa ','Pulido Serna','anarosa@libertadores.edu.co' );

insert into docentes (ceduladocente,nombresdocente,apellidosdocente,emaildocente) values (123654,'Oscar Julian ','Almanza','almanza@libertadores.edu.co' );

use modelonotas7;
DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_docentes`(
 IN _ceduladocente bigint,
 IN _nombresdocente varchar(30),
 IN _apellidosdocente varchar(30),
 IN _emaildocente varchar(30)
)
BEGIN
  insert into docentes(ceduladocente,nombresdocente,apellidosdocente,emaildocente) 
  values (_ceduladocente,_nombresdocente,_apellidosdocente,_emaildocente);

END$$
DELIMITER ;



use modelonotas7;
DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_docentes`(
)
BEGIN
SELECT ceduladocente,nombresdocente,apellidosdocente,emaildocente FROM docentes;	
END$$
DELIMITER ;




use modelonotas7;
DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `select2_docentes`(
 IN _ceduladocente bigint
)
BEGIN
SELECT ceduladocente,nombresdocente,apellidosdocente,emaildocente FROM docentes where ceduladocente=_ceduladocente;	
END$$
DELIMITER ;



use modelonotas7;
DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `update_docentes`(
 IN _ceduladocente bigint,
 IN _nombresdocente varchar(30),
 IN _apellidosdocente varchar(30),
 IN _emaildocente varchar(30)
)
BEGIN
 update docentes set nombresdocente = _nombresdocente,apellidosdocente=_apellidosdocente,emaildocente=_emaildocente where ceduladocente=_ceduladocente;
END$$
DELIMITER ;

use modelonotas7;
DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_materias`(
 IN _codigomateria varchar(20),
 IN _nombremateria varchar(30),
 IN _creditosmateria integer
)
BEGIN
  insert into materias(codigo,nombresdocente,creditosmateria) 
  values (_codigo,_nombremateria,_creditosmateria);

END$$
DELIMITER ;

##Consultar materias
use modelonotas7;
DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `select_materias`(
)
BEGIN
SELECT codigomateria,nombremateria,creditosmateria FROM Materias;	
END$$
DELIMITER ;

use modelonotas7;
DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `select2_materias`(
 IN _codigomateria bigint
)
BEGIN
SELECT codigomateria,nombremateria,creditosmateria FROM Materias where codigomateria=_codigomateria;	
END$$
DELIMITER ;