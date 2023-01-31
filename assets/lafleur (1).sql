-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 31 jan. 2023 à 16:32
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lafleur`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `username_admin` char(50) COLLATE utf8_bin NOT NULL,
  `mot_de_passe_admin` char(64) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`username_admin`, `mot_de_passe_admin`) VALUES
('', ''),
('Admin', 'arthuro');

-- --------------------------------------------------------

--
-- Structure de la table `bon_de_reduction`
--

DROP TABLE IF EXISTS `bon_de_reduction`;
CREATE TABLE IF NOT EXISTS `bon_de_reduction` (
  `code_de_reduction` char(20) COLLATE utf8_bin NOT NULL,
  `valeur_de_renduction_en_pourcentage` int(11) NOT NULL,
  `mail_login` char(100) COLLATE utf8_bin NOT NULL,
  `Numero_de_la_commande` char(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`code_de_reduction`),
  UNIQUE KEY `bon_de_reduction_commande_AK` (`Numero_de_la_commande`),
  KEY `bon_de_reduction_utilisateur_FK` (`mail_login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `code_de_la_categorie` char(20) COLLATE utf8_bin NOT NULL,
  `nom_de_la_categorie` char(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`code_de_la_categorie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`code_de_la_categorie`, `nom_de_la_categorie`) VALUES
('bul', 'Bulbes'),
('mas', 'Plantes à massif'),
('ros', 'Rosiers'),
('test', 'test');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `Numero_de_la_commande` char(20) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `mail_login` char(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`Numero_de_la_commande`),
  KEY `commande_utilisateur_FK` (`mail_login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `commander`
--

DROP TABLE IF EXISTS `commander`;
CREATE TABLE IF NOT EXISTS `commander` (
  `Numero_de_la_commande` char(20) COLLATE utf8_bin NOT NULL,
  `reference` char(8) COLLATE utf8_bin NOT NULL,
  `quantite_commandee` int(11) NOT NULL,
  PRIMARY KEY (`Numero_de_la_commande`,`reference`),
  KEY `commander_produit0_FK` (`reference`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `pannier`
--

DROP TABLE IF EXISTS `pannier`;
CREATE TABLE IF NOT EXISTS `pannier` (
  `mail_login` char(100) COLLATE utf8_bin NOT NULL,
  `reference` char(8) COLLATE utf8_bin NOT NULL,
  `quantite_d_article` int(11) NOT NULL,
  PRIMARY KEY (`mail_login`,`reference`),
  KEY `pannier_produit0_FK` (`reference`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `reference` char(8) COLLATE utf8_bin NOT NULL,
  `designation` char(100) COLLATE utf8_bin NOT NULL,
  `photo` char(50) COLLATE utf8_bin NOT NULL,
  `prix` float NOT NULL,
  `quantite_en_stock` int(11) NOT NULL,
  `code_de_la_categorie` char(20) COLLATE utf8_bin NOT NULL,
  `description` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`reference`),
  KEY `produit_categorie_FK` (`code_de_la_categorie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`reference`, `designation`, `photo`, `prix`, `quantite_en_stock`, `code_de_la_categorie`, `description`) VALUES
('b01', '3 bulbes de bégonias', 'bulbes_begonia', 6, 100, 'bul', ''),
('b02', '10 bulbes de dahlias', 'bulbes_dahlia', 13, 100, 'bul', ''),
('b03', '50 glaïeuls', 'bulbes_glaieuil', 10, 100, 'bul', ''),
('m01', 'Lot de 3 marguerites', 'massif_marguerite', 16, 100, 'mas', ''),
('m02', 'Pour un bouquet de 6 pensées', 'massif_pensee', 7, 100, 'mas', ''),
('m03', 'Mélange varié de 10 plantes', 'massif_melange', 16, 100, 'mas', ''),
('r01', '1 pied spécial grandes fleurs', 'rosier_gdefleur', 21, 100, 'ros', ''),
('r02', 'Une variété sélectionné', 'rosiers_parfum', 10, 100, 'ros', ''),
('r03', 'Rosier arbuste', 'rosiers_arbuste', 9, 100, 'ros', ''),
('r44', 'roses exceptionnelles', 'X', 45.25, 5, 'ros', '');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `mail_login` char(100) COLLATE utf8_bin NOT NULL,
  `mot_de_passe_user` char(255) COLLATE utf8_bin NOT NULL,
  `nom` char(50) COLLATE utf8_bin NOT NULL,
  `prenom` char(50) COLLATE utf8_bin NOT NULL,
  `adresse` char(100) COLLATE utf8_bin NOT NULL,
  `tel` char(15) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`mail_login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`mail_login`, `mot_de_passe_user`, `nom`, `prenom`, `adresse`, `tel`) VALUES
('test2@test2.test2', '$2y$10$/JGEOKirXk47ViC6TmV9pOhC3QhxEXEBigUL.AMFZUQMOWtvREXmS', 'test2', 'test2', 'test2', '0102030102');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `bon_de_reduction`
--
ALTER TABLE `bon_de_reduction`
  ADD CONSTRAINT `bon_de_reduction_commande0_FK` FOREIGN KEY (`Numero_de_la_commande`) REFERENCES `commande` (`Numero_de_la_commande`),
  ADD CONSTRAINT `bon_de_reduction_utilisateur_FK` FOREIGN KEY (`mail_login`) REFERENCES `utilisateur` (`mail_login`);

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_utilisateur_FK` FOREIGN KEY (`mail_login`) REFERENCES `utilisateur` (`mail_login`);

--
-- Contraintes pour la table `commander`
--
ALTER TABLE `commander`
  ADD CONSTRAINT `commander_commande_FK` FOREIGN KEY (`Numero_de_la_commande`) REFERENCES `commande` (`Numero_de_la_commande`),
  ADD CONSTRAINT `commander_produit0_FK` FOREIGN KEY (`reference`) REFERENCES `produit` (`reference`);

--
-- Contraintes pour la table `pannier`
--
ALTER TABLE `pannier`
  ADD CONSTRAINT `pannier_produit0_FK` FOREIGN KEY (`reference`) REFERENCES `produit` (`reference`),
  ADD CONSTRAINT `pannier_utilisateur_FK` FOREIGN KEY (`mail_login`) REFERENCES `utilisateur` (`mail_login`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_categorie_FK` FOREIGN KEY (`code_de_la_categorie`) REFERENCES `categorie` (`code_de_la_categorie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
