-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 23 déc. 2023 à 10:03
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mysite`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `prenom`, `email`, `subject`, `message`) VALUES
(1, 'fze', 'ezr', 'zer@ertrrz', 'aezrrz', 'aezfreerzrefzerzr'),
(2, 'rtfghj', 'retyjk', 'ertyu@zretyj.com', 'ertyhjk', 'aeeafarerrzarr'),
(3, 'zrty', 'zertfyg', 'zert@aezrtzr.com', 'aezret', 'zefreaezfgzegyuzegyuegyzrhzr'),
(4, 'zrty', 'zertfyg', 'zert@aezrtzr.com', 'aezret', 'zefreaezfgzegyuzegyuegyzrhzr'),
(5, 'zrty', 'zertfyg', 'zert@aezrtzr.com', 'aezret', 'zefreaezfgzegyuzegyuegyzrhzr'),
(6, 'zrty', 'zertfyg', 'zert@aezrtzr.com', 'aezret', 'zefreaezfgzegyuzegyuegyzrhzr'),
(7, 'zrty', 'zertfyg', 'zert@aezrtzr.com', 'aezret', 'zefreaezfgzegyuzegyuegyzrhzr'),
(8, 'zrty', 'zertfyg', 'zert@aezrtzr.com', 'aezret', 'zefreaezfgzegyuzegyuegyzrhzr'),
(9, 'zrty', 'zertfyg', 'zert@aezrtzr.com', 'aezret', 'zefreaezfgzegyuzegyuegyzrhzr'),
(10, 'zrty', 'zertfyg', 'zert@aezrtzr.com', 'aezret', 'zefreaezfgzegyuzegyuegyzrhzr'),
(11, 'zrty', 'zertfyg', 'zert@aezrtzr.com', 'aezret', 'zefreaezfgzegyuzegyuegyzrhzr'),
(12, 'zrty', 'zertfyg', 'zert@aezrtzr.com', 'aezret', 'zefreaezfgzegyuzegyuegyzrhzr'),
(13, 'zrty', 'zertfyg', 'zert@aezrtzr.com', 'aezret', 'zefreaezfgzegyuzegyuegyzrhzr'),
(14, 'zrty', 'zertfyg', 'zert@aezrtzr.com', 'aezret', 'zefreaezfgzegyuzegyuegyzrhzr'),
(15, 'zrty', 'zertfyg', 'zert@aezrtzr.com', 'aezret', 'zefreaezfgzegyuzegyuegyzrhzr'),
(16, 'zrty', 'zertfyg', 'zert@aezrtzr.com', 'aezret', 'zefreaezfgzegyuzegyuegyzrhzr'),
(17, 'zrty', 'zertfyg', 'zert@aezrtzr.com', 'aezret', 'zefreaezfgzegyuzegyuegyzrhzr'),
(18, 'zrty', 'zertfyg', 'zert@aezrtzr.com', 'aezret', 'zefreaezfgzegyuzegyuegyzrhzr'),
(19, 'zrty', 'zertfyg', 'zert@aezrtzr.com', 'aezret', 'zefreaezfgzegyuzegyuegyzrhzr'),
(20, 'zrty', 'zertfyg', 'zert@aezrtzr.com', 'aezret', 'zefreaezfgzegyuzegyuegyzrhzr'),
(21, 'zrty', 'zertfyg', 'zert@aezrtzr.com', 'aezret', 'zefreaezfgzegyuzegyuegyzrhzr');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
