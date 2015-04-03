
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


DROP DATABASE IF EXISTS `movieepsi`;

CREATE DATABASE IF NOT EXISTS `movieepsi`;
USE `movieepsi`;

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE IF NOT EXISTS `film` (
  `ID_Film` int(11) NOT NULL,
  `Nom_Film` varchar(25) DEFAULT NULL,
  `Annee_Film` varchar(25) DEFAULT NULL,
  `Categorie_Film` varchar(25) DEFAULT NULL,
  `Realisateur_Film` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`ID_Film`)
);
