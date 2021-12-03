-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 03 déc. 2021 à 17:55
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `moduleconnexion`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `prenom`, `nom`, `password`) VALUES
(1, 'admin', 'admin', 'admin', 'admin'),
(2, 'khellaf', 'khellaf', 'rachedi', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(8, 'EricCartman', 'Eric Theodore', 'Cartman', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(9, 'Stan', 'Stanley', 'Marsh', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(10, 'Kyle', 'Kyle', 'Broflovski', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(11, 'Kenny', 'Kenneth', 'McCormick', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(12, 'Randy', 'Randy', 'Marsh', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(13, 'desde', 'desde', 'desde', 'ca8b0a60d3bc1b1d892c371c1df5fab47e110a2f'),
(14, 'mohamed', 'mohamed', 'mohamed', '292959f6c7ab4f8b0761469ac1f11fc73f43b306'),
(15, 'Butters', 'Leopold', 'Stotch', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
