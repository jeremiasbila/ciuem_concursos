/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.40-MariaDB : Database - concursos
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`concursos` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `concursos`;

/*Table structure for table `candidatura` */

DROP TABLE IF EXISTS `candidatura`;

CREATE TABLE `candidatura` (
  `idCandidatura` int(11) NOT NULL AUTO_INCREMENT,
  `idConcursos` int(11) NOT NULL,
  `idFornecedores` int(11) NOT NULL,
  PRIMARY KEY (`idCandidatura`),
  KEY `idFornecedores` (`idFornecedores`),
  KEY `candidatura_ibfk_1` (`idConcursos`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `candidatura` */

insert  into `candidatura`(`idCandidatura`,`idConcursos`,`idFornecedores`) values (1,1,1),(2,4,2),(3,2,2),(4,1,3),(5,3,4),(6,1,3),(7,6,2);

/*Table structure for table `concurso` */

DROP TABLE IF EXISTS `concurso`;

CREATE TABLE `concurso` (
  `concurso_id` int(20) NOT NULL AUTO_INCREMENT,
  `modalidade` varchar(60) DEFAULT NULL,
  `referencia` varchar(60) DEFAULT NULL,
  `designacao` varchar(60) DEFAULT NULL,
  `aquisicao` varchar(60) DEFAULT NULL,
  `dataInicio` date DEFAULT NULL,
  `datafim` date DEFAULT NULL,
  `descricao` varchar(120) DEFAULT NULL,
  `previsto` char(1) DEFAULT '0' COMMENT '1-previsto e 0-Nao previsto',
  `aberto` char(1) DEFAULT '1' COMMENT '1-aberto e 0-fechado',
  `ficheiro` blob,
  PRIMARY KEY (`concurso_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `concurso` */

insert  into `concurso`(`concurso_id`,`modalidade`,`referencia`,`designacao`,`aquisicao`,`dataInicio`,`datafim`,`descricao`,`previsto`,`aberto`,`ficheiro`) values (1,'Concurso publico','UEM/2019','Material de escritorio','Material de escritorio','2019-11-02','2019-12-25','Aquisicao de material de escritorio para  a empresa IMOVISA','0','1',NULL),(2,'Concurso publico','UEM/2019','Material de escritorio para IMOVISA','Material de escritorio','2019-10-20','2019-12-15','Aquisicao de material de escritorio para IMOVISA, com taxas atractivas.','0','1',NULL),(3,'Concurso por lance','25/CIUEM/UEM/2019','Material informatico','Computadores','2019-11-02','2020-12-29','Computadores para estudantes que estao a reclamar','0','1',NULL),(4,'Concurso privado','UEM/2019','Aquisicao de produtos de limpeza','Material de Limpeza','2019-10-29','2019-12-30','Aquisicao de produtos de limpezas para a UEM ','0','1',NULL),(5,'Concurso por lance','UEM/2019','Material de escritorio','Material de escritorio','2019-11-29','2019-12-30','Aquisicao de Material','0','0',NULL),(6,'Concurso por lance','UEM/2019','Material de escritorio','Material de escritorio','2019-12-30','2019-12-30','Aquisicao de Material','0','0',NULL),(7,'Concurso publico','CIUEM/2019','Material de Comunicacao','Material de Comunicacao','2019-12-30','2019-12-30','Aquisicao de produtos','1','0',NULL);

/*Table structure for table `fornecedor` */

DROP TABLE IF EXISTS `fornecedor`;

CREATE TABLE `fornecedor` (
  `idFornecedor` int(11) NOT NULL AUTO_INCREMENT,
  `nrCadastro` varchar(20) DEFAULT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `senha` varchar(120) DEFAULT NULL,
  `nacionalidade` varchar(60) DEFAULT NULL,
  `tipoCorrente` varchar(60) DEFAULT NULL,
  `provincia` varchar(60) DEFAULT NULL,
  `distrito` varchar(60) DEFAULT NULL,
  `endereco` varchar(60) DEFAULT NULL,
  `contacto` int(20) DEFAULT NULL,
  `nuit` int(20) DEFAULT NULL,
  PRIMARY KEY (`idFornecedor`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `fornecedor` */

insert  into `fornecedor`(`idFornecedor`,`nrCadastro`,`nome`,`email`,`senha`,`nacionalidade`,`tipoCorrente`,`provincia`,`distrito`,`endereco`,`contacto`,`nuit`) values (1,'15151','Joaquim','ucolor12@gmail.com','2019','Mocambicana','Singular','Maputo','1','Maxaquene',846753890,145555715),(2,'14551','MCEL','services@mcel.co.mz','2019','Mocambicana','Empresa','Maputo','1','Central A',82,2147483647),(3,'14521','INAGE','services@inage.co.mz','2019','Mocambicana','Empresa','Maputo','1','Central A',84,2147483647),(4,'14532','Jeremias','jeremias.william@gmail.com','2019','Mocambicana','Singular','Maputo','Kamaxaquene','Maxaquene',84,12245579);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
