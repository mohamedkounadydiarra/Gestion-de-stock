-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 07 jan. 2023 à 01:17
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_stock`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `identifiant` varchar(50) NOT NULL,
  `passwords` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`idAdmin`, `identifiant`, `passwords`) VALUES
(1, 'mohamed', '292959f6c7ab4f8b0761469ac1f11fc73f43b306');

-- --------------------------------------------------------

--
-- Structure de la table `approvisionnement`
--

CREATE TABLE `approvisionnement` (
  `idApprovisionnement` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `idProduit` int(11) NOT NULL,
  `dateApprovisionnement` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `approvisionnement`
--

INSERT INTO `approvisionnement` (`idApprovisionnement`, `quantite`, `idProduit`, `dateApprovisionnement`) VALUES
(9, 20, 18, '2022-09-06 17:42:02'),
(10, 50, 19, '2022-09-10 21:30:01'),
(11, 50, 19, '2022-10-02 13:24:45'),
(12, 3, 21, '2022-11-08 23:17:32'),
(13, 20, 22, '2022-11-23 18:18:21'),
(14, 50, 23, '2022-12-02 23:52:17');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `idCategorie` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`idCategorie`, `nom`) VALUES
(12, 'plastique');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `idProduit` int(11) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `quantite` int(11) NOT NULL,
  `stockMin` int(11) NOT NULL,
  `idCategorie` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`idProduit`, `designation`, `quantite`, `stockMin`, `idCategorie`) VALUES
(22, 'wbscasque', 20, 20, 12),
(23, 'biscuit', 60, 10, 12);

-- --------------------------------------------------------

--
-- Structure de la table `sortie`
--

CREATE TABLE `sortie` (
  `idSortie` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `types` varchar(55) NOT NULL,
  `dateSortie` timestamp NOT NULL DEFAULT current_timestamp(),
  `prixUnitaire` int(11) NOT NULL,
  `idProduit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `sortie`
--

INSERT INTO `sortie` (`idSortie`, `quantite`, `types`, `dateSortie`, `prixUnitaire`, `idProduit`) VALUES
(17, 23, 'orange money', '2022-09-06 17:41:33', 3000, 18),
(18, 2, 'wave', '2022-09-09 13:56:52', 2000, 18),
(19, 2, 'cach', '2022-09-09 18:02:18', 1000, 18),
(20, 10, 'moove', '2022-09-10 12:02:51', 1500, 19),
(21, 20, 'orange money', '2022-09-10 21:32:23', 1000, 19),
(22, 10, 'cach', '2022-10-04 19:37:53', 300, 20),
(23, 101, 'orange money', '2022-11-05 10:51:08', 400, 20),
(24, 50, 'orange money', '2022-11-08 23:15:19', 1000, 21),
(25, 100, 'orange money', '2022-11-23 18:15:58', 10000, 22),
(26, 900, 'cach', '2022-11-23 18:16:27', 11000, 22),
(27, 20, 'cach', '2022-12-02 23:50:43', 1000, 23),
(28, 70, 'orange money', '2022-12-02 23:51:42', 1000, 23);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Index pour la table `approvisionnement`
--
ALTER TABLE `approvisionnement`
  ADD PRIMARY KEY (`idApprovisionnement`),
  ADD KEY `idProduit` (`idProduit`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idCategorie`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`idProduit`),
  ADD KEY `idCategorie` (`idCategorie`);

--
-- Index pour la table `sortie`
--
ALTER TABLE `sortie`
  ADD PRIMARY KEY (`idSortie`),
  ADD KEY `idProduit` (`idProduit`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `approvisionnement`
--
ALTER TABLE `approvisionnement`
  MODIFY `idApprovisionnement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `idCategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `idProduit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `sortie`
--
ALTER TABLE `sortie`
  MODIFY `idSortie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
