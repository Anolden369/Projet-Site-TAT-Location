-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 29 Mars 2023 à 09:38
-- Version du serveur :  5.6.20-log
-- Version de PHP :  5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `agence_loc`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
`num` int(25) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(15) NOT NULL,
  `pseudo` varchar(15) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `rue` varchar(100) NOT NULL,
  `cp` varchar(5) NOT NULL,
  `ville` varchar(30) NOT NULL,
  `pays` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`num`, `nom`, `prenom`, `pseudo`, `mdp`, `mail`, `rue`, `cp`, `ville`, `pays`) VALUES
(39, 'Lam', 'Thien', 'thien2', '$2y$10$lUVg8hVDfSlFxMvqaOe.w.DBG8fmVun3oDDK8CC7zmbRcXegitZOm', 'thienlam215@gmail.com', '44 boulevard Auguste Blanqui', '77695', 'Villetaneuse', 'France'),
(40, 'Mekkiou', 'Adam', 'adam', '$2y$10$rtWGLV.iTMxQ1QW3jqPrl.hP4jdKeQn2DDAYItcuLMnldVmTb/zFu', 'anolden@gmail.com', '49 RUE PAJOL', '75018', 'PARIS', 'Suisse'),
(41, 'Kesteloot', 'Arthur', 'Arthur', '$2y$10$.PK3m7NfORrsrG87uZMxSOt0IJ.lCGMyzUwT6MuDxlkJPNJGxr6UW', '15511dufgz@gmail.com', '49 RUE PAJOL', '75018', 'PARIS', 'France'),
(42, 'Serrano', 'illyasse', 'illyasse', '$2y$10$DYGW.Jjig8NDjiKZngDOmu/KihrzsbhsH0/LYFOJfK6EdnCfYgByG', 'da@gmail.com', '49 RUE PAJOL', '75018', 'PARIS', 'France'),
(43, 'Siva', 'Anolden', 'anolden', '$2y$10$Bj5V2GEa2fMfyNErtEF6HemylpmPLmF92sMAX69qI8wy19OlJUUHC', 'anolden369@gmail.com', '512 RUE PAJOL', '75019', 'PARIS', 'France'),
(44, 'urgel', 'thomas', 'toto', '$2y$10$Y2F6VWiO32FgTQn1o3J0Me9z/KKiUpVO.cg43WJjFksHzJsOz46vK', 'da@gmail.com', '49 RUE PAJOL', '75018', 'PARIS', 'Belgique'),
(45, 'Thien', 'Prem', 'Prem', '$2y$10$lR9HE4I/C.FP3Fx2/MSlx.7Rp8rXSh5peyIfojXayd1Tp9I3VkZRC', 'lerebours123456@gmail.com', '49 RUE PAJOL', '75018', 'PARIS', 'Algérie'),
(46, 'Lam', 'Thien', 'toto1', '$2y$10$QIiJHqWHvZ.r0W75Sy7F5eIUVf.p.uEoC.9d171evu0l1vSPxkTFS', 'thienlam349@gmail.com', '44 boulevard Auguste Blanqui', '75018', 'PARIS', 'Suisse'),
(47, 'bloc', 'nico', 'nb', '$2y$10$mwQ76CnZ1HLB5R9QLE.VC../Q6l.fd8l6h.UyHHU4ygCKte.vEG7K', 'da@gmail.com', '49 RUE PAJOL', '75018', 'PARIS', 'Algérie');

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE IF NOT EXISTS `reservations` (
`numReservation` int(25) NOT NULL,
  `pseudo` varchar(25) NOT NULL,
  `Immatriculation` varchar(25) NOT NULL,
  `date_debut` varchar(30) NOT NULL,
  `date_fin` varchar(30) NOT NULL,
  `duree` varchar(15) NOT NULL,
  `prix` int(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;

--
-- Contenu de la table `reservations`
--

INSERT INTO `reservations` (`numReservation`, `pseudo`, `Immatriculation`, `date_debut`, `date_fin`, `duree`, `prix`) VALUES
(56, 'toto', 'GK-323-HK', '2023-03-08', '2023-03-10', '2', 700),
(57, 'toto', 'RS-610-PE', '2023-03-08', '2023-03-14', '6', 3540),
(58, 'Prem', 'XA-113-DE', '2023-03-08', '2023-03-29', '21', 9450),
(59, 'Prem', 'SQ-338-BK', '2023-03-15', '2023-03-22', '7', 1750),
(60, 'Prem', 'SQ-338-BK', '2023-03-15', '2023-03-20', '5', 1250),
(61, 'Prem', 'AM-633-LS', '2023-03-08', '2023-03-30', '22', 7700),
(62, 'Prem', 'AM-633-LS', '2023-03-30', '2023-03-31', '1', 350),
(63, 'nb', 'PO-605-HP', '2023-03-10', '2023-03-12', '2', 1500),
(64, 'nb', 'PO-605-HP', '2023-03-13', '2023-03-14', '1', 750),
(65, 'nb', 'AM-633-LS', '0000-00-00', '0000-00-00', '', 0),
(66, 'nb', 'XA-113-DE', '2023-03-31', '2023-04-14', '14', 6300),
(67, 'nb', 'VE-288-MJ', '2023-03-23', '2023-04-06', '14', 4200),
(68, 'nb', 'NJ-598-ZO', '2023-03-24', '2023-03-30', '6', 3540),
(69, 'nb', 'SQ-338-BK', '2023-03-24', '2023-03-30', '6', 1500),
(70, 'nb', 'RS-333-MB', '2023-03-10', '2023-03-12', '2', 700),
(71, 'nb', 'YT-552-LB', '2023-03-11', '2023-03-15', '4', 1080),
(72, 'nb', 'JE-662-IE', '2023-03-23', '2023-03-30', '7', 4130),
(73, 'nb', 'RC-305-PG', '2023-03-12', '2023-03-13', '1', 250),
(74, 'nb', 'RC-305-PG', '2023-03-30', '2023-03-31', '1', 250),
(75, 'prem', 'TC-711-FG', '2023-03-16', '2023-03-17', '1', 520),
(76, 'anolden', 'AM-633-LS', '2023-04-03', '2023-04-05', '2', 700);

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE IF NOT EXISTS `vehicule` (
  `Immatriculation` varchar(9) NOT NULL,
  `modele` varchar(100) NOT NULL,
  `prix` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `vehicule`
--

INSERT INTO `vehicule` (`Immatriculation`, `modele`, `prix`) VALUES
('AM-633-LS', 'Mercedes-AMG C 63S Coupe', 350),
('FF-420-MG', 'Mercedes A45S', 350),
('GK-323-HK', 'BMW M4 G2 Compétition', 350),
('JE-662-IE', 'Mercedes GLC 63S Coupe', 590),
('MA-854-FX', 'BMW M2 Compétition', 650),
('NJ-598-ZO', 'Mercedes G 63', 590),
('PO-605-HP', 'Audi R8 V10', 750),
('RC-305-PG', 'Mercedes A35', 250),
('RS-333-MB', 'Audi RS3 Sportback', 350),
('RS-610-PE', 'Audi RS 6 Avant (C8)', 590),
('SQ-338-BK', 'Audi RS Q3 Sportback', 250),
('TC-711-FG', 'BMW M5 Compétition Berline', 520),
('VE-288-MJ', 'Range Rover - Discovery', 300),
('XA-113-DE', 'Range Rover - Land Rover', 450),
('YT-552-LB', 'Range Rover - Evoque', 270);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
 ADD PRIMARY KEY (`num`), ADD UNIQUE KEY `pseudo_2` (`pseudo`), ADD KEY `pseudo` (`pseudo`), ADD KEY `pseudo_3` (`pseudo`);

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
 ADD PRIMARY KEY (`numReservation`), ADD KEY `Immatriculation` (`Immatriculation`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
 ADD PRIMARY KEY (`Immatriculation`), ADD KEY `modele` (`modele`), ADD KEY `modele_2` (`modele`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
MODIFY `num` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
MODIFY `numReservation` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=77;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `reservations`
--
ALTER TABLE `reservations`
ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`Immatriculation`) REFERENCES `vehicule` (`Immatriculation`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
