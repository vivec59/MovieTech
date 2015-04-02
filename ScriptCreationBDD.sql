
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



CREATE DATABASE IF NOT EXISTS `movieepsi` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `movieepsi`;

-- --------------------------------------------------------

--
-- Structure de la table `acteurs`
--

DROP TABLE `movieepsi`

CREATE TABLE IF NOT EXISTS `acteurs` (
  `ID_Film` int(11) NOT NULL,
  `Nom` varchar(25) DEFAULT NULL,
  `Prenom` varchar(25) DEFAULT NULL,
  `Date_Naissance` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`ID_Film`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `film_ibfk_1` FOREIGN KEY (`ID_Film`) REFERENCES `acteurs` (`ID_Film`) ON DELETE CASCADE;

