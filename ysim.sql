-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 10 déc. 2018 à 00:08
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
-- Base de données :  `ysimv4`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `NUMART` int(7) NOT NULL,
  `CODECAT_ART` char(25) NOT NULL,
  `NOMART` char(250) DEFAULT NULL,
  `PRIXART` decimal(7,2) DEFAULT NULL,
  `DESCART` longtext,
  `IMGART` char(250) DEFAULT NULL,
  `QTESTOCK` int(7) DEFAULT NULL,
  `PRIXLIVRAISON` decimal(7,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`NUMART`, `CODECAT_ART`, `NOMART`, `PRIXART`, `DESCART`, `IMGART`, `QTESTOCK`, `PRIXLIVRAISON`) VALUES
(1, 'VET', 'Chemise bleue', '15.00', 'Ceci est une chemise bleue de qualité moyenne', '0001.JPG', 2, '4.00'),
(2, 'INF', 'Clé USB 2go', '2.00', 'Clé USB de 2 go', '0002.JPG', 2, '4.00'),
(3, 'LOIS', 'Canne à pêche', '10.00', 'AIXI UL/L top spinning fishingrod', '0003.JPG', 2, '4.00'),
(4, 'ACC', 'Ceinture', '4.00', 'Buckle buisness Belt', '0004.JPG', 2, '4.00'),
(5, 'DECO', 'Luminous Tape', '5.00', 'Luminous taoe self-adhesive', '0005.JPG', 2, '5.00'),
(6, 'TEL', 'Câble iPhone', '1.00', 'High Tensile braid phone cable unbreakable', '0006.JPG', 2, '4.00'),
(7, 'VET', 'Chemise rouge', '15.00', 'Ceci est une chemise rouge de qualité moyenne', '0007.JPG', 2, '4.00'),
(8, 'INF', 'Clé USB 45go', '15.00', 'Clé USB de 45go', '0008.JPG', 2, '4.00'),
(9, 'LOIS', 'Canne à pêche pro', '20.00', 'AIXI UL/L top spinning fishingrod', '0009.JPG', 2, '4.00'),
(10, 'ACC', 'Bague', '4.00', 'Buckle buisness bague', '0010.JPG', 2, '4.00'),
(11, 'DECO', 'Luminous stars', '1.00', 'Luminous stars self-adhesive', '0011.JPG', 2, '4.00'),
(12, 'TEL', 'Câble iPhone', '15.00', 'High Tensile braid phone cable unbreakable', '0012.JPG', 2, '4.00'),
(13, 'VET', 'Chemise verte', '15.00', 'Ceci est une chemise verte de qualité moyenne', '0013.JPG', 2, '4.00'),
(14, 'INF', 'Caméra', '60.00', 'Caméra HD', '0014.JPG', 2, '4.00'),
(15, 'LOIS', 'Pâte à fix', '10.00', 'Pâte à fix', '0015.JPG', 2, '4.00'),
(16, 'ACC', 'Ceinture', '7.00', 'Buckle buisness Belt', '0016.JPG', 2, '4.00'),
(17, 'DECO', 'Luminous Tape', '1.00', 'Luminous taoe self-adhesive', '0017.JPG', 2, '4.00'),
(18, 'TEL', 'Câble iPhone', '8.00', 'High Tensile braid phone cable unbreakable', '0018.JPG', 2, '4.00');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `articleandcat`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `articleandcat` (
`NUMART` int(7)
,`PRIXART` decimal(7,2)
,`NOMART` char(250)
,`DESCART` longtext
,`IMGART` char(250)
,`QTESTOCK` int(7)
,`PRIXLIVRAISON` decimal(7,2)
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
('ACC', 'Accessoires', 'Articles Accessoires'),
('DECO', 'Décorations', 'Articles Décorations'),
('INF', 'Informatique', 'Article correspondant a l\'informatique'),
('LOIS', 'Loisirs', 'Articles de loisirs'),
('TEL', 'Accessoires Téléphones', 'Article Accessoires téléphones'),
('VET', 'Vêtements', 'Article correspondant au vêtements');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `NUMCLI` int(7) NOT NULL,
  `NOMCLI` char(250) DEFAULT NULL,
  `PRENOMCLI` char(250) DEFAULT NULL,
  `ADRESSECLI` longtext,
  `VILLECLI` char(250) DEFAULT NULL,
  `CPCLI` char(5) DEFAULT NULL,
  `TELCLI` char(10) DEFAULT NULL,
  `LOGINCLI` char(250) DEFAULT NULL,
  `PWDCLI` char(250) DEFAULT NULL,
  `ROLECLI` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`NUMCLI`, `NOMCLI`, `PRENOMCLI`, `ADRESSECLI`, `VILLECLI`, `CPCLI`, `TELCLI`, `LOGINCLI`, `PWDCLI`, `ROLECLI`) VALUES
(1, 'qsqsqs', 'qsqsqs', 'qsqs', 'qsqsqs', '69009', '750963683', 'sqsqs', 'qsqsqs', 0),
(2, 'LEMARCHAND', 'COLETTE', '3 rue de la chatounette', 'Lyon', '69330', '658523826', 'COLETTE', 'COLETTE', 0),
(3, 'ROCANCOURT', 'XAVIER', '3 rue de la chatounette', 'Lyon', '69330', '658823825', 'XAVIER', 'mdp', 0),
(4, 'BUISARD', 'GEORGES', '3 rue de la chatounette', 'Lyon', '69330', '658523825', 'GEORGES', 'mdp', 0),
(5, 'LAROSE', 'SOLANGE', '3 rue de la chatounette', 'Lyon', '69330', '659523825', 'SOLANGE', 'mdp', 0),
(6, 'HOLLEY', 'JANINE', '3 rue de la chatounette', 'Lyon', '69330', '658526825', 'JANINE', 'mdp', 0),
(7, 'RIVIERE', 'GERARD', '3 rue de la chatounette', 'Lyon', '69330', '658853825', 'GERARD', 'mdp', 0),
(8, 'LEGRAND', 'JD', '3 rue de la chatounette', 'Lyon', '69330', '688523825', 'JD', 'mdp', 0),
(9, 'DUVERLIE', 'FRANCOISE', '3 rue de la chatounette', 'Lyon', '69330', '658523825', 'FRANCOISE', 'mdp', 0),
(10, 'AUBERT', 'VALENTIN', '41 rue de Cuzieu', 'Lyon', '69110', '0778797202', 'VAL', 'VAL', 1),
(11, 'COULOMB', 'LEO', '42 rue du Lac', 'Lyon', '69620', '0778547202', 'lcoul', 'lcoul', 1),
(12, 'CHEVALLIER', 'SEBASTIEN', '12 rue de Turei', 'Lyon', '69480', '0776598202', 'SEB', 'SEB', 1);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `cmdwithart`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `cmdwithart` (
`NUMCLI` int(7)
,`NUMART` int(7)
,`PRIXART` decimal(7,2)
,`NOMART` char(250)
,`IMGART` char(250)
,`PRIXLIVRAISON` decimal(7,2)
,`NUMCMD` int(7)
,`DATECMD` date
,`DATEPREVUARRIVE` date
,`QTECMD` int(7)
,`PRIXCMD` decimal(7,2)
);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `NUMCMD` int(7) NOT NULL,
  `NUMCLI` int(7) NOT NULL,
  `DATECMD` date NOT NULL,
  `DATEPREVUARRIVE` date DEFAULT NULL,
  `CBCMD` char(10) DEFAULT NULL,
  `PRIXCMD` decimal(7,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`NUMCMD`, `NUMCLI`, `DATECMD`, `DATEPREVUARRIVE`, `CBCMD`, `PRIXCMD`) VALUES
(1, 1, '2018-11-14', '2018-11-14', '1111111', '15.00'),
(2, 1, '2018-11-14', '2018-11-14', '1111111', '15.00'),
(3, 2, '2018-11-14', '2018-11-14', '2222222', '15.00'),
(4, 2, '2018-11-14', '2018-11-14', '2222222', '15.00'),
(5, 3, '2018-11-14', '2018-11-14', '3333333', '15.00'),
(6, 4, '2018-11-14', '2018-11-14', '4444444', '15.00'),
(7, 5, '2018-11-14', '2018-11-14', '5555555', '15.00'),
(8, 6, '2018-11-14', '2018-11-14', '6666666', '15.00'),
(9, 7, '2018-11-14', '2018-11-14', '7777777', '15.00'),
(10, 8, '2018-11-14', '2018-11-14', '8888888', '15.00'),
(11, 8, '2018-11-14', '2018-11-14', '8888888', '15.00'),
(12, 7, '2018-11-14', '2018-11-14', '7777777', '15.00'),
(13, 5, '2018-11-14', '2018-11-14', '5555555', '15.00'),
(14, 11, '2018-12-09', '2018-12-23', '0606060606', '39.00');

-- --------------------------------------------------------

--
-- Structure de la table `lig_cmd`
--

CREATE TABLE `lig_cmd` (
  `NUMCMD` int(7) NOT NULL,
  `NUMART` int(7) NOT NULL,
  `QTECMD` int(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `lig_cmd`
--

INSERT INTO `lig_cmd` (`NUMCMD`, `NUMART`, `QTECMD`) VALUES
(1, 1, 1),
(1, 6, 1),
(2, 3, 7),
(3, 4, 2),
(4, 9, 3),
(4, 15, 1),
(5, 2, 5),
(5, 4, 2),
(6, 1, 1),
(6, 11, 3),
(7, 18, 10),
(8, 5, 1),
(8, 8, 2),
(14, 2, 2),
(14, 10, 2),
(14, 16, 1);

-- --------------------------------------------------------

--
-- Structure de la vue `articleandcat`
--
DROP TABLE IF EXISTS `articleandcat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `articleandcat`  AS  select `a`.`NUMART` AS `NUMART`,`a`.`PRIXART` AS `PRIXART`,`a`.`NOMART` AS `NOMART`,`a`.`DESCART` AS `DESCART`,`a`.`IMGART` AS `IMGART`,`a`.`QTESTOCK` AS `QTESTOCK`,`a`.`PRIXLIVRAISON` AS `PRIXLIVRAISON`,`c`.`CODECAT_ART` AS `CODECAT_ART`,`c`.`LIBELLECAT_ART` AS `LIBELLECAT_ART`,`c`.`DESCCAT_ART` AS `DESCCAT_ART` from (`article` `a` join `cat_article` `c` on((`a`.`CODECAT_ART` = `c`.`CODECAT_ART`))) ;

-- --------------------------------------------------------

--
-- Structure de la vue `cmdwithart`
--
DROP TABLE IF EXISTS `cmdwithart`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cmdwithart`  AS  select `c`.`NUMCLI` AS `NUMCLI`,`a`.`NUMART` AS `NUMART`,`a`.`PRIXART` AS `PRIXART`,`a`.`NOMART` AS `NOMART`,`a`.`IMGART` AS `IMGART`,`a`.`PRIXLIVRAISON` AS `PRIXLIVRAISON`,`c`.`NUMCMD` AS `NUMCMD`,`c`.`DATECMD` AS `DATECMD`,`c`.`DATEPREVUARRIVE` AS `DATEPREVUARRIVE`,`l`.`QTECMD` AS `QTECMD`,`c`.`PRIXCMD` AS `PRIXCMD` from ((`commande` `c` join `lig_cmd` `l` on((`c`.`NUMCMD` = `l`.`NUMCMD`))) join `article` `a` on((`a`.`NUMART` = `l`.`NUMART`))) ;

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
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`NUMCMD`),
  ADD KEY `FK_PASSE_CMD` (`NUMCLI`);

--
-- Index pour la table `lig_cmd`
--
ALTER TABLE `lig_cmd`
  ADD PRIMARY KEY (`NUMCMD`,`NUMART`),
  ADD KEY `FK_LIG_CMD2` (`NUMCMD`),
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
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `FK_PASSE_CMD` FOREIGN KEY (`NUMCLI`) REFERENCES `client` (`NUMCLI`);

--
-- Contraintes pour la table `lig_cmd`
--
ALTER TABLE `lig_cmd`
  ADD CONSTRAINT `FK_LIG_CMD` FOREIGN KEY (`NUMCMD`) REFERENCES `commande` (`NUMCMD`),
  ADD CONSTRAINT `FK_LIG_CMD2` FOREIGN KEY (`NUMART`) REFERENCES `article` (`NUMART`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
