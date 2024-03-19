-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 19 mars 2024 à 02:04
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jobinho`
--

-- --------------------------------------------------------

--
-- Structure de la table `Annonces`
--

CREATE TABLE `Annonces` (
  `idAnnonce` bigint(11) UNSIGNED NOT NULL,
  `NomPost` varchar(50) NOT NULL,
  `Image` text NOT NULL,
  `Localisation` varchar(50) NOT NULL,
  `StatutTime` varchar(50) NOT NULL,
  `Salaire` varchar(50) NOT NULL,
  `DescriptionPost` text NOT NULL,
  `ResponsabilitePost1` text NOT NULL,
  `ResponsabilitePost2` text NOT NULL,
  `ResponsabilitePost3` text NOT NULL,
  `ResponsabilitePost4` text NOT NULL,
  `QualificationPost1` text NOT NULL,
  `QualificationPost2` text NOT NULL,
  `QualificationPost3` text NOT NULL,
  `QualificationPost4` text NOT NULL,
  `EntrepriseDetail` text NOT NULL,
  `DatePublication` date NOT NULL,
  `DateLine` date NOT NULL,
  `idCategorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `Annonces`
--

INSERT INTO `Annonces` (`idAnnonce`, `NomPost`, `Image`, `Localisation`, `StatutTime`, `Salaire`, `DescriptionPost`, `ResponsabilitePost1`, `ResponsabilitePost2`, `ResponsabilitePost3`, `ResponsabilitePost4`, `QualificationPost1`, `QualificationPost2`, `QualificationPost3`, `QualificationPost4`, `EntrepriseDetail`, `DatePublication`, `DateLine`, `idCategorie`) VALUES
(1, 'Responsable Marketing', 'img/com-logo-2.jpg', 'Maroc, Casablanca', 'À temps plein', ' $123 - $456', 'En tant que responsable marketing, vous serez responsable de la mise en œuvre et de la gestion des stratégies marketing de notre entreprise. Votre rôle consistera à développer des campagnes efficaces, à analyser les performances, et à collaborer avec différentes équipes pour atteindre les objectifs fixés. Rejoignez notre équipe dynamique et contribuez à la croissance de notre entreprise.', 'Concevoir et mettre en œuvre des campagnes marketing', 'Analyser les performances des campagnes et ajuster les stratégies en conséquence', 'Collaborer avec les équipes internes pour assurer la cohérence de la marque', 'Gérer les projets marketing de A à Z', 'Diplôme universitaire en marketing, communication ou domaine connexe', 'Expérience significative dans le domaine du marketing', 'Excellentes compétences en communication et en gestion de projet', 'Capacité à travailler de manière autonome et en équipe', 'Notre entreprise, est un leader sur le marché. Nous sommes déterminés à offrir des produits/services de haute qualité et à maintenir notre position de leader grâce à une équipe talentueuse et dévouée. Rejoignez-nous pour faire partie de notre succès continu.\r\n\r\n\r\n\r\n\r\n\r\n', '2024-02-01', '2024-03-21', 1),
(2, 'Ingénieur Logiciel', 'img/com-logo-1.jpg', 'Maroc, Settat', 'À temps partiel', '$123 - $456', 'En tant qu\'ingénieur logiciel, vous serez responsable du développement et de la maintenance de logiciels innovants. Vous travaillerez dans un environnement dynamique et collaboratif, contribuant à la conception et à la mise en œuvre de solutions logicielles. Votre rôle impliquera la résolution de problèmes, le développement de nouvelles fonctionnalités et la collaboration avec une équipe multidisciplinaire.', 'Concevoir et développer des solutions logicielles robustes', 'Collaborer avec l\'équipe pour définir les exigences et les spécifications du logiciel', 'Assurer la maintenance et les mises à jour continues des applications existantes', 'Participer à la résolution de problèmes techniques et à l\'optimisation des performances', 'Diplôme en informatique, génie logiciel ou domaine connexe', 'Expérience pratique dans le développement de logiciels', 'Connaissance approfondie des langages de programmation tels que Java, Python ou C++', 'Capacité à travailler de manière autonome et en équipe', 'Notre entreprise est un leader mondial dans le domaine des technologies de l\'information, offrant des solutions innovantes pour répondre aux défis complexes du monde numérique. Nous valorisons la diversité, l\'innovation et l\'excellence, offrant un environnement de travail stimulant et propice à la croissance professionnelle. Rejoignez-nous pour faire partie d\'une équipe passionnée qui façonne l\'avenir de la technologie.', '2024-02-11', '2024-05-10', 5),
(3, 'Product Designer', 'img/com-logo-3.jpg', 'Morocco, Mohammédia', 'À temps plein', ' $123 - $456', 'En tant que Designer Produit, vous serez chargé(e) de créer et de concevoir des produits innovants et conviviaux. Votre rôle implique une collaboration avec des équipes interfonctionnelles pour assurer l\'intégration harmonieuse du design dans le processus de développement du produit. Vous utiliserez votre créativité et vos compétences techniques pour fournir des expériences utilisateur de haute qualité.', 'Développer et mettre en œuvre des solutions de design créatives pour nos produits.', 'Collaborer avec les chefs de produit et les développeurs pour comprendre les besoins et les exigences des utilisateurs.', 'Créer des wireframes, des prototypes et des maquettes de design pour communiquer des idées de design.', 'Effectuer des recherches sur les utilisateurs et des tests d\'utilisabilité pour recueillir des retours en vue d\'améliorations continues.', 'Diplôme universitaire en design de produits, design graphique ou dans un domaine connexe.\r\n', 'Expérience avérée en tant que designer de produits avec un portfolio solide présentant des travaux antérieurs.', 'Maîtrise des outils de conception tels qu\'Adobe Creative Suite, Sketch ou Figma.', 'Compréhension approfondie des principes de conception centrée sur l\'utilisateur.', 'Notre entreprise est dédiée à la création de solutions innovantes qui améliorent l\'expérience utilisateur. Nous croyons en la promotion d\'un environnement de travail collaboratif et créatif où chaque membre de l\'équipe contribue au succès de nos produits. Rejoignez-nous pour façonner l\'avenir du design et de la technologie.', '2024-02-13', '2024-02-24', 8),
(4, 'Directeur(trice) de la Création', 'img/com-logo-4.jpg', 'Maroc, Marrakech', 'À temps plein', ' $123 - $456', 'En tant que Directeur(trice) de la Création, vous serez responsable de la création et de la conception de produits innovants et conviviaux. Votre rôle implique une collaboration avec des équipes interfonctionnelles pour assurer l\'intégration harmonieuse du design dans le processus de développement du produit. Vous utiliserez votre créativité et vos compétences techniques pour offrir des expériences utilisateur de haute qualité.\r\n\r\n', 'Développer et mettre en œuvre des solutions de design créatives pour nos produits.', 'Collaborer avec les chefs de produit et les développeurs pour comprendre les besoins et les exigences des utilisateurs.', 'Créer des wireframes, des prototypes et des maquettes de design pour communiquer des idées de design.', 'Effectuer des recherches sur les utilisateurs et des tests d\'utilisabilité pour recueillir des retours en vue d\'améliorations continues.', 'Diplôme universitaire en design de produits, design graphique ou dans un domaine connexe.', 'Expérience avérée en tant que designer de produits avec un portfolio solide présentant des travaux antérieurs.', 'Maîtrise des outils de conception tels qu\'Adobe Creative Suite, Sketch ou Figma.', 'Compréhension approfondie des principes de conception centrée sur l\'utilisateur.', 'Notre entreprise est dédiée à la création de solutions innovantes qui améliorent l\'expérience utilisateur. Nous croyons en la promotion d\'un environnement de travail collaboratif et créatif où chaque membre de l\'équipe contribue au succès de nos produits. Rejoignez-nous pour façonner l\'avenir du design et de la technologie.', '2024-04-02', '2024-07-12', 4),
(5, ' Responsable des Ressources Humaines', 'img/com-logo-5.jpg', 'Maroc, Tanger', 'À temps partiel', 'À discuter', 'En tant que Responsable des Ressources Humaines, vous serez chargé(e) de superviser et de gérer les activités liées aux ressources humaines au sein de l\'entreprise. Votre rôle implique une collaboration avec les différentes équipes pour assurer une gestion efficace du personnel et favoriser un environnement de travail positif.', 'Superviser les processus de recrutement, d\'intégration et de gestion des talents.\r\n', 'Gérer les relations avec les employés, résoudre les conflits et promouvoir un environnement de travail collaboratif.\r\n', 'Coordonner les activités de formation et de développement professionnel.', 'Assurer la conformité avec les réglementations du travail et les politiques internes de l\'entreprise.', 'Diplôme universitaire en Ressources Humaines, Gestion des Affaires, ou domaine connexe.', 'Expérience avérée en gestion des ressources humaines.', 'Connaissance approfondie des lois du travail et des meilleures pratiques en matière de RH.', 'Excellentes compétences en communication et en résolution de problèmes.', 'Notre entreprise est dédiée à la création de solutions innovantes qui améliorent l\'expérience utilisateur. Nous croyons en la promotion d\'un environnement de travail collaboratif et créatif où chaque membre de l\'équipe contribue au succès de nos produits. Rejoignez-nous pour façonner l\'avenir des ressources humaines et de la technologie.\r\n\r\n\r\n\r\n\r\n\r\n', '2024-02-24', '2024-05-23', 3);

-- --------------------------------------------------------

--
-- Structure de la table `Candidat`
--

CREATE TABLE `Candidat` (
  `idCandidat` bigint(11) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  `NiveauEtude` varchar(50) DEFAULT NULL,
  `Age` int(10) DEFAULT NULL,
  `Tel` varchar(10) DEFAULT NULL,
  `Ville` varchar(50) DEFAULT NULL,
  `ZIPCode` varchar(50) DEFAULT NULL,
  `Poste` varchar(50) DEFAULT NULL,
  `DateDispo` date DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `CV` varchar(50) DEFAULT NULL,
  `Apropos` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `Candidat`
--

INSERT INTO `Candidat` (`idCandidat`, `user_id`, `Prenom`, `NiveauEtude`, `Age`, `Tel`, `Ville`, `ZIPCode`, `Poste`, `DateDispo`, `Status`, `CV`, `Apropos`) VALUES
(1, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `Categories`
--

CREATE TABLE `Categories` (
  `idCategorie` int(11) NOT NULL,
  `NomCategorie` varchar(50) NOT NULL,
  `IconCategorie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `Categories`
--

INSERT INTO `Categories` (`idCategorie`, `NomCategorie`, `IconCategorie`) VALUES
(1, ' Marketing', 'fa fa-3x fa-mail-bulk text-primary mb-4'),
(2, 'Service Client', 'fa fa-3x fa-headset text-primary mb-4'),
(3, 'Ressource Humaine', 'fa fa-3x fa-user-tie text-primary mb-4'),
(4, 'Gestion De Projet', 'fa fa-3x fa-tasks text-primary mb-4'),
(5, 'Business Development', 'fa fa-3x fa-chart-line text-primary mb-4'),
(6, 'Ventes & Communication', 'fa fa-3x fa-hands-helping text-primary mb-4'),
(7, 'Enseignement & Éducation', 'fa fa-3x fa-book-reader text-primary mb-4'),
(8, 'Design & Création', 'fa fa-3x fa-drafting-compass text-primary mb-4');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `postulation`
--

CREATE TABLE `postulation` (
  `idCandidat` bigint(11) UNSIGNED DEFAULT NULL,
  `idAnnonce` bigint(11) UNSIGNED DEFAULT NULL,
  `Nom` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Website` varchar(255) DEFAULT NULL,
  `CV` varchar(255) DEFAULT NULL,
  `LettreMotivation` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Recruteur`
--

CREATE TABLE `Recruteur` (
  `idRecruteur` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `NomEntrprise` varchar(50) DEFAULT NULL,
  `Prénom` varchar(50) DEFAULT NULL,
  `Localisation` varchar(50) DEFAULT NULL,
  `NumeroTel` varchar(50) DEFAULT NULL,
  `TelPerso` varchar(50) DEFAULT NULL,
  `SiteEntreprise` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `Recruteur`
--

INSERT INTO `Recruteur` (`idRecruteur`, `user_id`, `NomEntrprise`, `Prénom`, `Localisation`, `NumeroTel`, `TelPerso`, `SiteEntreprise`) VALUES
(1, 19, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` enum('candidat','recruteur') NOT NULL DEFAULT 'candidat',
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(18, 'candidat', 'candidat@gmail.com', NULL, 'candidat', '$2y$12$FZOjCuCoB62PYtBnaSEes.ESe/9gqwMKOmuFHKENbpV5tMgvouiNe', NULL, '2024-03-02 12:45:50', '2024-03-02 12:45:50'),
(19, 'recruteur', 'recruteur@gmail.com', NULL, 'recruteur', '$2y$12$QoRKjURh0wc4MkLP3lfpOO16julc9FR3cQBHtaRjeRyslLmo1nXUK', NULL, '2024-03-02 12:55:07', '2024-03-02 12:55:07');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Annonces`
--
ALTER TABLE `Annonces`
  ADD PRIMARY KEY (`idAnnonce`),
  ADD KEY `idCategorie` (`idCategorie`);

--
-- Index pour la table `Candidat`
--
ALTER TABLE `Candidat`
  ADD PRIMARY KEY (`idCandidat`),
  ADD KEY `id` (`user_id`);

--
-- Index pour la table `Categories`
--
ALTER TABLE `Categories`
  ADD PRIMARY KEY (`idCategorie`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `postulation`
--
ALTER TABLE `postulation`
  ADD KEY `idCandidat` (`idCandidat`),
  ADD KEY `idAnnonce` (`idAnnonce`);

--
-- Index pour la table `Recruteur`
--
ALTER TABLE `Recruteur`
  ADD PRIMARY KEY (`idRecruteur`),
  ADD KEY `id` (`user_id`);

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
-- AUTO_INCREMENT pour la table `Annonces`
--
ALTER TABLE `Annonces`
  MODIFY `idAnnonce` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `Candidat`
--
ALTER TABLE `Candidat`
  MODIFY `idCandidat` bigint(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `Categories`
--
ALTER TABLE `Categories`
  MODIFY `idCategorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `Recruteur`
--
ALTER TABLE `Recruteur`
  MODIFY `idRecruteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Annonces`
--
ALTER TABLE `Annonces`
  ADD CONSTRAINT `annonces_ibfk_1` FOREIGN KEY (`idCategorie`) REFERENCES `Categories` (`idCategorie`);

--
-- Contraintes pour la table `Candidat`
--
ALTER TABLE `Candidat`
  ADD CONSTRAINT `candidat_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `postulation`
--
ALTER TABLE `postulation`
  ADD CONSTRAINT `postulation_ibfk_1` FOREIGN KEY (`idAnnonce`) REFERENCES `Annonces` (`idAnnonce`),
  ADD CONSTRAINT `postulation_idcandidat_foreign` FOREIGN KEY (`idCandidat`) REFERENCES `Candidat` (`idCandidat`) ON DELETE CASCADE;

--
-- Contraintes pour la table `Recruteur`
--
ALTER TABLE `Recruteur`
  ADD CONSTRAINT `recruteur_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
