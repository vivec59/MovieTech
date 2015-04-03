
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

INSERT INTO `film`(`ID_Film`, `Nom_Film`, `Annee_Film`, `Categorie_Film`, `Realisateur_Film`) VALUES (1,"Star Wars IV","1977","Science-fiction","George Lucas");
INSERT INTO `film`(`ID_Film`, `Nom_Film`, `Annee_Film`, `Categorie_Film`, `Realisateur_Film`) VALUES (2,"Star Wars V","1980","Science-fiction","George Lucas");
INSERT INTO `film`(`ID_Film`, `Nom_Film`, `Annee_Film`, `Categorie_Film`, `Realisateur_Film`) VALUES (3,"Star Wars VI","1983","Science-fiction","George Lucas");