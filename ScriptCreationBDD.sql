
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


DROP DATABASE IF EXISTS `movieepsi`;

CREATE DATABASE IF NOT EXISTS `movieepsi`;
USE `movieepsi`;
-- --------------------------------------------------------

--
-- Structure de la table `acteurs`
--


CREATE TABLE IF NOT EXISTS `acteurs` (
  `ID_Film` int(11) NOT NULL,
  `Nom` varchar(25) DEFAULT NULL,
  `Prenom` varchar(25) DEFAULT NULL,
  `Date_Naissance` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`ID_Film`)
);

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

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `film_ibfk_1` FOREIGN KEY (`ID_Film`) REFERENCES `acteurs` (`ID_Film`) ON DELETE CASCADE;

