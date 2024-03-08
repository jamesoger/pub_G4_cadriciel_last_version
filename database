-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 16 juin 2023 à 15:54
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pub_g4`
--
CREATE DATABASE IF NOT EXISTS `pub_g4` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pub_g4`;

-- --------------------------------------------------------

--
-- Structure de la table `administrateurs`
--

CREATE TABLE `administrateurs` (
  `id` int(11) NOT NULL,
  `prenom` varchar(150) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `courriel` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `droit_acces` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `administrateurs`
--

INSERT INTO `administrateurs` (`id`, `prenom`, `nom`, `courriel`, `mot_de_passe`, `droit_acces`) VALUES
(2, 'gaston', 'leclient', 'gastonleclient@pubg4.ca', '$2y$10$eKbge43lYzECx0Adiqh5k.vUKbPa3ytNsUlfnxQwU4Uz/IQVwXeuO', 1),
(3, 'linda', 'bergerac', 'linda@bergerac.ca', '$2y$10$BESymuA6F2B9qy95EBvkt.WgqZa96kDeMa4H/IC1X7sAV7QWYDK4K', 0),
(4, 'justin', 'morisson', 'justinmorriss@yahho.ca', '$2y$10$dOv8DUigH4X5y.8qeP3srO97WO.aM7LN3BYFGPfRE2xAPR306MunC', 0);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`) VALUES
(1, 'Entrée'),
(2, 'Repas'),
(3, 'Dessert');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `courriel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `courriel`) VALUES
(2, 'linda', 'linda@hotmail.com'),
(3, 'roger', 'roger@yahoo.ca'),
(4, 'morisson', 'jamesoger@hotmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `mot_clef`
--

CREATE TABLE `mot_clef` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `mot_clef`
--

INSERT INTO `mot_clef` (`id`, `nom`) VALUES
(1, 'Nos créations'),
(4, 'À partager'),
(5, 'Burger'),
(6, 'Salade'),
(8, 'Tartare'),
(9, 'Chocolat'),
(10, 'Caramel');

-- --------------------------------------------------------

--
-- Structure de la table `plats`
--

CREATE TABLE `plats` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `prix` float NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `categorie_id` int(11) NOT NULL,
  `mot_clef_id` int(11) DEFAULT NULL,
  `regime_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `plats`
--

INSERT INTO `plats` (`id`, `nom`, `description`, `prix`, `image`, `categorie_id`, `mot_clef_id`, `regime_id`) VALUES
(1, 'Salade du jour', 'Fermentum lacinia lorem amet sit. Nunc et ipsum ut nisl ultricies vestibulum sit amet quis nisi. Fusce dignissim magna eu ante tincidunt consectetur.', 10.99, 'uploads/salade.png', 1, 1, NULL),
(2, 'Potage du moment', 'Fermentum lacinia lorem amet sit. Nunc et ipsum ut nisl ultricies vestibulum sit amet quis nisi. Fusce dignissim magna eu ante tincidunt consectetur.', 8.99, 'uploads/potage.png', 1, 1, NULL),
(3, 'Ailes de lapin', 'Ut interdum viverra lacinia. Pellentesque ac nunc a nulla rutrum dictum ac ac diam. Cras vel justo ligula.  Proin ut ex et elit dapibus tempus vitae vitae magna. Nam a arcu sed ante efficitur semper. ', 16.49, 'uploads/ailes_lapin.png', 1, NULL, 1),
(4, 'Calamar', 'Proin ut ex et elit dapibus tempus vitae vitae magna. Nam a arcu sed ante efficitur semper. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 16.99, 'uploads/calamar.png', 1, NULL, 2),
(5, 'Nachos', 'Nunc et ipsum ut nisl ultricies fermentum lacinia lorem amet sit. Nunc et ipsum ut nisl ultricies vestibulum sit amet quis nisi. Fusce dignissim magna eu ante tincidunt consectetur.', 18.99, 'uploads/nachos3.png', 1, 4, NULL),
(6, 'Poutine', 'Morbi tincidunt fermentum lacinia. Nunc et ipsum ut nisl ultricies vestibulum sit amet quis nisi. Fusce dignissim magna eu ante tincidunt consectetur.', 14.99, 'uploads/poutine.png', 1, 1, NULL),
(7, 'Burger double classique avec frites', 'Deux galettes de bœuf, cheddar, bacon, tomate, laitue romaine, ognon rouge, sauce maison, servi avec frites.', 15.99, 'uploads/burger_classique.png', 2, 5, NULL),
(8, 'Filets de poulet avec frites', 'Filets de poulet pané avec un mélange d’épices maison, servis avec frites.', 13.99, 'uploads/ailes_poulet.png', 2, NULL, 1),
(9, 'Burger au poulet', ' Morbi tincidunt fermentum lacinia. Nunc et ipsum ut nisl ultricies vestibulum sit amet quis nisi.', 15.99, 'uploads/burger_poulet.png', 2, 5, NULL),
(10, 'Salade grecque', 'Donec at nisi tortor. Interdum et malesuada fames ac ante ipsum primis in faucibus. In vitae rutrum arcu. ', 18.99, 'uploads/salade_grecque.png', 2, 6, NULL),
(11, 'Salade végétarienne', 'Donec et neque quis purus cursus mattis eu pulvinar velit. Praesent commodo rutrum nisl, at ultrices sem iaculis tincidunt. Nunc molestie accumsan porta. ', 14.99, 'uploads/salade_repas.png', 2, NULL, 3),
(12, 'Tartare de bœuf', 'Proin faucibus quam lorem, non condimentum turpis blandit non. ', 24.99, 'uploads/tartare.png', 2, 8, NULL),
(13, 'Tartare de légume', 'Etiam ut tincidunt lectus. Curabitur gravida est in finibus ultricies. Vestibulum volutpat erat vel libero ultrices placerat. ', 22.99, 'uploads/tartare_vege.png', 2, 8, NULL),
(14, 'Côtes levées (Ribs)', 'Etiam dictum purus justo, at mattis justo bibendum in. In aliquam elementum enim, quis pretium purus efficitur ac. Curabitur in pretium leo.', 19.99, 'uploads/ribs.png', 2, NULL, 1),
(15, 'Un bon p’tit steak', 'Praesent aliquam a dolor eu rutrum. Sed at efficitur enim. Morbi quis placerat risus. Aenean ipsum massa, hendrerit eu molestie sit amet, mollis quis ante.  ', 14.99, 'uploads/steak.png', 2, NULL, 1),
(16, 'Brownie', 'Vestibulum vel ex dolor. Maecenas et turpis nibh. Aliquam in imperdiet tortor. Interdum et malesuada fames ac ante ipsum primis in faucibus. ', 7.99, 'uploads/brownie.png', 3, 9, NULL),
(17, 'Cupcake style ferrero', 'Suspendisse id fringilla turpis. Aenean eleifend vulputate lacus, a pharetra metus. Sed eget pharetra sem. Proin tristique fringilla urna id pharetra. Vivamus sed pellentesque orci.', 8.99, 'uploads/cupcake.png', 3, 9, NULL),
(18, 'Gâteau au fromage et caramel', 'Proin tristique fringilla urna id pharetra. Vivamus sed pellentesque orci.  ', 10.99, 'uploads/gateau_caramel.png', 3, 10, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `regime`
--

CREATE TABLE `regime` (
  `id` int(11) NOT NULL,
  `nom` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `regime`
--

INSERT INTO `regime` (`id`, `nom`) VALUES
(1, 'Viande'),
(2, 'Poisson'),
(3, 'Végé');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateurs`
--
ALTER TABLE `administrateurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mot_clef`
--
ALTER TABLE `mot_clef`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `plats`
--
ALTER TABLE `plats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorie_id` (`categorie_id`),
  ADD KEY `mot_clef_id` (`mot_clef_id`),
  ADD KEY `regime_id` (`regime_id`);

--
-- Index pour la table `regime`
--
ALTER TABLE `regime`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateurs`
--
ALTER TABLE `administrateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `mot_clef`
--
ALTER TABLE `mot_clef`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `plats`
--
ALTER TABLE `plats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT pour la table `regime`
--
ALTER TABLE `regime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `plats`
--
ALTER TABLE `plats`
  ADD CONSTRAINT `plats_ibfk_1` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `plats_ibfk_2` FOREIGN KEY (`mot_clef_id`) REFERENCES `mot_clef` (`id`),
  ADD CONSTRAINT `plats_ibfk_3` FOREIGN KEY (`regime_id`) REFERENCES `regime` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
