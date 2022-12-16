-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 16 déc. 2022 à 14:39
-- Version du serveur : 5.7.36
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `caniblabla79`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `message_id` bigint(20) UNSIGNED NOT NULL,
  `contenu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tags` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `commentaires_message_id_foreign` (`message_id`),
  KEY `commentaires_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `message_id`, `contenu`, `image`, `user_id`, `tags`, `created_at`, `updated_at`) VALUES
(1, 9, 'Dolorem ea nobis quia et unde fuga nostrum dolores sunt iure hic fugit temporibus ex eaque nostrum sed quis.', 'default_user.jpg', 18, 'id', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(2, 7, 'In animi est consectetur sint dolores beatae iusto pariatur earum.', 'default_user.jpg', 3, 'eos', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(3, 10, 'Aliquam omnis facilis quis quos ex eligendi at labore vero ducimus repellendus eius.', 'default_user.jpg', 12, 'dignissimos', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(4, 8, 'Sit officiis dolor aut necessitatibus voluptas blanditiis incidunt repellendus occaecati voluptas ut molestiae.', 'default_user.jpg', 20, 'provident', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(5, 10, 'Consequatur doloremque est vitae commodi quaerat eaque vel eaque qui ipsam facere quo et aut qui voluptatem.', 'default_user.jpg', 12, 'eligendi', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(6, 10, 'Qui provident asperiores odit consequatur culpa non exercitationem sit et accusantium.', 'default_user.jpg', 11, 'facere', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(7, 3, 'Ea id incidunt quia ab neque minus ullam magni animi amet maiores.', 'default_user.jpg', 4, 'sint', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(8, 10, 'Qui autem aut laborum vitae sint qui saepe voluptates quia harum eligendi officiis tenetur.', 'default_user.jpg', 20, 'dolorum', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(9, 9, 'Ducimus architecto unde sunt id consequuntur quasi neque voluptatibus impedit qui in rerum debitis et porro voluptatem magnam possimus velit.', 'default_user.jpg', 13, 'perspiciatis', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(10, 9, 'Beatae omnis rerum quia sapiente perspiciatis eveniet voluptas et ipsum nostrum ullam nihil aut minus fuga sed sed consectetur.', 'default_user.jpg', 1, 'perspiciatis', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(11, 1, 'Veniam et inventore nihil est et eum reiciendis pariatur et facilis sint sint sit occaecati iure et.', 'default_user.jpg', 19, 'maiores', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(12, 3, 'Suscipit et et ea ipsam placeat cum consequatur distinctio repellat placeat accusantium aut quidem beatae veniam adipisci.', 'default_user.jpg', 14, 'facere', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(13, 1, 'Ipsum quidem nihil officia accusamus aliquam accusamus autem odio vel nihil alias voluptatem minus quaerat.', 'default_user.jpg', 8, 'velit', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(14, 8, 'Quae voluptatem sit aut temporibus vel ea quo animi voluptates.', 'default_user.jpg', 5, 'alias', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(15, 4, 'Facilis aperiam maxime et et quisquam accusamus repudiandae quis soluta minima dolores corrupti ab quis doloremque aliquam.', 'default_user.jpg', 8, 'iste', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(16, 5, 'Error sequi nemo inventore dolor beatae doloremque non rerum optio autem dolore dicta exercitationem reiciendis ipsum eum laudantium atque ratione.', 'default_user.jpg', 3, 'asperiores', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(17, 5, 'Quis adipisci et veniam recusandae illum aliquam omnis consequatur ab ut sed praesentium aliquid ea.', 'default_user.jpg', 15, 'itaque', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(18, 2, 'Porro fuga dolore fugiat adipisci ducimus excepturi accusantium qui nesciunt consectetur corrupti dolorem amet voluptas.', 'default_user.jpg', 5, 'reprehenderit', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(19, 4, 'Doloribus voluptas consequatur quia earum aut ut totam at qui qui et vero aut laboriosam.', 'default_user.jpg', 7, 'assumenda', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(20, 9, 'Quia officia aspernatur in laborum quia mollitia dolores odit ut rerum asperiores iusto ex voluptatum exercitationem.', 'default_user.jpg', 6, 'sapiente', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(21, 21, 'TEST MESSAGE PERSO', '1671196934.png', 22, 'TEST MESSAGE PERSO', '2022-12-16 12:22:14', '2022-12-16 12:22:14');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `contenu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `messages_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `contenu`, `user_id`, `image`, `tags`, `created_at`, `updated_at`) VALUES
(1, 'Quia non suscipit et eveniet in numquam fugit aut quia est temporibus corrupti cum quis repellat suscipit officia libero eveniet deserunt repellendus beatae optio quia alias culpa neque nihil aliquid quod rem quis maiores voluptatem sit dicta veritatis porro.', 8, 'default_user.jpg', 'rerum', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(2, 'Quam in eligendi quia iure error ab rerum adipisci veniam suscipit ut dignissimos praesentium saepe est enim officiis in sit voluptatem necessitatibus eum ut error corporis minus officiis amet quo est recusandae nam illo et nisi sunt corrupti et et sint et vel.', 1, 'default_user.jpg', 'TEST TEST', '2022-12-16 10:25:02', '2022-12-16 12:20:06'),
(3, 'Velit sunt vitae sit assumenda facere numquam reiciendis sunt libero nobis quos eos et praesentium quaerat et est voluptatibus quisquam a ullam eligendi voluptas quia autem magnam neque deleniti illum animi.', 17, 'default_user.jpg', 'aperiam', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(4, 'Magni ut tempore blanditiis quibusdam delectus vel ut at velit dolor sit fugit molestias aut aut omnis et et voluptatibus maiores et accusantium ut expedita quis accusamus est provident eum voluptates.', 7, 'default_user.jpg', 'molestiae', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(5, 'Cum ipsam cum eum id unde rerum ut rerum ut repellendus quibusdam dolorum suscipit omnis numquam ducimus explicabo temporibus quia tempora modi nulla mollitia vero fuga et iusto.', 4, 'default_user.jpg', 'voluptatem', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(6, 'Quibusdam ut ipsa amet deserunt veritatis totam voluptatum voluptas nihil voluptates rerum tempore impedit et nisi sapiente id et quidem quia vitae dolorem.', 1, 'default_user.jpg', 'odit', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(7, 'Nesciunt officia omnis sint sint temporibus impedit illum aspernatur beatae repellendus saepe corporis blanditiis quisquam sapiente voluptas at suscipit commodi saepe sint in pariatur in illo delectus quia distinctio occaecati repellat et.', 20, 'default_user.jpg', 'ex', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(8, 'Minus laudantium animi aperiam delectus beatae dolor mollitia voluptate ut dolorem exercitationem possimus qui vitae laboriosam voluptas exercitationem sed commodi harum neque sapiente qui.', 8, 'default_user.jpg', 'nisi', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(9, 'Unde veniam consequatur autem dicta deleniti sequi autem voluptas ut enim quis et est qui officia et recusandae accusantium incidunt nesciunt nihil fuga quia sit rerum quia commodi qui quaerat molestiae est veniam eaque.', 17, 'default_user.jpg', 'et', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(10, 'Sit id tempora qui commodi non quisquam voluptatibus dolores quibusdam est deleniti dolor dolor iusto libero nulla id laborum eveniet deleniti recusandae ducimus tempora accusantium fuga dignissimos dolorem et.', 19, 'default_user.jpg', 'eius', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(11, 'Nesciunt distinctio aut id temporibus at illum ut atque nihil libero et aut illo enim ipsa natus reiciendis odio aut et nam et quas ipsum fugit nisi molestias distinctio iusto dolorum porro velit corrupti architecto.', 14, 'default_user.jpg', 'aut', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(12, 'Est dolores culpa sit quasi et quae porro minima doloribus nam voluptas sint corrupti ut est cumque molestiae aliquid.', 13, 'default_user.jpg', 'quia', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(13, 'Nobis dolorum placeat sapiente ratione aliquam consequuntur aliquid delectus molestias est tenetur ut id facilis aut expedita minus laboriosam ipsa assumenda sapiente.', 14, 'default_user.jpg', 'aut', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(14, 'Ipsam doloremque qui est libero odit cum deserunt suscipit fugit atque iste tenetur quam ex perferendis provident consequatur vero dignissimos perspiciatis exercitationem quis odio voluptatem perferendis reprehenderit cumque non culpa corrupti qui qui voluptatem aliquam expedita dolore dignissimos.', 21, 'default_user.jpg', 'nostrum', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(15, 'Error nulla et possimus quod non sunt non modi et et quibusdam deleniti eos et laborum placeat qui dolores tenetur aliquid quia deleniti voluptatem voluptates sint aspernatur molestiae.', 13, 'default_user.jpg', 'unde', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(16, 'Rerum blanditiis voluptatem dicta placeat sed consequuntur in odit veritatis labore veniam ut ducimus occaecati voluptatum voluptatum qui in esse aspernatur corporis fugiat nemo quae blanditiis ut autem illum aut.', 4, 'default_user.jpg', 'unde', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(17, 'Nostrum vero et vitae repellendus accusantium nobis delectus est aut enim architecto vero earum sunt aliquam nesciunt perspiciatis a amet ut cupiditate aut necessitatibus.', 17, 'default_user.jpg', 'et', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(18, 'Aut voluptatibus sunt aliquam qui doloremque odit impedit voluptatem assumenda dignissimos quibusdam debitis ut enim quibusdam repellat cum quidem consequatur et dolor occaecati ducimus.', 1, 'default_user.jpg', 'doloremque', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(19, 'At quo et et numquam cumque et ab qui sequi facere deserunt qui quia natus harum delectus asperiores qui est qui fugiat et sit rerum exercitationem voluptatibus qui architecto nesciunt illo rerum amet natus delectus hic.', 10, 'default_user.jpg', 'modi', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(20, 'Velit possimus omnis architecto voluptatum minima ut cupiditate inventore quisquam cupiditate est at molestiae rerum nam repellat quo ipsum necessitatibus eum saepe hic libero iure qui aut.', 15, 'default_user.jpg', 'et', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(21, 'TEST MESSAGE PERSO', 22, '1671196924.jpg', 'TEST MESSAGE PERSO', '2022-12-16 12:22:04', '2022-12-16 12:22:04');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '1-create_roles_table', 1),
(2, '2-create_users_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '3-create_message_table', 1),
(5, '4-create_commentaires_table', 1),
(6, 'create_failed_jobs_table', 1),
(7, 'create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'user', '2022-12-16 10:25:01', '2022-12-16 10:25:01'),
(2, 'admin', '2022-12-16 10:25:01', '2022-12-16 10:25:01');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pseudo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_pseudo_unique` (`pseudo`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `prenom`, `nom`, `pseudo`, `image`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin', 'default_user.jpg', 'admin@admin.fr', '2022-12-16 10:25:01', '$2y$10$nrIfCL2oj0M1y5xhKvCyCuopJP.onihyQTL9KruQnx50bCYToa1vK', 2, 'LMuyH4aEmEipypGHxFpcMrvAvfLVgoQtO5vZvDikKgtlvBbAnddbtT9NiPKm', '2022-12-16 10:25:01', '2022-12-16 12:03:05'),
(2, 'Adolf', 'Luther Barrows', 'vwill', 'default_user.jpg', 'habernathy@example.org', '2022-12-16 10:25:01', '$2y$10$wH0OQY2MZC9I7hUYnhHOSuT6oRQJfxjrnrkYBTG3Gqon2A5JMseri', 2, 'CPqj5B5vPp', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(3, 'Kasandra', 'Timmy Mann', 'sadye.rolfson', 'default_user.jpg', 'iohara@example.net', '2022-12-16 10:25:01', '$2y$10$J1xtTpyqrddmTpgGxsewTutTtfieyUNxl0TYUPRKmpEgGJYKNjWe6', 2, 'vC2hOSLyM0', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(4, 'Ara', 'Amparo Mraz', 'kling.omer', 'default_user.jpg', 'alexandra55@example.com', '2022-12-16 10:25:01', '$2y$10$rPnrVDHCm/h8ml6A25NLle31ROzyGMyg4kjctxV7EW8Xfr5ZSxQXS', 2, 'zmu4diRHW9', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(5, 'Noemi', 'Ethel Botsford', 'powlowski.mollie', 'default_user.jpg', 'daugherty.herminio@example.net', '2022-12-16 10:25:01', '$2y$10$FovvBxCdXkJSk96UCmabj.hvP4y0hX2rMyK.43f7Ru8ayTyU7O/JS', 2, 'xcDJoEaQTD', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(6, 'Marcelino', 'Prof. Sunny Orn DDS', 'qlubowitz', 'default_user.jpg', 'adurgan@example.net', '2022-12-16 10:25:02', '$2y$10$FmExclZdabBGEGCZXa1L0Ol33hTey8tYgyzXd7GNeDvZzPEmK3ATe', 2, 'FYXwRYKpHO', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(7, 'Devyn', 'Aidan Watsica', 'shaylee.rowe', 'default_user.jpg', 'maxime44@example.net', '2022-12-16 10:25:02', '$2y$10$e6JqG//97sUGOMH6c4U.5uGmq6MQhDO037RTkSXq4APhFMd0ra7W.', 2, 'SuBtJxYcE8', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(8, 'Garland', 'Mr. Einar Schultz', 'barton.margarett', 'default_user.jpg', 'bbergnaum@example.net', '2022-12-16 10:25:02', '$2y$10$yCPVaRJC3cQQQ61dgq1SE.jehBqGO0oHf5EhfItCfigRSPZb4WQku', 2, 'mh5zVNb09p', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(9, 'Winifred', 'Ms. Jailyn Bernhard', 'buckridge.jess', 'default_user.jpg', 'jaylan.reinger@example.net', '2022-12-16 10:25:02', '$2y$10$KRA3w8sdLa2ksaXlTbFS/.WvJPGYPYYmfrILDW3CPI6R3CIg7XVoe', 2, 'jMIElHX9Dq', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(10, 'Ramona', 'Angie Kuvalis', 'naomi25', 'default_user.jpg', 'alanna64@example.net', '2022-12-16 10:25:02', '$2y$10$7jqOAHWLyypPUo2CLdLgWuFMrw2Rf3.w342hBfTnTC1tF0IMoVxZ2', 1, '2sP9yPfUwK', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(11, 'Crystal', 'Karina Bergnaum', 'alf.rowe', 'default_user.jpg', 'uheaney@example.org', '2022-12-16 10:25:02', '$2y$10$5ao5g55EY4RWhzGQMWjWgeL9eR2uSwf8cTIcO/RPvSsVO38e3lKDK', 2, 'g3YIDextsz', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(12, 'Karen', 'Mr. Armand Wilkinson MD', 'daniela63', 'default_user.jpg', 'franz98@example.com', '2022-12-16 10:25:02', '$2y$10$x9z3cc9DyAQZsrCbk/7jSOP8KdTZPPU0jjqPDWfem95wa.9XZFkQ2', 2, '0bKMNYL6AZ', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(13, 'Lincoln', 'Garnett Ryan DVM', 'hhagenes', 'default_user.jpg', 'waters.joyce@example.net', '2022-12-16 10:25:02', '$2y$10$VJ.FCwHJcNhA4xWueAf5WOVVWgug14S2qQAsDTN0IHXs6x0hOdV1S', 1, 'lD44iAPfuF', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(14, 'Jermaine', 'Katheryn Rogahn', 'zsmitham', 'default_user.jpg', 'stokes.herman@example.org', '2022-12-16 10:25:02', '$2y$10$Y0OT32MzCS7l4ia2BqG18eFBKgHTHFqz5rMGNUPfUQbnfzt5GtoZq', 2, 'MVoKBGB7t6', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(15, 'Donnell', 'Aimee Dooley', 'ehamill', 'default_user.jpg', 'haylie.labadie@example.net', '2022-12-16 10:25:02', '$2y$10$6HYMJ7Cj2yYzqLrx/q150.6hER9OU0Gp9X4FuyzsUeH1j8Qz0vFFi', 2, '2jexYDQLre', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(16, 'Gertrude', 'Dr. Alanna Toy DVM', 'tiana94', 'default_user.jpg', 'hane.morris@example.com', '2022-12-16 10:25:02', '$2y$10$08OSzajN0VaBn.DPuCUVuOjW6gBIjTGFXZhZ7HRFEFc7DsN0lJ6vy', 1, '20pjDelhD5', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(17, 'Jamar', 'Prof. Nedra Kuhn', 'jeremie63', 'default_user.jpg', 'brain.torp@example.org', '2022-12-16 10:25:02', '$2y$10$DIN1iD8On.3C2UZVDoIJ0etBxtyST9S1MfDJ/zjo.0zczrxgLOWwy', 1, '8HByavAuMy', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(18, 'Caden', 'Dortha Kozey MD', 'abbott.hal', 'default_user.jpg', 'kautzer.geovanni@example.com', '2022-12-16 10:25:02', '$2y$10$hShndXqW7KoT4xQ3OSNu.eSarwHeQgD2.V3/0a/6p6jlPHFGTuJV.', 1, '9kdchAuEkb', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(19, 'Berry', 'Dr. Dale Stoltenberg', 'parker.hillary', 'default_user.jpg', 'rodrigo90@example.net', '2022-12-16 10:25:02', '$2y$10$JlEg2yra7ewv9fn.pPp.F.iXRmc37YxWS6SmAS77L/.5VbFrqnzN.', 2, 'MfGQ7EhRph', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(20, 'Evan', 'Sid Heaney', 'annie56', 'default_user.jpg', 'jacobi.giovani@example.org', '2022-12-16 10:25:02', '$2y$10$hj4jXTFzulMSB1y0ZBuFy.aTAw.IZ7got6auXXIQugItP0Ss7NWWa', 2, 'hUvBoIeBgr', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(21, 'Julianne', 'Winifred Walsh', 'loy.pouros', 'default_user.jpg', 'jewel.kutch@example.net', '2022-12-16 10:25:02', '$2y$10$7Ce9pbhw4zbsvcKZrXXNXOjmT5v3xxqdppOqd2hKcwS5R.Vk7ze5W', 2, 'a9uB11SDQ7', '2022-12-16 10:25:02', '2022-12-16 10:25:02'),
(22, 'Emmanuelle', 'Boinot', 'Manue', '1671196895.jpg', 'emmanuelle.boinot@gmail.com', NULL, '$2y$10$17MInHLKaS3CMwvVpYHASO4HWSqRv6MW3.QsWD4R35nxaIdMm2EAC', 1, NULL, '2022-12-16 12:21:35', '2022-12-16 12:21:35');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_message_id_foreign` FOREIGN KEY (`message_id`) REFERENCES `messages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `commentaires_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
