-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  mar. 14 mai 2019 à 11:16
-- Version du serveur :  5.7.26-0ubuntu0.18.04.1
-- Version de PHP :  7.2.17-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `laravel_mvc`
--

-- --------------------------------------------------------

--
-- Structure de la table `ad`
--

CREATE TABLE `ad` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(5) NOT NULL,
  `id_user` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ad`
--

INSERT INTO `ad` (`id`, `title`, `description`, `price`, `id_user`, `updated_at`, `created_at`) VALUES
(64, 'fz6 s2', 'Tres jolie excelent', 20, 6, '2019-03-29 11:42:31', '2019-03-29 11:42:31'),
(65, 'maison f3 :)', 'jolie maison avec jardin', 34, 5, '2019-04-01 09:04:52', '2019-04-01 09:04:52'),
(66, 'voici ma premiere annonce', 'je ne sais pas quoi vendre', 45, 5, '2019-04-01 09:02:17', '2019-04-01 07:02:17');

-- --------------------------------------------------------

--
-- Structure de la table `file_pictures`
--

CREATE TABLE `file_pictures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_ad` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `file_pictures`
--

INSERT INTO `file_pictures` (`id`, `name`, `size`, `id_ad`, `created_at`, `updated_at`) VALUES
(44, 'Capture d’écran de 2019-02-13 10-14-27.png', '1527856', 64, '2019-03-29 09:09:06', '2019-03-29 09:09:06'),
(45, 'Capture d’écran de 2019-02-13 10-14-21.png', '1490111', 64, '2019-03-29 09:09:06', '2019-03-29 09:09:06'),
(46, 'Capture d’écran de 2019-02-02 15-07-39.png', '179810', 65, '2019-03-29 09:55:42', '2019-03-29 09:55:42'),
(47, 'Capture d’écran de 2019-02-13 10-14-21.png', '1490111', 65, '2019-04-01 06:17:50', '2019-04-01 06:17:50'),
(48, 'Capture d’écran de 2019-02-13 10-14-17.png', '1595037', 65, '2019-04-01 06:17:50', '2019-04-01 06:17:50'),
(49, 'Capture d’écran de 2019-02-13 10-13-44.png', '317597', 65, '2019-04-01 06:17:50', '2019-04-01 06:17:50'),
(50, 'Capture d’écran de 2019-02-15 14-40-24.png', '499265', 66, '2019-04-01 07:02:17', '2019-04-01 07:02:17'),
(51, 'Capture d’écran de 2019-02-13 14-17-26.png', '521552', 66, '2019-04-01 07:02:17', '2019-04-01 07:02:17'),
(52, 'IMG_1426.jpg', '203174', 70, '2019-04-01 10:53:09', '2019-04-01 10:53:09');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `sujet` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `id_recipient` varchar(255) NOT NULL,
  `id_sendeur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_03_27_103659_create_file_pictures_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('yamin.91@hotmail.fr', '$2y$10$YQ5o/2LxjLE073MG4kUKfui8jtWlhmiZ4U9KEvTqQ6kYKm4IOwKJ.', '2019-03-26 14:17:01'),
('yamsdmc@gmail.com', '$2y$10$MtOt8Vnarki81EC9EDoDvuoOC/ls4L8/6CKNHIXYhvfDeABDbeUZ.', '2019-03-27 15:12:46');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `lastname`, `email`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'cfg', '$2y$10$6jNmxH3QOzdfp.kp2ECyle1J.IQA/9G.E2vTnfE2sEqghDcCkYdVq', 'fyuwfu', 'iwfgiwef', 'theo@theo.com', NULL, NULL, '2019-03-25 13:03:51', '2019-03-25 13:03:51'),
(3, 'armin', '$2y$10$E78vFNnOKiqAzMbY586OaOed1lMLEG2/TVS8.2icZFYS8Heyk0ahm', 'yacine', 'proute', 'gherbi.yamin.y@gmail.com', NULL, NULL, '2019-03-26 10:25:09', '2019-03-26 10:25:09'),
(5, 'yamin', '$2y$10$XgksU1l.XTfk.Td09Xlt2eGjxR2qwfWpsr3/6UNNjh/01naL9Y1pO', 'yams', 'dmc', 'yamin.91@hotmail.fr', '2019-03-26 10:30:05', NULL, '2019-03-26 10:29:40', '2019-04-01 07:05:13'),
(7, 'rue', '$2y$10$YzLjwY2zkOMCbzzVGqWuou8AHVBNwcj5QLn7WhkCfMigi5YMZ3eXq', 'hkb', 'jb lk', 'yyy@live.fr', NULL, NULL, '2019-03-31 16:54:03', '2019-03-31 16:54:03'),
(10, 'theo', '$2y$10$MREELKzcBvGpMUtFGSxhOug4m4aSqN5L8/sFcqFpMJvVMJ4Z4XY3S', 'proute', 'caca', 'theo@liveeeee.fr', '2019-04-01 10:52:11', NULL, '2019-04-01 10:49:51', '2019-04-01 10:52:33');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `file_pictures`
--
ALTER TABLE `file_pictures`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ad`
--
ALTER TABLE `ad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT pour la table `file_pictures`
--
ALTER TABLE `file_pictures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
