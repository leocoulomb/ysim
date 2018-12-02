-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 02 déc. 2018 à 23:58
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ysimv2`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `NUMART` char(25) NOT NULL,
  `CODECAT_ART` char(25) NOT NULL,
  `NOMART` char(250) DEFAULT NULL,
  `PRIXART` decimal(10,0) DEFAULT NULL,
  `DESCART` longtext,
  `IMGART` char(250) DEFAULT NULL,
  `QTESTOCK` decimal(10,0) DEFAULT NULL,
  `PRIXLIVRAISON` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`NUMART`, `CODECAT_ART`, `NOMART`, `PRIXART`, `DESCART`, `IMGART`, `QTESTOCK`, `PRIXLIVRAISON`) VALUES
('0001', 'VET', 'Chemise bleu', '15', 'Ceci est une chemise bleu de qualité moyenne', '0001.JPG', '2', '4'),
('0002', 'INF', 'Cle USB 2go', '2', 'Cle usb de 2 go', '0002.JPG', '2', '4'),
('0003', 'LOIS', 'Canne a peche', '10', 'AIXI UL/L top spinning fishingrod', '0003.JPG', '2', '4'),
('0004', 'ACC', 'Ceinture', '4', 'Buckle buisness Belt', '0004.JPG', '2', '4'),
('0005', 'DECO', 'Luminous Tape', '1', 'Luminous taoe self-adhesive', '0005.JPG', '2', '4'),
('0006', 'TEL', 'Cable iphone', '1', 'High Tensile braid phone cable unbreakable', '0006.JPG', '2', '4'),
('0007', 'VET', 'Chemise rouge', '15', 'Ceci est une chemise rouge de qualité moyenne', '0007.JPG', '2', '4'),
('0008', 'INF', 'Cle USB 45go', '15', 'Cle usb de 45go', '0008.JPG', '2', '4'),
('0009', 'LOIS', 'Canne a pecher pro', '20', 'AIXI UL/L top spinning fishingrod', '0009.JPG', '2', '4'),
('0010', 'ACC', 'bague', '4', 'Buckle buisness bague', '0010.JPG', '2', '4'),
('0011', 'DECO', 'Luminous stars', '1', 'Luminous stars self-adhesive', '0011.JPG', '2', '4'),
('0012', 'TEL', 'Cable iphone', '15', 'High Tensile braid phone cable unbreakable', '0012.JPG', '2', '4'),
('0013', 'VET', 'Chemise verte', '15', 'Ceci est une chemise verte de qualité moyenne', '0013.JPG', '2', '4'),
('0014', 'INF', 'camera', '60', 'camera HD', '0014.JPG', '2', '4'),
('0015', 'LOIS', 'Pate a fix', '10', 'pate a fix', '0015.JPG', '2', '4'),
('0016', 'ACC', 'Ceinture', '7', 'Buckle buisness Belt', '0016.JPG', '2', '4'),
('0017', 'DECO', 'Luminous Tape', '1', 'Luminous taoe self-adhesive', '0017.JPG', '2', '4'),
('0018', 'TEL', 'Cable iphone', '8', 'High Tensile braid phone cable unbreakable', '0018.JPG', '2', '4');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `articleandcat`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `articleandcat` (
`NUMART` char(25)
,`PRIXART` decimal(10,0)
,`NOMART` char(250)
,`DESCART` longtext
,`IMGART` char(250)
,`QTESTOCK` decimal(10,0)
,`PRIXLIVRAISON` decimal(10,0)
,`CODECAT_ART` char(25)
,`LIBELLECAT_ART` longtext
,`DESCCAT_ART` longtext
);

-- --------------------------------------------------------

--
-- Structure de la table `cat_article`
--

CREATE TABLE `cat_article` (
  `CODECAT_ART` char(25) NOT NULL,
  `LIBELLECAT_ART` longtext,
  `DESCCAT_ART` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cat_article`
--

INSERT INTO `cat_article` (`CODECAT_ART`, `LIBELLECAT_ART`, `DESCCAT_ART`) VALUES
('ACC', 'Accesoires', 'Articles Accesoires'),
('DECO', 'Decoration', 'Articles Decoration'),
('INF', 'Informatique', 'Article correspondant a l informatique'),
('LOIS', 'Loisirs', 'Articles de loisirs'),
('TEL', 'Accesoires Telephones', 'Article Accesoires telephones'),
('VET', 'Vetements', 'Article correspondant au vetements');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `NUMCLI` decimal(10,0) NOT NULL,
  `NOMCLI` char(250) DEFAULT NULL,
  `PRENOMCLI` char(250) DEFAULT NULL,
  `ADRESSECLI` longtext,
  `VILLECLI` char(250) DEFAULT NULL,
  `CPCLI` decimal(5,0) DEFAULT NULL,
  `TELCLI` decimal(10,0) DEFAULT NULL,
  `LOGINCLI` char(250) DEFAULT NULL,
  `PWDCLI` char(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`NUMCLI`, `NOMCLI`, `PRENOMCLI`, `ADRESSECLI`, `VILLECLI`, `CPCLI`, `TELCLI`, `LOGINCLI`, `PWDCLI`) VALUES
('1', 'qsqsqs', 'qsqsqs', 'qsqs', 'qsqsqs', '69009', '750963683', 'sqsqs', 'qsqsqs'),
('2', 'LEMARCHAND', 'COLETTE', '3 rue de la chatounette', 'Lyon', '69330', '658523826', 'login', 'mdp'),
('3', 'ROCANCOURT', 'XAVIER', '3 rue de la chatounette', 'Lyon', '69330', '658823825', 'login', 'mdp'),
('4', 'BUISARD', 'GEORGES', '3 rue de la chatounette', 'Lyon', '69330', '658523825', 'login', 'mdp'),
('5', 'LAROSE', 'SOLANGE', '3 rue de la chatounette', 'Lyon', '69330', '659523825', 'login', 'mdp'),
('6', 'HOLLEY', 'JANINE', '3 rue de la chatounette', 'Lyon', '69330', '658526825', 'login', 'mdp'),
('7', 'RIVIERE', 'GERARD', '3 rue de la chatounette', 'Lyon', '69330', '658853825', 'login', 'mdp'),
('8', 'LEGRAND', 'JD', '3 rue de la chatounette', 'Lyon', '69330', '688523825', 'login', 'mdp'),
('9', 'dsdsd', 'sdsdsd', 'sdsd', 'sdsdds', '10100', '1212121212', 'sddsd', 'sdsds'),
('10', 'DUVERLIE', 'FRANCOISE', '3 rue de la chatounette', 'Lyon', '69330', '658523825', 'login', 'mdp'),
('11', 'dsdsd', 'sdsdsd', 'sdsd', 'sdsdds', '10100', '1212121212', 'sddsd', 'sdsds'),
('12', 'qsdqsdqsd', 'qsdqsdqsd', 'qsdqsdqsd', 'sqdqsdqsd', '38230', '750963683', 'sdsd', 'sddqsdqsd'),
('13', 'qsdqsdqsd', 'qsdqsdqsd', 'qsdqsdqsd', 'sqdqsdqsd', '38230', '750963683', 'sdsd', 'sddqsdqsd');

-- --------------------------------------------------------

--
-- Structure de la table `lig_cmd`
--

CREATE TABLE `lig_cmd` (
  `NUMCLI` decimal(10,0) NOT NULL,
  `NUMART` char(25) NOT NULL,
  `DATECMD` date NOT NULL,
  `QTECMD` decimal(10,0) DEFAULT NULL,
  `DATEPREVUARRIVE` date DEFAULT NULL,
  `CBCMD` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `lig_cmd`
--

INSERT INTO `lig_cmd` (`NUMCLI`, `NUMART`, `DATECMD`, `QTECMD`, `DATEPREVUARRIVE`, `CBCMD`) VALUES
('1', '0001', '2018-11-14', '1', '2018-12-27', '1111111'),
('1', '0006', '2018-11-14', '1', '2018-12-27', '1111111'),
('2', '0003', '2018-11-14', '7', '2018-12-27', '1111111'),
('3', '0004', '2018-11-14', '2', '2018-12-27', '1111111'),
('4', '0009', '2018-11-14', '3', '2018-12-27', '1111111'),
('4', '0015', '2018-11-15', '1', '2018-12-27', '1111111'),
('5', '0002', '2018-11-14', '2', '2018-12-27', '1111111'),
('5', '0002', '2018-12-14', '5', '2018-12-27', '1111111'),
('6', '0001', '2018-11-14', '1', '2018-12-27', '1111111'),
('6', '0011', '2018-11-14', '3', '2018-12-27', '1111111'),
('7', '0018', '2018-11-14', '10', '2018-12-27', '1111111'),
('8', '0005', '2018-11-14', '1', '2018-12-27', '1111111'),
('8', '0008', '2018-11-14', '2', '2018-12-27', '1111111');

-- --------------------------------------------------------

--
-- Structure de la vue `articleandcat`
--
DROP TABLE IF EXISTS `articleandcat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `articleandcat`  AS  select `a`.`NUMART` AS `NUMART`,`a`.`PRIXART` AS `PRIXART`,`a`.`NOMART` AS `NOMART`,`a`.`DESCART` AS `DESCART`,`a`.`IMGART` AS `IMGART`,`a`.`QTESTOCK` AS `QTESTOCK`,`a`.`PRIXLIVRAISON` AS `PRIXLIVRAISON`,`c`.`CODECAT_ART` AS `CODECAT_ART`,`c`.`LIBELLECAT_ART` AS `LIBELLECAT_ART`,`c`.`DESCCAT_ART` AS `DESCCAT_ART` from (`article` `a` join `cat_article` `c` on((`a`.`CODECAT_ART` = `c`.`CODECAT_ART`))) ;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`NUMART`),
  ADD KEY `FK_APPARTIENT` (`CODECAT_ART`);

--
-- Index pour la table `cat_article`
--
ALTER TABLE `cat_article`
  ADD PRIMARY KEY (`CODECAT_ART`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`NUMCLI`);

--
-- Index pour la table `lig_cmd`
--
ALTER TABLE `lig_cmd`
  ADD PRIMARY KEY (`NUMCLI`,`NUMART`,`DATECMD`),
  ADD KEY `FK_LIG_CMD2` (`NUMCLI`),
  ADD KEY `FK_LIG_CMD3` (`NUMART`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_APPARTIENT` FOREIGN KEY (`CODECAT_ART`) REFERENCES `cat_article` (`CODECAT_ART`);

--
-- Contraintes pour la table `lig_cmd`
--
ALTER TABLE `lig_cmd`
  ADD CONSTRAINT `FK_LIG_CMD` FOREIGN KEY (`NUMCLI`) REFERENCES `client` (`NUMCLI`),
  ADD CONSTRAINT `FK_LIG_CMD2` FOREIGN KEY (`NUMART`) REFERENCES `article` (`NUMART`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
