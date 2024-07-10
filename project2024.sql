-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 06 juil. 2024 à 01:24
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `project`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `intitule` varchar(255) NOT NULL,
  `date_obtention` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

CREATE TABLE `annonces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `module_type` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `document_path` varchar(255) DEFAULT NULL,
  `formateur_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `annonces`
--

INSERT INTO `annonces` (`id`, `title`, `Description`, `module_type`, `category`, `content`, `document_path`, `formateur_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'test', '                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio aut quibusdam dolorum dignissimos sit nam error ducimus libero iste corrupti, quod illo consectetur. Reiciendis ad ipsam sed recusandae et quo.', 'Pratiques', 'travaux_diriges', NULL, 'documents/LTVBV07CXjWaVhvlTAz34R6kwvYK6GKSSltcE9wt.pdf', 'walid', '2024-07-05 09:46:14', '2024-07-05 09:46:14', NULL),
(2, 'test2', '                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio aut quibusdam dolorum dignissimos sit nam error ducimus libero iste corrupti, quod illo consectetur. Reiciendis ad ipsam sed recusandae et quo.', 'Pratiques', 'Cours', NULL, 'documents/GiBDAAxWX9XLFxzbCkRtiusM1IL9rSnWG5LarWbL.jpg', 'yessine', '2024-07-05 09:52:00', '2024-07-05 09:52:00', NULL),
(3, 'test3', '                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio aut quibusdam dolorum dignissimos sit nam error ducimus libero iste corrupti, quod illo consectetur. Reiciendis ad ipsam sed recusandae et quo.\n', 'Pratiques', 'travaux_diriges', NULL, 'documents/i8ApiMUD4LzytdVFuszvbKrOivEPH3R8LY5fVES9.jpg', 'safa', '2024-07-05 10:07:06', '2024-07-05 10:07:06', NULL),
(4, 'test4', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio aut quibusdam dolorum dignissimos sit nam error ducimus libero iste corrupti, quod illo consectetur. Reiciendis ad ipsam sed recusandae et quo.', 'Pratiques', 'Planification,Analyse_de_Pratiques_Professionnelle', NULL, 'documents/eAR0ThM28oqYXw4KnrOIiSTPKUxxUeoMSGCjw6Za.pdf', 'yessine', '2024-07-05 11:12:35', '2024-07-05 11:12:35', NULL),
(5, 'informatique test', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio aut quibusdam dolorum dignissimos sit nam error ducimus libero iste corrupti, quod illo consectetur. Reiciendis ad ipsam sed recusandae et quo.', 'Théoriques', 'Didactique | MSP', NULL, 'documents/qbJlRgRUUS3x0MrzmSgw1zB6jlnoNILHQY9zInmv.pdf', 'salim', '2024-07-05 18:08:17', '2024-07-05 18:08:17', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `annonce_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `content`, `user_name`, `user_role`, `annonce_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'parfait', 'yessine', 'admin', 0, '2024-07-05 12:37:43', '2024-07-05 12:37:43', NULL),
(3, 'f', 'safa', 'Formateur', 2, '2024-07-05 12:50:44', '2024-07-05 12:50:44', NULL),
(4, 'test', 'safa', 'Formateur', 2, '2024-07-05 12:52:17', '2024-07-05 12:52:17', NULL),
(5, 'no', 'safa', 'Formateur', 2, '2024-07-05 12:52:30', '2024-07-05 12:52:30', NULL),
(6, 'bonne travaille', 'salim', 'Formateur', 5, '2024-07-05 18:11:05', '2024-07-05 18:11:05', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `diplomes`
--

CREATE TABLE `diplomes` (
  `id` int(11) NOT NULL,
  `intitule` varchar(255) NOT NULL,
  `date_obtention` date NOT NULL,
  `formateur_id` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `diplomes`
--

INSERT INTO `diplomes` (`id`, `intitule`, `date_obtention`, `formateur_id`, `updated_at`, `deleted_at`, `created_at`) VALUES
(1, 'faculter', '2024-07-13', 1, '2024-07-03 10:40:54', NULL, '2024-07-03 10:40:54'),
(2, 'Faculté Polydisciplinaire de Khouribga ', '2024-07-13', 3, '2024-07-03 10:41:57', NULL, '2024-07-03 10:41:57'),
(3, 'faculter', '2024-01-24', 4, '2024-07-03 13:09:06', NULL, '2024-07-03 13:09:06'),
(4, 'ofppt test', '2017-01-19', 4, '2024-07-03 13:09:41', NULL, '2024-07-03 13:09:41');

-- --------------------------------------------------------

--
-- Structure de la table `etablissements`
--

CREATE TABLE `etablissements` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `formateur_id` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `etablissements`
--

INSERT INTO `etablissements` (`id`, `nom`, `adresse`, `formateur_id`, `updated_at`, `deleted_at`, `created_at`) VALUES
(1, 'Faculté Polydisciplinaire de Khouribga ', 'khouribga rue 40', 3, '2024-07-03 11:56:46', NULL, '2024-07-03 11:56:46'),
(2, 'test', 'khouribga rue 40', 4, '2024-07-03 13:10:44', NULL, '2024-07-03 13:10:44');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `listes`
--

CREATE TABLE `listes` (
  `id` int(11) NOT NULL,
  `jours` varchar(255) NOT NULL DEFAULT 'Aucun(e)',
  `a` varchar(255) NOT NULL DEFAULT 'Aucun(e)',
  `b` varchar(255) NOT NULL DEFAULT 'Aucun(e)',
  `c` varchar(255) NOT NULL DEFAULT 'Aucun(e)',
  `d` varchar(255) NOT NULL DEFAULT 'Aucun(e)',
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `listes`
--

INSERT INTO `listes` (`id`, `jours`, `a`, `b`, `c`, `d`, `created_at`, `deleted_at`, `updated_at`) VALUES
(1, 'lundi', 'Gestion des apprentissages - 2', 'Gestion des apprentissages - 2', 'Activités de MSP', 'Activités de MSP', NULL, NULL, '2024-07-05 14:32:08'),
(2, 'Mardi', 'Développement des application', 'Développement des application', 'Evaluation des apprentissages', '-', NULL, NULL, '2024-07-05 14:37:08'),
(3, 'Mercredi', 'Réseaux informatique & Cloud', 'Réseaux informatique & Cloud', 'Recherche Pédaqogique', 'Recherche Pédaqogique', NULL, NULL, '2024-07-05 14:35:18'),
(4, 'jeudi', 'APP', 'Vie Scolaire', 'Statistiques', 'Statistiques', NULL, NULL, '2024-07-05 14:36:11'),
(5, 'vendredi', 'Activités de MSP', 'Activités de MSP', '-', '-', NULL, NULL, '2024-07-05 14:36:49');

-- --------------------------------------------------------

--
-- Structure de la table `logins`
--

CREATE TABLE `logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '0001_01_01_000000_create_users_table', 1),
(10, '0001_01_01_000001_create_cache_table', 1),
(11, '0001_01_01_000002_create_jobs_table', 1),
(12, '2024_06_30_131849_create_logins_table', 1),
(13, '2024_06_30_131910_create_registres_table', 1),
(14, '2024_06_30_132000_create_profils_table', 1),
(15, '2024_06_30_152301_create_listes_table', 1),
(16, '2024_07_01_121657_create_admins_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `profils`
--

CREATE TABLE `profils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `CIN` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `role` varchar(255) NOT NULL,
  `matiere` varchar(255) DEFAULT 'Aucun(e)',
  `diplome` varchar(255) NOT NULL DEFAULT 'Aucun(e)',
  `city` varchar(255) NOT NULL DEFAULT 'Aucun(e)',
  `Bio` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `profils`
--

INSERT INTO `profils` (`id`, `FirstName`, `LastName`, `CIN`, `email`, `password`, `phone`, `role`, `matiere`, `diplome`, `city`, `Bio`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'yessine', 'elmiri', 'aaaa', 'yassir@gmail.com', '$2y$12$9nHl8N5jh0B6Zangmj5Wces4odDHWVn3oFuaU7FIdKAfnUR7ZdBK.', NULL, 'admin', 'Aucun(e)', 'Aucun(e)', 'Aucun(e)', NULL, 'images/bJAgrwuVHEinanhLCVJRblTsuelYsdv5cspFL8RI.jpg', '2024-07-02 15:46:58', '2024-07-05 07:46:02', NULL),
(2, 'walid', 'miri', '0123aaa', 'Stagiaires@gmail.com', '$2y$12$OArl/QpE9MvBCkf6M7ZFIOdohEqV2LUGStC.d6V6Rq.3ctaZyZtBu', NULL, 'Stagiaire', 'Aucun(e)', 'Aucun(e)', 'Aucun(e)', NULL, 'images/DNoDeid46wnJmgBxsGEoqkRXp30G7Q4vUdgJmmhX.jpg', '2024-07-02 15:59:49', '2024-07-05 07:45:14', NULL),
(3, 'salim', 'salimi', 'Da1234', 'formateur@gmail.com', '$2y$12$qn4yGcuC3HGHkUcYZYxrk.Hp0mgXQWC/xU0Bq/LmZ.qYX/K.b2FGO', 65177888, 'Formateur', 'Aucun(e)', 'Aucun(e)', 'Aucun(e)', NULL, 'images/jNjM7dUcgAYwwkjSeP5lY2qVfAGRZcMylgSSm7p2.png', '2024-07-02 16:07:07', '2024-07-05 07:28:38', NULL),
(4, 'yassine', 'maro', '125555', 'test1@gmail.com', '$2y$12$CFVaNfVMzb6gvCGCj7tj/.ssYVhMFphTJ0OcUo6.lnoWtEaZoAdXC', 612441246, 'Formateur', 'Aucun(e)', 'Aucun(e)', 'casablanca', NULL, NULL, '2024-07-03 13:06:31', '2024-07-03 13:07:56', NULL),
(5, 'safa', 'miri', 'safa123', 'safa@gmail.com', '$2y$12$Z545U5RKFgPuVNdp3X3d4.RWbLiRL59/CnxHn.mBepLxXl3uhDzGW', NULL, 'Formateur', 'Aucun(e)', 'Aucun(e)', 'Aucun(e)', NULL, NULL, '2024-07-05 08:51:10', '2024-07-05 08:51:10', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `reclamations`
--

CREATE TABLE `reclamations` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'No Valid',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `stagiaire_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reclamations`
--

INSERT INTO `reclamations` (`id`, `type`, `description`, `status`, `created_at`, `updated_at`, `deleted_at`, `stagiaire_id`) VALUES
(1, 'dacia', 'toyota', 'validé', '2024-07-04 11:02:27', '2024-07-04 13:52:19', NULL, 'yassine@gmail.com'),
(2, 'toyota', 'tomobila', 'validé', '2024-07-04 11:05:21', '2024-07-05 18:14:26', NULL, 'test@gmail.com'),
(3, 'dacia', '2020', 'No Valid', '2024-07-04 11:08:12', '2024-07-04 11:08:12', NULL, 'stagier@gmail.com'),
(4, '000000000', '000000000', 'validé', '2024-07-04 16:01:04', '2024-07-04 16:01:49', NULL, 'Stagiaires@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `registres`
--

CREATE TABLE `registres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('BeVfq1T9oKlc9eqoRn0kHWHv7l6EvO4vUQblI2jK', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSGtPTkN3MEEyUk1WN1NsbTh0eVdIQXVBTmZJVXI2RmhMdFdyTzJGaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1720214258);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `annonces`
--
ALTER TABLE `annonces`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Index pour la table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `diplomes`
--
ALTER TABLE `diplomes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etablissements`
--
ALTER TABLE `etablissements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Index pour la table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `listes`
--
ALTER TABLE `listes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reclamations`
--
ALTER TABLE `reclamations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `registres`
--
ALTER TABLE `registres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `annonces`
--
ALTER TABLE `annonces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `diplomes`
--
ALTER TABLE `diplomes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `etablissements`
--
ALTER TABLE `etablissements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `listes`
--
ALTER TABLE `listes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `profils`
--
ALTER TABLE `profils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `reclamations`
--
ALTER TABLE `reclamations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `registres`
--
ALTER TABLE `registres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
