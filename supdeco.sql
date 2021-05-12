-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 12 mai 2021 à 10:00
-- Version du serveur :  5.7.24
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `supdeco`
--

-- --------------------------------------------------------

--
-- Structure de la table `anneeetude`
--

DROP TABLE IF EXISTS `anneeetude`;
CREATE TABLE IF NOT EXISTS `anneeetude` (
  `id_anneeEtude` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_etudiantbts` mediumint(8) UNSIGNED NOT NULL,
  `id_etudiantcyclepro` mediumint(8) UNSIGNED NOT NULL,
  `id_etudiantgrandeecole` mediumint(8) UNSIGNED NOT NULL,
  `id_etudiantdba` mediumint(8) UNSIGNED NOT NULL,
  `valeur_annee` smallint(6) NOT NULL,
  PRIMARY KEY (`id_anneeEtude`,`id_etudiantbts`),
  KEY `id_etudiantbts` (`id_etudiantbts`),
  KEY `id_etudiantcyclepro` (`id_etudiantcyclepro`),
  KEY `id_etudiantgrandeecole` (`id_etudiantgrandeecole`),
  KEY `id_etudiantdba` (`id_etudiantdba`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id_article` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_users` mediumint(8) UNSIGNED NOT NULL,
  `titre` varchar(60) NOT NULL,
  `contenu` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_article`),
  KEY `id_users` (`id_users`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `article_categorie`
--

DROP TABLE IF EXISTS `article_categorie`;
CREATE TABLE IF NOT EXISTS `article_categorie` (
  `id_article` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_categorie` mediumint(8) UNSIGNED NOT NULL,
  PRIMARY KEY (`id_article`,`id_categorie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `article_motcle`
--

DROP TABLE IF EXISTS `article_motcle`;
CREATE TABLE IF NOT EXISTS `article_motcle` (
  `id_article` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_motcle` mediumint(8) UNSIGNED NOT NULL,
  PRIMARY KEY (`id_article`,`id_motcle`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categorie` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom_categorie` varchar(60) NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id_commentaire` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_article` mediumint(8) UNSIGNED NOT NULL,
  `contenu` text NOT NULL,
  `email` varchar(60) NOT NULL,
  `pseudo` varchar(60) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_commentaire`),
  KEY `id_article` (`id_article`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

DROP TABLE IF EXISTS `competence`;
CREATE TABLE IF NOT EXISTS `competence` (
  `id_competence` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_etudiantgrandeecole` mediumint(8) UNSIGNED NOT NULL,
  `id_etudiantdba` mediumint(8) UNSIGNED NOT NULL,
  `competence1` varchar(200) NOT NULL,
  `competence2` varchar(200) NOT NULL,
  `competence3` varchar(200) NOT NULL,
  `competence4` varchar(200) NOT NULL,
  `competence5` varchar(200) NOT NULL,
  PRIMARY KEY (`id_competence`),
  KEY `id_etudiantgrandeecole` (`id_etudiantgrandeecole`),
  KEY `id_etudiantdba` (`id_etudiantdba`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `compositiondossier`
--

DROP TABLE IF EXISTS `compositiondossier`;
CREATE TABLE IF NOT EXISTS `compositiondossier` (
  `id_compositiondossier` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_etudiantcyclepro` mediumint(8) UNSIGNED NOT NULL,
  `id_etudiantgrandeecole` mediumint(8) UNSIGNED NOT NULL,
  `id_etudiantdba` mediumint(8) UNSIGNED NOT NULL,
  `description_dossier1` text NOT NULL,
  `description_dossier2` text NOT NULL,
  `description_dossier3` text NOT NULL,
  `description_dossier4` text NOT NULL,
  `id_etudiantbts` mediumint(8) UNSIGNED NOT NULL,
  PRIMARY KEY (`id_compositiondossier`,`id_etudiantbts`),
  KEY `id_etudiantbts` (`id_etudiantbts`),
  KEY `id_etudiantcyclepro` (`id_etudiantcyclepro`),
  KEY `id_etudiantgrandeecole` (`id_etudiantgrandeecole`),
  KEY `id_etudiantdba` (`id_etudiantdba`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `conditionadmission`
--

DROP TABLE IF EXISTS `conditionadmission`;
CREATE TABLE IF NOT EXISTS `conditionadmission` (
  `id_condition` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_etudiantbts` mediumint(8) UNSIGNED NOT NULL,
  `id_etudiantcyclepro` mediumint(8) UNSIGNED NOT NULL,
  `id_etudiantgrandeecole` mediumint(8) UNSIGNED NOT NULL,
  `id_etudiantdba` mediumint(8) UNSIGNED NOT NULL,
  `condition1` text NOT NULL,
  `condition2` text NOT NULL,
  `condition3` text NOT NULL,
  `condition4` text NOT NULL,
  PRIMARY KEY (`id_condition`,`id_etudiantbts`),
  KEY `id_etudiantbts` (`id_etudiantbts`),
  KEY `id_etudiantcyclepro` (`id_etudiantcyclepro`),
  KEY `id_etudiantgrandeecole` (`id_etudiantgrandeecole`),
  KEY `id_etudiantdba` (`id_etudiantdba`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `cycle`
--

DROP TABLE IF EXISTS `cycle`;
CREATE TABLE IF NOT EXISTS `cycle` (
  `id_cycle` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom_cycle` varchar(60) NOT NULL,
  PRIMARY KEY (`id_cycle`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cycle`
--

INSERT INTO `cycle` (`id_cycle`, `nom_cycle`) VALUES
(30, 'cycle professionnel'),
(31, 'Brevet de technicien supÃ©rieur(BTS)'),
(32, 'Brevet de technicien supÃ©rieur(BTS)'),
(33, 'Brevet de technicien supÃ©rieur(BTS)'),
(34, 'Brevet de technicien supÃ©rieur(BTS)'),
(35, 'Brevet de technicien supÃ©rieur(BTS)'),
(36, 'Brevet de technicien supÃ©rieur(BTS)'),
(38, 'Brevet de technicien supÃ©rieur(BTS)'),
(39, 'Brevet de technicien supÃ©rieur(BTS)'),
(40, 'Brevet de technicien supÃ©rieur(BTS)'),
(41, 'Brevet de technicien supÃ©rieur(BTS)'),
(42, 'Brevet de technicien supÃ©rieur(BTS)'),
(43, 'Brevet de technicien supÃ©rieur(BTS)'),
(44, 'Brevet de technicien supÃ©rieur(BTS)'),
(45, 'Brevet de technicien supÃ©rieur(BTS)');

-- --------------------------------------------------------

--
-- Structure de la table `diplomeobtenu`
--

DROP TABLE IF EXISTS `diplomeobtenu`;
CREATE TABLE IF NOT EXISTS `diplomeobtenu` (
  `id_diplomeObtenu` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_etudiantbts` mediumint(8) UNSIGNED NOT NULL,
  `id_etudiantcyclepro` mediumint(8) UNSIGNED NOT NULL,
  `id_etudiantgrandeecole` mediumint(8) UNSIGNED NOT NULL,
  `id_etudiantdba` mediumint(8) UNSIGNED NOT NULL,
  `nom_diplome` varchar(60) NOT NULL,
  PRIMARY KEY (`id_diplomeObtenu`,`id_etudiantbts`),
  KEY `id_etudiantbts` (`id_etudiantbts`),
  KEY `id_etudiantcyclepro` (`id_etudiantcyclepro`),
  KEY `id_etudiantgrandeecole` (`id_etudiantgrandeecole`),
  KEY `diplomeobtenu_fk3` (`id_etudiantdba`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `etudiantbts`
--

DROP TABLE IF EXISTS `etudiantbts`;
CREATE TABLE IF NOT EXISTS `etudiantbts` (
  `id_etudiantbts` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(60) NOT NULL,
  `prenom` varchar(60) NOT NULL,
  `date_naissance` date NOT NULL,
  `lieu_naissance` varchar(60) NOT NULL,
  `situation_familial` varchar(60) NOT NULL,
  `sexe` varchar(20) NOT NULL,
  `adresse` varchar(60) NOT NULL,
  `tel_etudiant` int(10) UNSIGNED NOT NULL,
  `quartier` varchar(60) NOT NULL,
  `tel_parent` int(10) UNSIGNED NOT NULL,
  `region_origine` varchar(60) NOT NULL,
  `email` varchar(60) DEFAULT NULL,
  `id_cycle` mediumint(8) UNSIGNED NOT NULL,
  PRIMARY KEY (`id_etudiantbts`,`id_cycle`),
  KEY `id_cycle` (`id_cycle`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiantbts`
--

INSERT INTO `etudiantbts` (`id_etudiantbts`, `nom`, `prenom`, `date_naissance`, `lieu_naissance`, `situation_familial`, `sexe`, `adresse`, `tel_etudiant`, `quartier`, `tel_parent`, `region_origine`, `email`, `id_cycle`) VALUES
(6, 'kamto', 'valentin', '1997-06-02', 'ebolowa', 'marier', 'feminin', 'ngousso237', 689562314, 'eleveur', 656234879, 'ouest', 'kamtovalentin@gmail.com', 30),
(8, 'souffo', 'jonathan', '1997-06-09', 'yaounde', 'celibataire', 'masculin', '56980', 693124557, 'nkoa-bang', 698532415, 'garoua', 'jonathan@gmail.com', 38),
(9, 'souffo', 'jonathan', '1997-06-09', 'yaounde', 'celibataire', 'masculin', '56980', 693124557, 'nkoa-bang', 698532415, 'garoua', 'jonathan@gmail.com', 39),
(10, 'souffo', 'jonathan', '1997-06-09', 'yaounde', 'celibataire', 'masculin', '56980', 693124557, 'nkoa-bang', 698532415, 'garoua', 'jonathan@gmail.com', 40),
(11, 'souffo', 'jonathan', '1997-06-09', 'yaounde', 'celibataire', 'masculin', '56980', 693124557, 'nkoa-bang', 698532415, 'garoua', 'jonathan@gmail.com', 41),
(12, 'julien ', 'kaptue', '1999-07-09', 'yaounde', 'celibataire', 'masculin', 'Avenue kennedy', 698453612, 'omnisport', 697456723, 'Yaounde', 'kengnefranklin98@gmail.com', 42),
(13, 'julien ', 'kaptue', '1999-07-09', 'yaounde', 'celibataire', 'masculin', 'Avenue kennedy', 698453612, 'omnisport', 697456723, 'Yaounde', 'kengnefranklin98@gmail.com', 43),
(14, 'kamdem', 'honorer', '1996-08-09', 'yaounde', 'celibataire', 'masculin', 'Manguier237', 698754324, 'essos', 678905463, 'ouest', 'kengnefranklin98@gmail.com', 44),
(15, 'emvoutou', 'desirer', '2004-05-09', 'yaounde', 'celibataire', 'masculin', 'Avenuekennedy237', 678904532, 'anguissa', 698074345, 'centre', 'kengnefranklin98@gmail.com', 45);

-- --------------------------------------------------------

--
-- Structure de la table `etudiantcyclepro`
--

DROP TABLE IF EXISTS `etudiantcyclepro`;
CREATE TABLE IF NOT EXISTS `etudiantcyclepro` (
  `id_etudiantcyclepro` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_cycle` mediumint(8) UNSIGNED NOT NULL,
  `nometudiant` varchar(60) NOT NULL,
  `prenometudiant` varchar(60) NOT NULL,
  `date_naissance` date NOT NULL,
  `lieu_naissance` varchar(60) NOT NULL,
  `situation_familial` varchar(60) NOT NULL,
  `sexe` char(15) NOT NULL,
  `addresse` varchar(60) NOT NULL,
  `tel_etudiant` int(10) UNSIGNED NOT NULL,
  `quartier` varchar(60) NOT NULL,
  `tel_parent` int(10) UNSIGNED NOT NULL,
  `email` varchar(60) DEFAULT 'pas de mail',
  PRIMARY KEY (`id_etudiantcyclepro`,`id_cycle`),
  KEY `id_cycle` (`id_cycle`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `etudiantdba`
--

DROP TABLE IF EXISTS `etudiantdba`;
CREATE TABLE IF NOT EXISTS `etudiantdba` (
  `id_etudiantdba` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_cycle` mediumint(8) UNSIGNED NOT NULL,
  `nom` varchar(60) NOT NULL,
  `prenom` varchar(60) NOT NULL,
  `date_naissance` date NOT NULL,
  `situation_familial` varchar(100) NOT NULL DEFAULT 'Celibataire',
  `sexe` varchar(20) NOT NULL,
  `adresse` varchar(60) DEFAULT NULL,
  `tel_etudiant` smallint(6) NOT NULL,
  `quartier` varchar(60) NOT NULL,
  `tel_parent` smallint(6) NOT NULL,
  `region_origine` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `ville_naissance` varchar(60) NOT NULL,
  `pays_naissance` varchar(60) NOT NULL,
  `nationalite` varchar(60) NOT NULL DEFAULT 'Camerounaise',
  PRIMARY KEY (`id_etudiantdba`),
  KEY `id_cycle` (`id_cycle`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `etudiantgrandeecole`
--

DROP TABLE IF EXISTS `etudiantgrandeecole`;
CREATE TABLE IF NOT EXISTS `etudiantgrandeecole` (
  `id_etudiantgrandeecole` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_cycle` mediumint(8) UNSIGNED NOT NULL,
  `nom` varchar(60) NOT NULL,
  `prenom` varchar(60) NOT NULL,
  `date_naissance` date NOT NULL,
  `situation_familial` varchar(60) NOT NULL,
  `sexe` char(15) NOT NULL,
  `addresse_postal` varchar(30) DEFAULT NULL,
  `tel_etudiant` mediumint(8) UNSIGNED NOT NULL,
  `quartier` varchar(60) NOT NULL,
  `tel_parent` mediumint(8) UNSIGNED NOT NULL,
  `region_origine` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `ville_naissance` varchar(60) DEFAULT NULL,
  `pays_naissance` varchar(60) DEFAULT NULL,
  `nationalité` varchar(60) NOT NULL,
  PRIMARY KEY (`id_etudiantgrandeecole`),
  KEY `id_cycle` (`id_cycle`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `experienceprofessionnel`
--

DROP TABLE IF EXISTS `experienceprofessionnel`;
CREATE TABLE IF NOT EXISTS `experienceprofessionnel` (
  `id_experiencepro` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_etudiantgrandeecole` mediumint(8) UNSIGNED NOT NULL,
  `id_etudiantdba` mediumint(8) UNSIGNED NOT NULL,
  `nom_entreprise` varchar(60) NOT NULL,
  `fonction_occuper` varchar(60) NOT NULL,
  `type_contrat` varchar(60) NOT NULL,
  `duree_contrat` varchar(10) DEFAULT NULL,
  `description_poste` text NOT NULL,
  PRIMARY KEY (`id_experiencepro`),
  KEY `id_etudiantgrandeecole` (`id_etudiantgrandeecole`),
  KEY `id_etudiantdba` (`id_etudiantdba`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `filierebachelor`
--

DROP TABLE IF EXISTS `filierebachelor`;
CREATE TABLE IF NOT EXISTS `filierebachelor` (
  `id_filierebachelor` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_cycle` mediumint(8) UNSIGNED NOT NULL,
  `nom_filiere` varchar(60) NOT NULL,
  PRIMARY KEY (`id_filierebachelor`),
  KEY `filierebachelor_fk` (`id_cycle`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `filierebts`
--

DROP TABLE IF EXISTS `filierebts`;
CREATE TABLE IF NOT EXISTS `filierebts` (
  `id_filierebts` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_cycle` mediumint(8) UNSIGNED NOT NULL,
  `nom_filierebts` varchar(60) NOT NULL,
  PRIMARY KEY (`id_filierebts`,`id_cycle`),
  KEY `id_cycle` (`id_cycle`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `filierebts`
--

INSERT INTO `filierebts` (`id_filierebts`, `id_cycle`, `nom_filierebts`) VALUES
(26, 30, 'CARRIERES JURIDIQUES'),
(27, 31, 'COMMERCE-VENTE'),
(28, 32, 'COMMERCE-VENTE'),
(29, 33, 'COMMERCE-VENTE'),
(30, 34, 'COMMERCE-VENTE'),
(31, 35, 'COMMERCE-VENTE'),
(32, 36, 'COMMERCE-VENTE'),
(34, 38, 'CARRIERES JURIDIQUES'),
(35, 39, 'CARRIERES JURIDIQUES'),
(36, 40, 'CARRIERES JURIDIQUES'),
(37, 41, 'CARRIERES JURIDIQUES'),
(38, 42, 'GESTION'),
(39, 43, 'GESTION'),
(40, 44, 'GESTION'),
(41, 45, 'GESTION');

-- --------------------------------------------------------

--
-- Structure de la table `filierecyclepro`
--

DROP TABLE IF EXISTS `filierecyclepro`;
CREATE TABLE IF NOT EXISTS `filierecyclepro` (
  `id_filierecyclepro` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_cycle` mediumint(8) UNSIGNED NOT NULL,
  `nom_filiere` varchar(60) NOT NULL,
  PRIMARY KEY (`id_filierecyclepro`),
  KEY `id_cycle` (`id_cycle`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `filieredba`
--

DROP TABLE IF EXISTS `filieredba`;
CREATE TABLE IF NOT EXISTS `filieredba` (
  `id_filieredba` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_cycle` mediumint(8) UNSIGNED NOT NULL,
  `nom_filieredba` varchar(60) NOT NULL,
  PRIMARY KEY (`id_filieredba`),
  KEY `id_cycle` (`id_cycle`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `filieregrandeecole`
--

DROP TABLE IF EXISTS `filieregrandeecole`;
CREATE TABLE IF NOT EXISTS `filieregrandeecole` (
  `id_filieregrandeecole` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_cycle` mediumint(8) UNSIGNED NOT NULL,
  `nom_filiere` varchar(60) NOT NULL,
  PRIMARY KEY (`id_filieregrandeecole`),
  KEY `id_cycle` (`id_cycle`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `formationetudiantbts`
--

DROP TABLE IF EXISTS `formationetudiantbts`;
CREATE TABLE IF NOT EXISTS `formationetudiantbts` (
  `id_formation` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_etudiantbts` mediumint(8) UNSIGNED NOT NULL,
  `annee_obtention` date NOT NULL,
  `diplome_preparer` varchar(250) NOT NULL,
  `pays_origine_diplome` varchar(250) NOT NULL,
  `nom_etablissement` varchar(250) NOT NULL,
  PRIMARY KEY (`id_formation`),
  KEY `fk_etudiantbts_formationbts` (`id_etudiantbts`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formationetudiantbts`
--

INSERT INTO `formationetudiantbts` (`id_formation`, `id_etudiantbts`, `annee_obtention`, `diplome_preparer`, `pays_origine_diplome`, `nom_etablissement`) VALUES
(3, 6, '2005-05-03', 'licence', 'nigeria', 'lycee bilingue'),
(11, 8, '2015-06-05', 'Bac C', 'cameroun', ''),
(12, 8, '2015-06-05', 'Bac C', 'cameroun', ''),
(13, 9, '2015-06-05', 'Bac C', 'cameroun', ''),
(14, 9, '2015-06-05', 'Bac C', 'cameroun', ''),
(15, 10, '2015-06-05', 'Bac C', 'cameroun', ''),
(17, 11, '2015-06-05', 'Bac C', 'cameroun', ''),
(18, 12, '2015-03-09', 'bac c', 'Cameroun', 'lycee bilingue de yaoundÃ©'),
(20, 13, '2015-03-09', 'bac c', 'Cameroun', 'lycee bilingue de yaoundÃ©'),
(21, 14, '2012-03-08', 'Bac C', 'cameroun', 'lycee de domayo'),
(23, 15, '2010-04-07', 'Bac A', 'cameroun', 'lycee d\'elig essono'),
(24, 6, '2010-04-07', 'Bac A', 'cameroun', 'lycee d\'elig essono');

-- --------------------------------------------------------

--
-- Structure de la table `formationetudiantcyclepro`
--

DROP TABLE IF EXISTS `formationetudiantcyclepro`;
CREATE TABLE IF NOT EXISTS `formationetudiantcyclepro` (
  `id_formationcyclepro` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_etudiantbts` mediumint(8) UNSIGNED NOT NULL,
  `annee_obtention` date NOT NULL,
  `diplome_preparer` varchar(250) NOT NULL,
  `pays_origine_diplome` varchar(205) NOT NULL,
  `nom_etablissement` varchar(205) NOT NULL,
  PRIMARY KEY (`id_formationcyclepro`),
  KEY `fk_etudiantbts_formationcyclepro` (`id_etudiantbts`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `formationetudiantgdeecoleetdba`
--

DROP TABLE IF EXISTS `formationetudiantgdeecoleetdba`;
CREATE TABLE IF NOT EXISTS `formationetudiantgdeecoleetdba` (
  `id_formation` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_etudiantgrandeecole` mediumint(8) UNSIGNED NOT NULL,
  `id_etudiantdba` mediumint(8) UNSIGNED NOT NULL,
  `date_obtention` date NOT NULL,
  `diplome_preparer` varchar(100) NOT NULL,
  `specialisation` varchar(100) NOT NULL,
  `nom_etablissement` varchar(100) NOT NULL,
  PRIMARY KEY (`id_formation`),
  KEY `id_etudiantgrandeecole` (`id_etudiantgrandeecole`),
  KEY `id_etudiantgrandeecole_2` (`id_etudiantgrandeecole`),
  KEY `id_etudiantdba` (`id_etudiantdba`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `image1`
--

DROP TABLE IF EXISTS `image1`;
CREATE TABLE IF NOT EXISTS `image1` (
  `id_image1` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_article` mediumint(8) UNSIGNED NOT NULL,
  `nom_image` varchar(60) NOT NULL,
  PRIMARY KEY (`id_image1`),
  KEY `id_article` (`id_article`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `image_bts`
--

DROP TABLE IF EXISTS `image_bts`;
CREATE TABLE IF NOT EXISTS `image_bts` (
  `id_image` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_etudiantbts` mediumint(8) UNSIGNED NOT NULL,
  `path_image` varchar(250) NOT NULL,
  PRIMARY KEY (`id_image`),
  KEY `id_etudiantbts` (`id_etudiantbts`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `image_bts`
--

INSERT INTO `image_bts` (`id_image`, `id_etudiantbts`, `path_image`) VALUES
(1, 10, '08b5d344920e43b5b3b93b47cc90ed0ajpg'),
(2, 11, '970437a1f5f53a05a889df1a2883ca3ejpg'),
(3, 12, '39e9bc109f20458c22c1cff7ecafe9d8jpg'),
(4, 13, '36d1f5d027f6d98ea68151185d88a3e9jpg'),
(5, 14, 'ed21ae8e55af3ebe56eaffe666080a26jpg'),
(6, 15, '78ffa9e22634b8947f73129e265c4487jpg');

-- --------------------------------------------------------

--
-- Structure de la table `mot_cles`
--

DROP TABLE IF EXISTS `mot_cles`;
CREATE TABLE IF NOT EXISTS `mot_cles` (
  `id_motcle` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `motcle` varchar(20) NOT NULL,
  PRIMARY KEY (`id_motcle`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `projetprofessionnel`
--

DROP TABLE IF EXISTS `projetprofessionnel`;
CREATE TABLE IF NOT EXISTS `projetprofessionnel` (
  `id_projetpro` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_etudiantgrandeecole` mediumint(8) UNSIGNED NOT NULL,
  `id_etudiantdba` mediumint(8) UNSIGNED NOT NULL,
  `description_projetpro` text NOT NULL,
  PRIMARY KEY (`id_projetpro`),
  KEY `id_etudiantgrandeecole` (`id_etudiantgrandeecole`),
  KEY `id_etudiantdba` (`id_etudiantdba`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `specialitebachelor`
--

DROP TABLE IF EXISTS `specialitebachelor`;
CREATE TABLE IF NOT EXISTS `specialitebachelor` (
  `id_specialitebachelor` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_filierebachelor` mediumint(8) UNSIGNED NOT NULL,
  `nom_specialite` varchar(60) NOT NULL,
  PRIMARY KEY (`id_specialitebachelor`),
  KEY `specialitebachelor_fk` (`id_filierebachelor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `specialitebts`
--

DROP TABLE IF EXISTS `specialitebts`;
CREATE TABLE IF NOT EXISTS `specialitebts` (
  `id_specialitebts` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_filierebts` mediumint(8) UNSIGNED NOT NULL,
  `nom_specialitebts` varchar(60) NOT NULL,
  PRIMARY KEY (`id_specialitebts`,`id_filierebts`),
  KEY `id_filierebts` (`id_filierebts`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `specialitebts`
--

INSERT INTO `specialitebts` (`id_specialitebts`, `id_filierebts`, `nom_specialitebts`) VALUES
(33, 26, 'DOUANE ET TRANSIT'),
(34, 27, 'BANQUE ET FINANCE'),
(35, 28, 'BANQUE ET FINANCE'),
(36, 29, 'BANQUE ET FINANCE'),
(37, 30, 'BANQUE ET FINANCE'),
(38, 31, 'BANQUE ET FINANCE'),
(39, 32, 'BANQUE ET FINANCE'),
(41, 34, 'GESTION FISCALE'),
(42, 35, 'GESTION FISCALE'),
(43, 36, 'GESTION FISCALE'),
(44, 37, 'GESTION FISCALE'),
(45, 38, 'BANQUE ET FINANCE'),
(46, 39, 'BANQUE ET FINANCE'),
(47, 40, 'GESTION DES RESSOURCES HUMAINES'),
(48, 41, 'GESTION LOGISTIQUE ET TRANSPORT');

-- --------------------------------------------------------

--
-- Structure de la table `specialitecyclepro`
--

DROP TABLE IF EXISTS `specialitecyclepro`;
CREATE TABLE IF NOT EXISTS `specialitecyclepro` (
  `id_specialitecyclepro` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_filierecyclepro` mediumint(8) UNSIGNED NOT NULL,
  `nom_specialitecyclepro` varchar(60) NOT NULL,
  PRIMARY KEY (`id_specialitecyclepro`),
  KEY `id_filierecyclepro` (`id_filierecyclepro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `specialitedba`
--

DROP TABLE IF EXISTS `specialitedba`;
CREATE TABLE IF NOT EXISTS `specialitedba` (
  `id_specialitedba` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_filieredba` mediumint(8) UNSIGNED NOT NULL,
  `nom_specialitedba` varchar(60) NOT NULL,
  PRIMARY KEY (`id_specialitedba`),
  KEY `id_filieredba` (`id_filieredba`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `specialitegrandeecole`
--

DROP TABLE IF EXISTS `specialitegrandeecole`;
CREATE TABLE IF NOT EXISTS `specialitegrandeecole` (
  `id_specialitegrandeecole` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_filieregrandeecole` mediumint(8) UNSIGNED NOT NULL,
  `nom_specialitegrandeecole` varchar(100) NOT NULL,
  PRIMARY KEY (`id_specialitegrandeecole`),
  KEY `id_filieregrandeecole` (`id_filieregrandeecole`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id_users` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `email` varchar(60) NOT NULL,
  `roles` json NOT NULL,
  `pass` varchar(250) NOT NULL,
  PRIMARY KEY (`id_users`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_users`, `username`, `email`, `roles`, `pass`) VALUES
(4, 'rodondo237', 'wabo@gmail.com', '[\"ROLE_USER\"]', '$2y$10$RbEefdL1V5OTo7zHCMV58OoPs1Dy26wnn4EqmDqdHpa.pFKWywRBO'),
(5, 'rika237', 'rika@gmail.com', '[\"ROLE_USER\"]', '$2y$10$4LOu5/3rTuKSZU1b0dQOZOU6yqgHnTQgvEbl5g0A.TuJwYIZQSmQm'),
(6, 'rika237', 'rika@gmail.com', '[\"ROLE_USER\"]', '$2y$10$vDnfZmvUrWX9NwILCmY6Q.typq8fq8GL3XU5oBFUE69D5ATRB.tDK'),
(7, 'STEVE0000', 'kengnefranklin98@gmail.com', '[\"ROLE_ADMIN\"]', '$2y$10$9/AE658JKBqCgsDDcLKsjuhNsvhw8xBn7tjqI54/bKKLa7L/zE6B2'),
(8, 'franki450', 'kengne@gmail.com', '[\"ROLE_USER\"]', '$2y$10$MIX7zUCMEumRj7IRGnNsmuH.n8WqHexSkPcOhP6Bsv0cFWY4oed76'),
(9, 'calvin237', 'calvin@yahoo.fr', '[\"ROLE_USER\"]', '$2y$10$kqgup5KFIbuEebQ42sNKMuMjVf0QFEEf.b4xrGcOaqiYV/6XWmKcK');

-- --------------------------------------------------------

--
-- Structure de la table `videos`
--

DROP TABLE IF EXISTS `videos`;
CREATE TABLE IF NOT EXISTS `videos` (
  `id_videos` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_article` mediumint(8) UNSIGNED NOT NULL,
  `nom_video` varchar(60) NOT NULL,
  PRIMARY KEY (`id_videos`),
  KEY `id_article` (`id_article`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `anneeetude`
--
ALTER TABLE `anneeetude`
  ADD CONSTRAINT `anneeetude_fk` FOREIGN KEY (`id_etudiantcyclepro`) REFERENCES `etudiantcyclepro` (`id_etudiantcyclepro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `anneeetude_fk2` FOREIGN KEY (`id_etudiantgrandeecole`) REFERENCES `etudiantgrandeecole` (`id_etudiantgrandeecole`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `anneeetude_fk3` FOREIGN KEY (`id_etudiantdba`) REFERENCES `etudiantdba` (`id_etudiantdba`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `anneeetude_fk_1` FOREIGN KEY (`id_etudiantbts`) REFERENCES `etudiantbts` (`id_etudiantbts`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_fk` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_fk` FOREIGN KEY (`id_article`) REFERENCES `article` (`id_article`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `competence`
--
ALTER TABLE `competence`
  ADD CONSTRAINT `competence_fk` FOREIGN KEY (`id_etudiantgrandeecole`) REFERENCES `etudiantgrandeecole` (`id_etudiantgrandeecole`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `competence_fk2` FOREIGN KEY (`id_etudiantdba`) REFERENCES `etudiantdba` (`id_etudiantdba`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `compositiondossier`
--
ALTER TABLE `compositiondossier`
  ADD CONSTRAINT `compositiondossier_fk` FOREIGN KEY (`id_etudiantcyclepro`) REFERENCES `etudiantcyclepro` (`id_etudiantcyclepro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compositiondossier_fk1` FOREIGN KEY (`id_etudiantdba`) REFERENCES `etudiantdba` (`id_etudiantdba`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compositiondossier_fk2` FOREIGN KEY (`id_etudiantgrandeecole`) REFERENCES `etudiantgrandeecole` (`id_etudiantgrandeecole`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compositiondossier_fk_1` FOREIGN KEY (`id_etudiantbts`) REFERENCES `etudiantbts` (`id_etudiantbts`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `conditionadmission`
--
ALTER TABLE `conditionadmission`
  ADD CONSTRAINT `condadmission_fk_1` FOREIGN KEY (`id_etudiantbts`) REFERENCES `etudiantbts` (`id_etudiantbts`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `conditionadmission_fk` FOREIGN KEY (`id_etudiantcyclepro`) REFERENCES `etudiantcyclepro` (`id_etudiantcyclepro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `conditionadmission_fk1` FOREIGN KEY (`id_etudiantgrandeecole`) REFERENCES `etudiantgrandeecole` (`id_etudiantgrandeecole`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `conditionadmission_fk3` FOREIGN KEY (`id_etudiantdba`) REFERENCES `etudiantdba` (`id_etudiantdba`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `diplomeobtenu`
--
ALTER TABLE `diplomeobtenu`
  ADD CONSTRAINT `diplomeobtenu_fk` FOREIGN KEY (`id_etudiantcyclepro`) REFERENCES `etudiantcyclepro` (`id_etudiantcyclepro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `diplomeobtenu_fk2` FOREIGN KEY (`id_etudiantgrandeecole`) REFERENCES `etudiantgrandeecole` (`id_etudiantgrandeecole`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `diplomeobtenu_fk3` FOREIGN KEY (`id_etudiantdba`) REFERENCES `etudiantdba` (`id_etudiantdba`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `diplomeobtenu_fk_1` FOREIGN KEY (`id_etudiantbts`) REFERENCES `etudiantbts` (`id_etudiantbts`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `etudiantbts`
--
ALTER TABLE `etudiantbts`
  ADD CONSTRAINT `etudiantbts_fk_1` FOREIGN KEY (`id_cycle`) REFERENCES `cycle` (`id_cycle`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `etudiantcyclepro`
--
ALTER TABLE `etudiantcyclepro`
  ADD CONSTRAINT `etudiantcyclepro_fk_1` FOREIGN KEY (`id_cycle`) REFERENCES `cycle` (`id_cycle`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `etudiantdba`
--
ALTER TABLE `etudiantdba`
  ADD CONSTRAINT `etudiantdba_fk` FOREIGN KEY (`id_cycle`) REFERENCES `cycle` (`id_cycle`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `etudiantgrandeecole`
--
ALTER TABLE `etudiantgrandeecole`
  ADD CONSTRAINT `etudiantgrandeecole_fk` FOREIGN KEY (`id_cycle`) REFERENCES `cycle` (`id_cycle`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `experienceprofessionnel`
--
ALTER TABLE `experienceprofessionnel`
  ADD CONSTRAINT `experienceprofessionnel_fk` FOREIGN KEY (`id_etudiantgrandeecole`) REFERENCES `etudiantgrandeecole` (`id_etudiantgrandeecole`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `experienceprofessionnel_fk2` FOREIGN KEY (`id_etudiantdba`) REFERENCES `etudiantdba` (`id_etudiantdba`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `filierebachelor`
--
ALTER TABLE `filierebachelor`
  ADD CONSTRAINT `filierebachelor_fk` FOREIGN KEY (`id_cycle`) REFERENCES `cycle` (`id_cycle`);

--
-- Contraintes pour la table `filierebts`
--
ALTER TABLE `filierebts`
  ADD CONSTRAINT `filierebts_fk_1` FOREIGN KEY (`id_cycle`) REFERENCES `cycle` (`id_cycle`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `filierecyclepro`
--
ALTER TABLE `filierecyclepro`
  ADD CONSTRAINT `filierecyclepro_fk` FOREIGN KEY (`id_cycle`) REFERENCES `cycle` (`id_cycle`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `filieredba`
--
ALTER TABLE `filieredba`
  ADD CONSTRAINT `filieredba_fk` FOREIGN KEY (`id_cycle`) REFERENCES `cycle` (`id_cycle`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `filieregrandeecole`
--
ALTER TABLE `filieregrandeecole`
  ADD CONSTRAINT `filieregrandeecole_fk` FOREIGN KEY (`id_cycle`) REFERENCES `cycle` (`id_cycle`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `formationetudiantbts`
--
ALTER TABLE `formationetudiantbts`
  ADD CONSTRAINT `fk_etudiantbts_formationbts` FOREIGN KEY (`id_etudiantbts`) REFERENCES `etudiantbts` (`id_etudiantbts`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `formationetudiantcyclepro`
--
ALTER TABLE `formationetudiantcyclepro`
  ADD CONSTRAINT `fk_etudiantbts_formationcyclepro` FOREIGN KEY (`id_etudiantbts`) REFERENCES `etudiantbts` (`id_etudiantbts`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `formationetudiantgdeecoleetdba`
--
ALTER TABLE `formationetudiantgdeecoleetdba`
  ADD CONSTRAINT `formationetudiantgdeecoleetdba_fk` FOREIGN KEY (`id_etudiantgrandeecole`) REFERENCES `etudiantgrandeecole` (`id_etudiantgrandeecole`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `formationetudiantgdeecoleetdba_fk2` FOREIGN KEY (`id_etudiantdba`) REFERENCES `etudiantdba` (`id_etudiantdba`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `image1`
--
ALTER TABLE `image1`
  ADD CONSTRAINT `image1_fk` FOREIGN KEY (`id_article`) REFERENCES `article` (`id_article`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `image_bts`
--
ALTER TABLE `image_bts`
  ADD CONSTRAINT `image_bts_ibfk_1` FOREIGN KEY (`id_etudiantbts`) REFERENCES `etudiantbts` (`id_etudiantbts`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `projetprofessionnel`
--
ALTER TABLE `projetprofessionnel`
  ADD CONSTRAINT `projetprofessionnel_fk` FOREIGN KEY (`id_etudiantgrandeecole`) REFERENCES `etudiantgrandeecole` (`id_etudiantgrandeecole`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `projetprofessionnel_fk2` FOREIGN KEY (`id_etudiantdba`) REFERENCES `etudiantdba` (`id_etudiantdba`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `specialitebachelor`
--
ALTER TABLE `specialitebachelor`
  ADD CONSTRAINT `specialitebachelor_fk` FOREIGN KEY (`id_filierebachelor`) REFERENCES `filierebachelor` (`id_filierebachelor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `specialitebts`
--
ALTER TABLE `specialitebts`
  ADD CONSTRAINT `specialitebts_fk_1` FOREIGN KEY (`id_filierebts`) REFERENCES `filierebts` (`id_filierebts`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `specialitecyclepro`
--
ALTER TABLE `specialitecyclepro`
  ADD CONSTRAINT `specialitecyclepro_fk` FOREIGN KEY (`id_filierecyclepro`) REFERENCES `filierecyclepro` (`id_filierecyclepro`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `specialitedba`
--
ALTER TABLE `specialitedba`
  ADD CONSTRAINT `specialitedba_fk` FOREIGN KEY (`id_filieredba`) REFERENCES `filieredba` (`id_filieredba`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `specialitegrandeecole`
--
ALTER TABLE `specialitegrandeecole`
  ADD CONSTRAINT `specialitegrandeecole_fk` FOREIGN KEY (`id_filieregrandeecole`) REFERENCES `filieregrandeecole` (`id_filieregrandeecole`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_fk` FOREIGN KEY (`id_article`) REFERENCES `article` (`id_article`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
