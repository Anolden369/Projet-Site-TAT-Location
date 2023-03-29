-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 08 Février 2023 à 20:19
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`num`, `nom`, `prenom`, `pseudo`, `mdp`, `mail`, `rue`, `cp`, `ville`, `pays`) VALUES
(1, 'Siva', 'Anolden', 'root', '$2y$10$fnJeYP9J6HA6g.17e.wYVukBsXaQEHCNpWy9cFzXKkGK3OgFxxQ2a', 'anolden@gmail.com', '49 RUE PAJOL', '75018', 'PARIS', 'France'),
(2, 'Siva', 'Ano', 'thomas', '$2y$10$OPli8MgAcIoetYV7hnx1aue1km9H6aaqDdu91CUEE9l2oNCtUQWk6', 'anolden@gmail.com', '44 boulevard Auguste Blanqui', '75018', 'PARIS', 'France'),
(38, 'Siva', 'Anolden', 'Anolden', '1234', 'anolden@gmail.com', '549 rue Auguste Blanqui', '75013', 'Paris', 'France'),
(39, 'Lam', 'Thien', 'thien2', '$2y$10$lUVg8hVDfSlFxMvqaOe.w.DBG8fmVun3oDDK8CC7zmbRcXegitZOm', 'thienlam369@gmail.com', '85 RUE PAJOLE', '77695', 'Villetaneuse', 'France'),
(40, 'Mekkiou', 'Adama', 'adam', '$2y$10$rtWGLV.iTMxQ1QW3jqPrl.hP4jdKeQn2DDAYItcuLMnldVmTb/zFu', 'anolden@gmail.com', '49 RUE PAJOL', '75018', 'PARIS', 'Suisse'),
(41, 'Kesteloot', 'Arthur', 'Arthur', '$2y$10$.PK3m7NfORrsrG87uZMxSOt0IJ.lCGMyzUwT6MuDxlkJPNJGxr6UW', '15511dufgz@gmail.com', '49 RUE PAJOL', '75018', 'PARIS', 'France'),
(42, 'Serrano', 'illyasse', 'illyasse', '$2y$10$DYGW.Jjig8NDjiKZngDOmu/KihrzsbhsH0/LYFOJfK6EdnCfYgByG', 'da@gmail.com', '49 RUE PAJOL', '75018', 'PARIS', 'France');

-- --------------------------------------------------------

--
-- Structure de la table `date`
--

CREATE TABLE IF NOT EXISTS `date` (
  `numDate` varchar(100) NOT NULL,
  `duree` int(100) NOT NULL,
  `dateDebutLoc` date NOT NULL,
  `dateFinLoc` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `employé`
--

CREATE TABLE IF NOT EXISTS `employé` (
  `numEmpl` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `tel` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `numLoc` varchar(100) NOT NULL,
  `prix` varchar(100) NOT NULL,
  `caution` varchar(100) NOT NULL,
  `Immatriculation` int(9) NOT NULL,
  `numClient` varchar(100) NOT NULL,
  `numEmpl` varchar(100) NOT NULL,
  `numDate` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE IF NOT EXISTS `reservations` (
`numReservation` int(25) NOT NULL,
  `pseudo` varchar(25) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(25) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `modele` varchar(25) NOT NULL,
  `Immatriculation` varchar(25) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `reservations`
--

INSERT INTO `reservations` (`numReservation`, `pseudo`, `nom`, `prenom`, `adresse`, `modele`, `Immatriculation`, `date_debut`, `date_fin`) VALUES
(1, 'Thomas', 'Urgel', 'Thomas', '44 boulevard Auguste Blan', 'C3 Picasso', 'AW-556-XE', '2023-02-02', '2023-02-03'),
(2, 'Thien', 'Lam', 'Thien', '44 boulevard Auguste Blan', 'Toyota Yaris', 'AZ-556-XD', '2023-02-03', '2023-02-03'),
(3, 'Thomas', 'Urgel', 'Thomas', '44 boulevard Auguste Blan', 'Class B', 'FR-293-QM', '2023-02-03', '2023-03-01'),
(4, 'Anolden', 'Siva', 'Anolden', '49 RUE PAJOL', 'Mercedes Class B', 'FR-293-QE', '2023-02-06', '2023-02-10'),
(5, 'Anolden', 'Siva', 'Anolden', '49 RUE PAJOL', 'Mercedes Class C', 'EQ-853-QE', '2023-02-06', '2023-02-10'),
(6, 'Thien2', 'Lam', 'Thien', '40 rue Pajol', 'Mercedes E63S', 'FR-853-PM', '2023-02-08', '2023-02-10'),
(7, 'Thien2', 'Lam', 'Thien', '40 rue Pajol', 'Mercedes E63S', 'EQ-853-QS', '2023-02-08', '2023-02-09'),
(8, 'Thien2', 'Lam', 'Thien', '49 rue Pajol', 'Mercedes E63S', 'FR-293-QZ', '2023-02-08', '2023-02-09'),
(9, 'adam', 'Mekkiou', 'Adam', '44 boulevard Auguste Blan', 'Clio 2', 'ME-444-DE', '2023-02-09', '2023-02-11'),
(10, 'adam', 'Mekkiou', 'Adam', '44 boulevard Auguste Blan', 'Clio 2', 'ME-444-DR', '2023-02-09', '2023-02-11'),
(11, 'adam', 'Mekkiou', 'Adam', '44 boulevard Auguste Blan', 'Clio 2', 'ME-444-DZ', '2023-02-09', '2023-02-11'),
(12, 'Arthur', 'Kesteloot', 'Arthur', '49 RUE PAJOL', 'Toyota Yaris Compact', 'FR-985-RE', '2023-02-25', '2023-03-04'),
(13, 'illyasse', 'Serrano', 'illyasse', '49 RUE PAJOL', 'Clio 2', 'AZ-556-XQ', '2023-02-25', '2023-02-28');

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE IF NOT EXISTS `vehicule` (
  `Immatriculation` varchar(9) NOT NULL,
  `marque` varchar(100) NOT NULL,
  `gamme` varchar(100) NOT NULL,
  `modele` varchar(100) NOT NULL,
  `motorisation` int(100) NOT NULL,
  `puissance` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
 ADD PRIMARY KEY (`num`);

--
-- Index pour la table `date`
--
ALTER TABLE `date`
 ADD PRIMARY KEY (`numDate`);

--
-- Index pour la table `employé`
--
ALTER TABLE `employé`
 ADD PRIMARY KEY (`numEmpl`);

--
-- Index pour la table `location`
--
ALTER TABLE `location`
 ADD PRIMARY KEY (`numLoc`);

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
 ADD PRIMARY KEY (`numReservation`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
MODIFY `num` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
MODIFY `numReservation` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
