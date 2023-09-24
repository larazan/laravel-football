-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Sep 2023 pada 15.40
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `football`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `log_name` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `subject_type` varchar(255) DEFAULT NULL,
  `event` varchar(255) DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `causer_type` varchar(255) DEFAULT NULL,
  `causer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`properties`)),
  `batch_uuid` char(36) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES
(1, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 2, NULL, NULL, '{\"attributes\":{\"id\":2,\"question\":\"Ut mollitia impedit aperiam.\",\"answer\":\"Nemo inventore porro error provident et quibusdam voluptatum sed. Autem in consequuntur autem. Velit et illum accusantium velit facere alias non. Quia minima sunt odio animi.\\n\\nQuibusdam quisquam soluta odit modi deleniti eveniet minima quibusdam. Magnam ullam sed officia earum qui.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:29.000000Z\",\"updated_at\":\"2023-09-22T21:39:29.000000Z\"}}', NULL, '2023-09-22 14:39:30', '2023-09-22 14:39:30'),
(2, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 3, NULL, NULL, '{\"attributes\":{\"id\":3,\"question\":\"Enim placeat at iure rerum sequi porro suscipit.\",\"answer\":\"Ut nulla error sit quaerat. Velit in quaerat reiciendis libero temporibus quisquam aut. Quos tempore vitae velit et facere eveniet perspiciatis.\\n\\nIn sed atque ipsa qui quibusdam nam qui. Et quos vel quos atque corporis ut. Sapiente qui est eum et ut dolores perspiciatis. Beatae voluptatibus ut labore. Quo voluptatem voluptatem enim sed.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:30.000000Z\",\"updated_at\":\"2023-09-22T21:39:30.000000Z\"}}', NULL, '2023-09-22 14:39:30', '2023-09-22 14:39:30'),
(3, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 4, NULL, NULL, '{\"attributes\":{\"id\":4,\"question\":\"Aliquid enim voluptatem ut corporis.\",\"answer\":\"Asperiores sed fugiat commodi ut ut. Saepe commodi consequatur in saepe voluptas. Rerum impedit distinctio sit a. Animi aperiam optio sit architecto nostrum. Et iste et temporibus quae voluptas.\\n\\nQuia vel labore perferendis autem aut at. Omnis repellat ullam omnis necessitatibus maiores. Nam iste commodi voluptatem et itaque officiis nihil placeat. Velit et tempora quasi aut possimus quo.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:30.000000Z\",\"updated_at\":\"2023-09-22T21:39:30.000000Z\"}}', NULL, '2023-09-22 14:39:30', '2023-09-22 14:39:30'),
(4, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 5, NULL, NULL, '{\"attributes\":{\"id\":5,\"question\":\"Dolorum accusantium illum fuga voluptatem occaecati.\",\"answer\":\"Culpa iste et laboriosam quo ea perferendis soluta. Nihil natus tempore cum sapiente. Praesentium sit quasi optio esse alias. Rem sapiente minima neque. Odit sed cupiditate nihil laudantium.\\n\\nFugit velit accusantium animi dolorum dolorem quia ab omnis. Doloribus quod id occaecati sit est alias consequatur expedita. Perferendis temporibus itaque odit suscipit. Doloribus optio laborum laudantium similique commodi.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:30.000000Z\",\"updated_at\":\"2023-09-22T21:39:30.000000Z\"}}', NULL, '2023-09-22 14:39:30', '2023-09-22 14:39:30'),
(5, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 6, NULL, NULL, '{\"attributes\":{\"id\":6,\"question\":\"Et quia libero reiciendis ut temporibus.\",\"answer\":\"Velit consectetur sed non fuga et. Sit ut architecto est enim nihil voluptatem. Sunt illum animi quo amet ducimus cupiditate maiores.\\n\\nVoluptas autem nam expedita labore. Dolores autem aut praesentium reprehenderit rem qui. Placeat totam itaque est rem. Eveniet qui adipisci et molestiae.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:30.000000Z\",\"updated_at\":\"2023-09-22T21:39:30.000000Z\"}}', NULL, '2023-09-22 14:39:30', '2023-09-22 14:39:30'),
(6, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 7, NULL, NULL, '{\"attributes\":{\"id\":7,\"question\":\"Vel corporis unde et accusantium.\",\"answer\":\"Quo a eligendi rerum perferendis aliquid. Quis consequatur in et ipsam. Nihil porro quia voluptate. Libero voluptas recusandae facere quo ut.\\n\\nTotam non culpa aliquid blanditiis corporis eum. Ad et est excepturi aut blanditiis. Dolorem enim ut quaerat veniam quidem hic. Quo sunt ea eveniet officiis tempore aut.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:30.000000Z\",\"updated_at\":\"2023-09-22T21:39:30.000000Z\"}}', NULL, '2023-09-22 14:39:31', '2023-09-22 14:39:31'),
(7, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 8, NULL, NULL, '{\"attributes\":{\"id\":8,\"question\":\"Autem exercitationem aperiam totam aut unde aliquam.\",\"answer\":\"Eum accusantium amet voluptatem nulla. Temporibus labore sint fugiat sed rerum et. Beatae autem itaque consequuntur molestias rerum nihil soluta. Alias voluptate a placeat necessitatibus laboriosam dolor. Iste qui et quia est.\\n\\nUt tempora repudiandae velit natus aut laborum dolorem. Possimus corrupti voluptas dicta facere possimus provident aliquam ut. Et voluptatem nulla qui libero provident. Cupiditate quis rerum non ratione.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:31.000000Z\",\"updated_at\":\"2023-09-22T21:39:31.000000Z\"}}', NULL, '2023-09-22 14:39:31', '2023-09-22 14:39:31'),
(8, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 9, NULL, NULL, '{\"attributes\":{\"id\":9,\"question\":\"Et aut reiciendis distinctio quidem distinctio laboriosam.\",\"answer\":\"Quasi suscipit aut esse amet. Quia sint fuga sunt tempora ea.\\n\\nNon illum accusantium dignissimos. Tempore impedit voluptas quos libero non fugit commodi.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:31.000000Z\",\"updated_at\":\"2023-09-22T21:39:31.000000Z\"}}', NULL, '2023-09-22 14:39:31', '2023-09-22 14:39:31'),
(9, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 10, NULL, NULL, '{\"attributes\":{\"id\":10,\"question\":\"Est occaecati repellat laudantium tempore.\",\"answer\":\"Rem ipsa reiciendis aut et. Corporis ea corrupti porro dolor sapiente tempore. Aspernatur et unde fugiat commodi.\\n\\nA laboriosam eaque repudiandae occaecati. Rerum ducimus accusantium molestiae mollitia. Veniam sint vel laborum eum. Deserunt et sit sunt dignissimos repellendus adipisci voluptas voluptatem.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:31.000000Z\",\"updated_at\":\"2023-09-22T21:39:31.000000Z\"}}', NULL, '2023-09-22 14:39:31', '2023-09-22 14:39:31'),
(10, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 11, NULL, NULL, '{\"attributes\":{\"id\":11,\"question\":\"Sunt consequuntur beatae quae eum aperiam recusandae.\",\"answer\":\"Qui consequatur iste vitae enim quasi. Deserunt perferendis occaecati sit ratione reprehenderit sequi. Quia et recusandae at. Neque et rerum voluptatem provident aut sunt. Rerum debitis quae et dolores quibusdam.\\n\\nRepellat est omnis qui voluptas vel quo blanditiis. Dolore molestias quo sit sint et sequi eveniet. Exercitationem consectetur ratione consequuntur est. Harum deleniti porro maxime assumenda quibusdam eligendi. Itaque mollitia dolorem consequuntur.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:31.000000Z\",\"updated_at\":\"2023-09-22T21:39:31.000000Z\"}}', NULL, '2023-09-22 14:39:31', '2023-09-22 14:39:31'),
(11, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 12, NULL, NULL, '{\"attributes\":{\"id\":12,\"question\":\"Cupiditate qui a est soluta dicta qui reiciendis.\",\"answer\":\"Alias reprehenderit et ut minus odio. Sunt minima deserunt porro et ipsa.\\n\\nReprehenderit reiciendis dolore quia consequatur reiciendis. Repudiandae atque voluptatibus quia ex ratione impedit itaque architecto. Quo expedita ut provident voluptatibus aspernatur eaque amet. Assumenda dolor aliquam qui rem est. Provident et nam et sit maxime corporis iure.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:31.000000Z\",\"updated_at\":\"2023-09-22T21:39:31.000000Z\"}}', NULL, '2023-09-22 14:39:31', '2023-09-22 14:39:31'),
(12, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 13, NULL, NULL, '{\"attributes\":{\"id\":13,\"question\":\"Consequatur ullam consequuntur impedit nihil consequatur doloremque doloribus.\",\"answer\":\"Numquam optio nobis ut. Autem fugit rem nisi debitis. Voluptatibus accusamus optio nihil.\\n\\nQui nobis qui est nesciunt. Est quidem doloribus nostrum sit error.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:31.000000Z\",\"updated_at\":\"2023-09-22T21:39:31.000000Z\"}}', NULL, '2023-09-22 14:39:31', '2023-09-22 14:39:31'),
(13, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 14, NULL, NULL, '{\"attributes\":{\"id\":14,\"question\":\"Repudiandae consequatur dolorem sunt non eos natus optio.\",\"answer\":\"Porro distinctio sed totam cupiditate fugit et. Hic et rerum aliquam. Est sit sed impedit et.\\n\\nNihil ipsum sunt vitae dolor deserunt voluptatem dolorum ipsam. Aspernatur voluptatem consequuntur aut cupiditate quod eveniet. Vel in consequatur ut eius distinctio aut rerum.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:31.000000Z\",\"updated_at\":\"2023-09-22T21:39:31.000000Z\"}}', NULL, '2023-09-22 14:39:31', '2023-09-22 14:39:31'),
(14, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 15, NULL, NULL, '{\"attributes\":{\"id\":15,\"question\":\"Ut molestiae id possimus autem.\",\"answer\":\"Soluta nemo vitae quia nostrum. Ut libero temporibus reiciendis deserunt. Eveniet fugit at alias quo qui dolorem.\\n\\nExercitationem cum velit ex quia id quo. Tenetur ad dolorum sed enim vel. Voluptatem maxime veniam recusandae aperiam quo ab hic.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:31.000000Z\",\"updated_at\":\"2023-09-22T21:39:31.000000Z\"}}', NULL, '2023-09-22 14:39:31', '2023-09-22 14:39:31'),
(15, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 16, NULL, NULL, '{\"attributes\":{\"id\":16,\"question\":\"Ratione libero iste quibusdam explicabo accusantium in.\",\"answer\":\"Temporibus cumque numquam qui voluptatum. Veniam ipsa vero in illo. In culpa et asperiores illo.\\n\\nConsequatur id quo et harum aliquid numquam voluptatem. Qui delectus quo natus rerum sit rerum. Perferendis sit unde dignissimos et omnis assumenda nihil maxime. Maiores tempore sequi aspernatur labore sunt voluptas quos rerum.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:31.000000Z\",\"updated_at\":\"2023-09-22T21:39:31.000000Z\"}}', NULL, '2023-09-22 14:39:31', '2023-09-22 14:39:31'),
(16, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 17, NULL, NULL, '{\"attributes\":{\"id\":17,\"question\":\"Molestiae consequatur repellendus tempore dolor.\",\"answer\":\"Ut ut provident vel neque voluptatum ipsa. Aut omnis enim commodi nesciunt. Libero officiis non pariatur quis. Provident quis voluptatem temporibus quo.\\n\\nReiciendis voluptas facere accusamus hic fuga quidem ipsa recusandae. Tempore hic provident a omnis consequatur id autem pariatur. Voluptatem quo ut aut minima. Quis sunt et quos dolores quasi.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:31.000000Z\",\"updated_at\":\"2023-09-22T21:39:31.000000Z\"}}', NULL, '2023-09-22 14:39:32', '2023-09-22 14:39:32'),
(17, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 18, NULL, NULL, '{\"attributes\":{\"id\":18,\"question\":\"Quam numquam rerum quia qui voluptates.\",\"answer\":\"Voluptatem assumenda suscipit iure. Corrupti libero hic non enim et sed praesentium necessitatibus. Amet facere et nihil sint ut omnis. Autem veritatis et nesciunt vel nisi est sint esse.\\n\\nUllam quia omnis quo a natus officiis architecto. Et nam rerum commodi et quis laudantium. Est aut sed nobis quia a distinctio et.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:32.000000Z\",\"updated_at\":\"2023-09-22T21:39:32.000000Z\"}}', NULL, '2023-09-22 14:39:32', '2023-09-22 14:39:32'),
(18, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 19, NULL, NULL, '{\"attributes\":{\"id\":19,\"question\":\"Sed nostrum numquam nesciunt harum veniam quibusdam.\",\"answer\":\"Labore dolorum ea magnam similique saepe. Architecto harum et officia temporibus possimus tenetur deserunt. Dolore ut tempore magni illo veritatis ut est. Aliquid nihil nisi ducimus exercitationem.\\n\\nId nulla eos eos corrupti sit omnis. Omnis voluptate odio eveniet aperiam esse eos. Dolorum nemo vitae quia architecto consequuntur.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:32.000000Z\",\"updated_at\":\"2023-09-22T21:39:32.000000Z\"}}', NULL, '2023-09-22 14:39:32', '2023-09-22 14:39:32'),
(19, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 20, NULL, NULL, '{\"attributes\":{\"id\":20,\"question\":\"Sint optio vero voluptates quia.\",\"answer\":\"Iusto quo ut dolorum. Possimus et ad eos hic. Consequuntur nihil eum voluptatem eveniet debitis reprehenderit dolorem.\\n\\nRerum occaecati velit quis non saepe. Aliquid ea praesentium esse et reiciendis.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:32.000000Z\",\"updated_at\":\"2023-09-22T21:39:32.000000Z\"}}', NULL, '2023-09-22 14:39:32', '2023-09-22 14:39:32'),
(20, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 21, NULL, NULL, '{\"attributes\":{\"id\":21,\"question\":\"Officia et doloremque a ipsa enim quo.\",\"answer\":\"Ut tenetur ut consequatur nostrum cupiditate similique. Cumque delectus nesciunt voluptatem autem optio aut. Facere nobis sit dicta quis ut dolor hic. Delectus ut asperiores doloribus laboriosam corrupti quae saepe.\\n\\nEst aut alias ipsam ipsam facere temporibus odit. Voluptas earum voluptates aut hic maxime. Modi similique sunt quia quas. Dolorem aspernatur ratione eos omnis minima molestias.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:32.000000Z\",\"updated_at\":\"2023-09-22T21:39:32.000000Z\"}}', NULL, '2023-09-22 14:39:32', '2023-09-22 14:39:32'),
(21, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 22, NULL, NULL, '{\"attributes\":{\"id\":22,\"question\":\"Architecto iusto enim debitis provident dicta eos voluptas neque.\",\"answer\":\"Sint ipsa enim sunt et sit consequuntur. Repellendus enim autem atque nisi et impedit saepe modi.\\n\\nRepellat mollitia dolor rerum quia. Tempore vel tempore aliquid animi fugit. Laudantium et voluptate adipisci dicta eum.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:32.000000Z\",\"updated_at\":\"2023-09-22T21:39:32.000000Z\"}}', NULL, '2023-09-22 14:39:32', '2023-09-22 14:39:32'),
(22, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 23, NULL, NULL, '{\"attributes\":{\"id\":23,\"question\":\"Est eum quis amet ut ut dolore enim.\",\"answer\":\"Ipsam perspiciatis sunt consequatur quas quo. Sit sunt atque cupiditate mollitia. Exercitationem reiciendis veritatis quibusdam recusandae quia. Minima minus nesciunt quidem veritatis natus nesciunt dolores sequi.\\n\\nOfficiis voluptatem vel repellat voluptatem optio dolor. Eius officia impedit ut dolorem occaecati. Eaque ad neque labore vel sit qui cupiditate enim.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:32.000000Z\",\"updated_at\":\"2023-09-22T21:39:32.000000Z\"}}', NULL, '2023-09-22 14:39:32', '2023-09-22 14:39:32'),
(23, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 24, NULL, NULL, '{\"attributes\":{\"id\":24,\"question\":\"Et sed provident laborum sit omnis non.\",\"answer\":\"Accusantium voluptas commodi qui eaque quia. Corrupti et aspernatur nihil illum eum in ea. Est provident aut eum.\\n\\nNecessitatibus dicta iusto autem porro. Quibusdam fugit repellendus fugit at neque veritatis. Quasi aut praesentium est fugit nihil. Minus iure necessitatibus quisquam quos consequatur rerum distinctio.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:32.000000Z\",\"updated_at\":\"2023-09-22T21:39:32.000000Z\"}}', NULL, '2023-09-22 14:39:33', '2023-09-22 14:39:33'),
(24, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 25, NULL, NULL, '{\"attributes\":{\"id\":25,\"question\":\"Corporis magni laudantium delectus dicta maxime rem aut.\",\"answer\":\"Voluptatem velit rerum autem et molestias illo. Sunt voluptatum optio eligendi quasi. Neque nisi rerum aliquid veritatis nostrum voluptatum.\\n\\nExplicabo neque sunt est ipsa non debitis veritatis. Perspiciatis id dolores neque provident. Quibusdam aspernatur veniam voluptatem. Est eos voluptates ut quis porro libero. Voluptas in temporibus nesciunt necessitatibus voluptatibus est non.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:33.000000Z\",\"updated_at\":\"2023-09-22T21:39:33.000000Z\"}}', NULL, '2023-09-22 14:39:33', '2023-09-22 14:39:33'),
(25, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 26, NULL, NULL, '{\"attributes\":{\"id\":26,\"question\":\"Earum eveniet cum commodi eum dignissimos veniam.\",\"answer\":\"Harum quasi temporibus sit consequuntur fugiat neque officia accusamus. Assumenda assumenda qui maxime molestiae aut facere. Explicabo praesentium inventore itaque amet libero molestiae. Est numquam dolore vel quis nemo.\\n\\nDolorum alias ex modi sunt fugit qui expedita. Et nisi iure maxime quaerat culpa qui. Perspiciatis beatae iste vero dolorem omnis tempora. Ut debitis ducimus velit ad corrupti nobis.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:33.000000Z\",\"updated_at\":\"2023-09-22T21:39:33.000000Z\"}}', NULL, '2023-09-22 14:39:33', '2023-09-22 14:39:33'),
(26, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 27, NULL, NULL, '{\"attributes\":{\"id\":27,\"question\":\"Eligendi tempora ducimus amet aspernatur.\",\"answer\":\"Et non vel fugiat illum a. Dignissimos eum dolorem commodi consequatur. Autem sapiente aut hic facilis id et ad. Est quis eius et esse.\\n\\nConsectetur voluptatem ipsum dolor ea. Voluptatem beatae distinctio quia omnis. Sapiente earum reiciendis et est.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:33.000000Z\",\"updated_at\":\"2023-09-22T21:39:33.000000Z\"}}', NULL, '2023-09-22 14:39:33', '2023-09-22 14:39:33'),
(27, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 28, NULL, NULL, '{\"attributes\":{\"id\":28,\"question\":\"Sunt voluptatem at ut qui qui eum ducimus ad.\",\"answer\":\"Voluptatem quo inventore mollitia quia similique deleniti at. Est reprehenderit aut repellendus corporis est nisi ut. Labore molestias facilis quod neque nostrum vitae.\\n\\nMaxime et pariatur praesentium. Et aut consequuntur pariatur. Voluptatem voluptatem porro cumque est expedita autem.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:33.000000Z\",\"updated_at\":\"2023-09-22T21:39:33.000000Z\"}}', NULL, '2023-09-22 14:39:33', '2023-09-22 14:39:33'),
(28, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 29, NULL, NULL, '{\"attributes\":{\"id\":29,\"question\":\"Qui quisquam nesciunt quis modi voluptate.\",\"answer\":\"Quos corrupti explicabo doloremque nihil. Animi magni exercitationem facere neque. Aut ratione id doloribus commodi tempora. Animi et tenetur quis.\\n\\nImpedit consequatur dolores saepe amet. Cupiditate nihil ut inventore corrupti labore vel. Deserunt tempore exercitationem quia rerum perspiciatis dolor.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:33.000000Z\",\"updated_at\":\"2023-09-22T21:39:33.000000Z\"}}', NULL, '2023-09-22 14:39:33', '2023-09-22 14:39:33'),
(29, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 30, NULL, NULL, '{\"attributes\":{\"id\":30,\"question\":\"Incidunt neque error culpa est.\",\"answer\":\"Et perspiciatis et deleniti qui. Delectus ratione aliquid sequi maxime voluptate perferendis. Aut sint modi officiis facilis voluptatum qui.\\n\\nAutem et error culpa harum. Ipsa occaecati similique suscipit assumenda. Minus fugiat minima laborum voluptas quia at.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:33.000000Z\",\"updated_at\":\"2023-09-22T21:39:33.000000Z\"}}', NULL, '2023-09-22 14:39:33', '2023-09-22 14:39:33'),
(30, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 31, NULL, NULL, '{\"attributes\":{\"id\":31,\"question\":\"In placeat dolorum eligendi excepturi dolor cupiditate.\",\"answer\":\"Libero quidem beatae nobis nesciunt explicabo minus. At consequatur aliquid non maiores possimus. Voluptatem nisi est ea.\\n\\nQuas ducimus distinctio culpa repellat. Dolor aut earum sint vel qui. Aut cumque temporibus ipsam rem cum aut esse.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:33.000000Z\",\"updated_at\":\"2023-09-22T21:39:33.000000Z\"}}', NULL, '2023-09-22 14:39:33', '2023-09-22 14:39:33'),
(31, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 32, NULL, NULL, '{\"attributes\":{\"id\":32,\"question\":\"Voluptatibus amet est ab tempore aut.\",\"answer\":\"Voluptatem vero nesciunt quia est. Modi quisquam mollitia et reiciendis.\\n\\nUt doloremque veniam est omnis laudantium. Culpa natus excepturi pariatur. Sit est in veniam. Iste nostrum veniam reiciendis officia nesciunt amet.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:33.000000Z\",\"updated_at\":\"2023-09-22T21:39:33.000000Z\"}}', NULL, '2023-09-22 14:39:34', '2023-09-22 14:39:34'),
(32, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 33, NULL, NULL, '{\"attributes\":{\"id\":33,\"question\":\"Ab rerum deserunt quidem officiis pariatur sint minus.\",\"answer\":\"Officia consequatur natus maiores quod. Officia voluptatem ut laboriosam qui in sit quas est. Est culpa voluptatem sunt doloremque voluptates placeat. Iure placeat aut qui.\\n\\nEnim eligendi molestias quod autem dignissimos. Perspiciatis facere et et qui est. Voluptatem similique eum ab vitae. Eveniet rerum nisi est delectus esse saepe dolorem.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:34.000000Z\",\"updated_at\":\"2023-09-22T21:39:34.000000Z\"}}', NULL, '2023-09-22 14:39:34', '2023-09-22 14:39:34'),
(33, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 34, NULL, NULL, '{\"attributes\":{\"id\":34,\"question\":\"Quisquam vel voluptatem iure at qui consequatur amet illum.\",\"answer\":\"Voluptatem ducimus voluptate fugiat voluptates labore nulla debitis nostrum. A voluptatum quas eum non.\\n\\nCorrupti placeat dolore unde non. Ab ut incidunt qui architecto labore et. Animi veniam voluptatibus iure sapiente fugiat velit blanditiis.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:34.000000Z\",\"updated_at\":\"2023-09-22T21:39:34.000000Z\"}}', NULL, '2023-09-22 14:39:34', '2023-09-22 14:39:34'),
(34, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 35, NULL, NULL, '{\"attributes\":{\"id\":35,\"question\":\"A vel ipsam quia rerum eveniet.\",\"answer\":\"Explicabo eos dolorem quos officiis ipsa voluptatem qui nemo. Temporibus asperiores quis ex qui asperiores voluptate dolores.\\n\\nDistinctio temporibus quo non ab odit quod qui. Nulla distinctio dolor qui.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:34.000000Z\",\"updated_at\":\"2023-09-22T21:39:34.000000Z\"}}', NULL, '2023-09-22 14:39:34', '2023-09-22 14:39:34'),
(35, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 36, NULL, NULL, '{\"attributes\":{\"id\":36,\"question\":\"Sit reiciendis optio tenetur itaque ex labore velit.\",\"answer\":\"Sit aut repudiandae aspernatur doloribus officia quia consectetur quia. Consectetur fuga qui ut unde in. Est eveniet perferendis quo necessitatibus eos at.\\n\\nNecessitatibus quibusdam repellendus veniam magni ut. Error sit ea nobis perferendis. Laudantium aut sit dignissimos consectetur et.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:34.000000Z\",\"updated_at\":\"2023-09-22T21:39:34.000000Z\"}}', NULL, '2023-09-22 14:39:34', '2023-09-22 14:39:34'),
(36, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 37, NULL, NULL, '{\"attributes\":{\"id\":37,\"question\":\"Esse voluptate quam praesentium.\",\"answer\":\"Itaque dolor et qui sunt qui id et est. Sit est cumque aperiam debitis. Illum velit est minus.\\n\\nQuas voluptatem laborum quos laborum. Sed ea sit quam laboriosam non repellendus iure. Recusandae qui incidunt repellendus eos perferendis sit qui saepe. Deserunt mollitia earum ex beatae.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:34.000000Z\",\"updated_at\":\"2023-09-22T21:39:34.000000Z\"}}', NULL, '2023-09-22 14:39:34', '2023-09-22 14:39:34'),
(37, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 38, NULL, NULL, '{\"attributes\":{\"id\":38,\"question\":\"Provident excepturi est sunt officia dolores ratione sed culpa.\",\"answer\":\"Modi fuga dolores repudiandae ad vero repellat sunt. Facere aut quis aperiam culpa repellendus eos. Alias a ducimus autem delectus libero soluta. Nostrum sit qui aut saepe dicta atque.\\n\\nRatione commodi qui voluptatibus neque odit nam harum eos. Minima corporis velit sunt ea molestiae numquam non. Soluta sit mollitia non nesciunt asperiores consequuntur doloremque.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:34.000000Z\",\"updated_at\":\"2023-09-22T21:39:34.000000Z\"}}', NULL, '2023-09-22 14:39:34', '2023-09-22 14:39:34'),
(38, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 39, NULL, NULL, '{\"attributes\":{\"id\":39,\"question\":\"Enim nemo enim voluptas culpa blanditiis dicta.\",\"answer\":\"Ipsum rerum quis nobis perferendis dolorum consectetur. Quos quia sequi commodi.\\n\\nDolorem accusantium qui delectus id. Itaque rerum ex veniam qui id ab aut a. Eum quis in necessitatibus minima illo culpa. Illum animi aut minus autem reprehenderit qui autem.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:34.000000Z\",\"updated_at\":\"2023-09-22T21:39:34.000000Z\"}}', NULL, '2023-09-22 14:39:35', '2023-09-22 14:39:35'),
(39, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 40, NULL, NULL, '{\"attributes\":{\"id\":40,\"question\":\"Aliquid et ullam aut aut optio deserunt perspiciatis.\",\"answer\":\"Et quae culpa tempore quam dolore magni. Qui omnis ipsam dolore nemo deleniti. Delectus excepturi non optio qui qui enim aut.\\n\\nIure unde quasi quaerat hic laudantium pariatur. Aut laboriosam odio ad odit accusantium laborum. Ducimus laudantium nesciunt enim facere nobis ipsa. Aut explicabo nisi et magnam.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:35.000000Z\",\"updated_at\":\"2023-09-22T21:39:35.000000Z\"}}', NULL, '2023-09-22 14:39:35', '2023-09-22 14:39:35'),
(40, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 41, NULL, NULL, '{\"attributes\":{\"id\":41,\"question\":\"Ullam hic itaque accusamus accusantium laudantium.\",\"answer\":\"Ea non autem velit voluptas. Consequuntur nihil aut magnam reprehenderit et. Fugit est dolorem blanditiis error quod. Iste ut magnam perspiciatis amet atque. Alias harum magnam et aut.\\n\\nSunt et molestias et occaecati aut. Praesentium dolores dolorem earum amet voluptas aspernatur qui. Odio in exercitationem perspiciatis velit. Harum dignissimos velit laboriosam non minima impedit.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:35.000000Z\",\"updated_at\":\"2023-09-22T21:39:35.000000Z\"}}', NULL, '2023-09-22 14:39:35', '2023-09-22 14:39:35'),
(41, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 42, NULL, NULL, '{\"attributes\":{\"id\":42,\"question\":\"Cupiditate est suscipit quia amet fugit.\",\"answer\":\"Sed consectetur deserunt qui quis consequatur. Enim dolorum sed officia incidunt. Ratione officiis ea eveniet deserunt ut officia voluptate alias. Culpa ea earum perspiciatis ab.\\n\\nProvident ut vitae quia quae. Assumenda sed et magni dolores ex totam quo. Vero facere ut et eius aspernatur.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:35.000000Z\",\"updated_at\":\"2023-09-22T21:39:35.000000Z\"}}', NULL, '2023-09-22 14:39:35', '2023-09-22 14:39:35'),
(42, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 43, NULL, NULL, '{\"attributes\":{\"id\":43,\"question\":\"Sequi est quod autem.\",\"answer\":\"Aut qui culpa sunt vel accusamus. Numquam fugiat et id dignissimos saepe eveniet. Nostrum dicta aut facere voluptatem. Nulla asperiores mollitia beatae quae nulla aut maxime.\\n\\nEst dolorum officia temporibus qui voluptatem. Hic eum aut voluptas modi. Autem eos iure earum. Aperiam voluptatem omnis eveniet perspiciatis rerum at.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:35.000000Z\",\"updated_at\":\"2023-09-22T21:39:35.000000Z\"}}', NULL, '2023-09-22 14:39:35', '2023-09-22 14:39:35'),
(43, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 44, NULL, NULL, '{\"attributes\":{\"id\":44,\"question\":\"Similique voluptatum eos incidunt sed aliquid exercitationem laboriosam neque.\",\"answer\":\"Id optio ipsa qui laborum quia maiores voluptatum hic. Officiis unde quia aliquid sint eum assumenda necessitatibus. Et ullam est quia dolores officia.\\n\\nArchitecto et velit impedit harum qui nemo aut vero. Aut dolorem rerum ipsa velit alias. Ea nisi occaecati fuga expedita. Dolor mollitia voluptates est.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:35.000000Z\",\"updated_at\":\"2023-09-22T21:39:35.000000Z\"}}', NULL, '2023-09-22 14:39:35', '2023-09-22 14:39:35'),
(44, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 45, NULL, NULL, '{\"attributes\":{\"id\":45,\"question\":\"Voluptatibus sint fugiat cum animi ipsum.\",\"answer\":\"Aut aut voluptatibus quia tempora sit. Ipsam quidem qui debitis vel in enim voluptatem molestias. Iure deleniti iste velit sit sapiente odio ut.\\n\\nFacilis aut sint temporibus ipsa et. Maiores voluptatem saepe ex assumenda sapiente tempora. Repellat qui iusto non.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:36.000000Z\",\"updated_at\":\"2023-09-22T21:39:36.000000Z\"}}', NULL, '2023-09-22 14:39:36', '2023-09-22 14:39:36'),
(45, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 46, NULL, NULL, '{\"attributes\":{\"id\":46,\"question\":\"Voluptatem ad libero dolores velit consequatur debitis libero.\",\"answer\":\"Aut dignissimos velit ut quas repudiandae. Exercitationem sint consequuntur neque accusantium quaerat quos. Ea commodi non numquam dolor aut sed a magni.\\n\\nReiciendis distinctio ut consequatur. Molestiae ad et deserunt et sunt. Ullam molestias sed fugit necessitatibus.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:36.000000Z\",\"updated_at\":\"2023-09-22T21:39:36.000000Z\"}}', NULL, '2023-09-22 14:39:36', '2023-09-22 14:39:36'),
(46, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 47, NULL, NULL, '{\"attributes\":{\"id\":47,\"question\":\"Voluptate voluptas sunt ut occaecati nemo soluta.\",\"answer\":\"Similique enim consequatur ea blanditiis soluta et qui aliquam. Non quibusdam qui accusantium accusantium beatae nobis. Illum blanditiis quod iusto voluptatibus.\\n\\nDolorem eum aut voluptatem commodi qui. Quia autem adipisci vel omnis. Aspernatur eaque quod voluptas laboriosam fuga est voluptatem. Illo eos nulla et voluptatem sunt odit. Magnam distinctio suscipit earum id consequatur dolores itaque natus.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:36.000000Z\",\"updated_at\":\"2023-09-22T21:39:36.000000Z\"}}', NULL, '2023-09-22 14:39:36', '2023-09-22 14:39:36'),
(47, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 48, NULL, NULL, '{\"attributes\":{\"id\":48,\"question\":\"Sed asperiores explicabo nam doloribus occaecati a.\",\"answer\":\"Quos dolor consequatur natus eligendi at. Aut ea voluptas unde mollitia ut excepturi eveniet. Voluptate est non quis dolor qui.\\n\\nEligendi aut facere provident eveniet ipsum repudiandae non nesciunt. Qui sequi fuga facilis nihil. Voluptatem quo laudantium adipisci est minus eum. Explicabo quo consequatur numquam.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:36.000000Z\",\"updated_at\":\"2023-09-22T21:39:36.000000Z\"}}', NULL, '2023-09-22 14:39:36', '2023-09-22 14:39:36'),
(48, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 49, NULL, NULL, '{\"attributes\":{\"id\":49,\"question\":\"Reiciendis sint ab voluptatem aut quia omnis sed.\",\"answer\":\"Reprehenderit possimus illo accusamus est. Molestias iste et quia earum consequatur quia. Tempora consequuntur nam in qui facilis autem laudantium.\\n\\nNulla similique asperiores et voluptates. Magnam magni ratione ut magnam incidunt et autem. Et est magnam qui vitae velit.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:36.000000Z\",\"updated_at\":\"2023-09-22T21:39:36.000000Z\"}}', NULL, '2023-09-22 14:39:36', '2023-09-22 14:39:36'),
(49, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 50, NULL, NULL, '{\"attributes\":{\"id\":50,\"question\":\"Quos dolorum a aut provident aspernatur.\",\"answer\":\"Ea enim consequatur quia ullam. Aut veritatis blanditiis nihil quas. Dicta est deleniti in quo quasi. Sed doloremque cumque voluptatum in.\\n\\nIusto quaerat eveniet velit corporis beatae. Excepturi in aliquid placeat in voluptatem ratione. Magni reprehenderit temporibus assumenda. Expedita ut ut nam est eius.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:36.000000Z\",\"updated_at\":\"2023-09-22T21:39:36.000000Z\"}}', NULL, '2023-09-22 14:39:36', '2023-09-22 14:39:36'),
(50, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 51, NULL, NULL, '{\"attributes\":{\"id\":51,\"question\":\"Cumque eum nihil et ea voluptatem mollitia rem.\",\"answer\":\"Itaque molestiae deleniti nisi alias inventore. Nobis rerum qui optio in. Occaecati asperiores sint error tempora. Corrupti natus deserunt voluptas adipisci illo.\\n\\nConsequatur veniam eaque est. Consectetur autem dignissimos nam nostrum ea sed cupiditate. Illum odio ea totam adipisci qui. Exercitationem repudiandae deserunt amet saepe repudiandae quisquam.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:36.000000Z\",\"updated_at\":\"2023-09-22T21:39:36.000000Z\"}}', NULL, '2023-09-22 14:39:36', '2023-09-22 14:39:36'),
(51, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 52, NULL, NULL, '{\"attributes\":{\"id\":52,\"question\":\"Odio illum quod harum et necessitatibus sit impedit.\",\"answer\":\"Dolor ut veniam ut et. Ad nihil culpa explicabo molestiae temporibus. Sunt quia rerum itaque aperiam esse natus suscipit. Quasi dolor sit adipisci.\\n\\nIn quis quia impedit expedita eum quidem porro qui. Aut dolor est enim odio voluptas eius a. Nemo voluptate neque soluta voluptatem sunt.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:37.000000Z\",\"updated_at\":\"2023-09-22T21:39:37.000000Z\"}}', NULL, '2023-09-22 14:39:37', '2023-09-22 14:39:37'),
(52, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 53, NULL, NULL, '{\"attributes\":{\"id\":53,\"question\":\"Dolorem veritatis nemo fuga aliquam quis quae eum.\",\"answer\":\"Doloremque molestiae velit omnis reiciendis nam odio dicta amet. Est dolorem beatae in numquam aut ea. Neque autem repudiandae minima debitis qui. Ut error iste libero et quaerat minima.\\n\\nNihil doloribus nesciunt provident architecto a exercitationem. Non magni et quia similique ut dolore. Id nobis sed incidunt. Impedit quos repellat ut quasi ipsum similique doloremque.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:37.000000Z\",\"updated_at\":\"2023-09-22T21:39:37.000000Z\"}}', NULL, '2023-09-22 14:39:37', '2023-09-22 14:39:37'),
(53, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 54, NULL, NULL, '{\"attributes\":{\"id\":54,\"question\":\"Pariatur eligendi qui et vel rerum officia.\",\"answer\":\"Ipsum ut dolores aut autem. Tempore ducimus est ab consectetur et. Iusto tempore ut quidem tempora quo omnis non.\\n\\nEos molestiae dolor deserunt voluptates quia. Non ex quis enim quisquam a. Qui deleniti amet ducimus ut. Aut ad aut est quibusdam ut voluptas.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:37.000000Z\",\"updated_at\":\"2023-09-22T21:39:37.000000Z\"}}', NULL, '2023-09-22 14:39:37', '2023-09-22 14:39:37'),
(54, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 55, NULL, NULL, '{\"attributes\":{\"id\":55,\"question\":\"Sint consequatur quo ex consequatur pariatur.\",\"answer\":\"Vero neque eveniet neque dignissimos delectus. Dolor in in voluptatum et qui officia. Sit voluptatem est consequuntur libero. Impedit occaecati deserunt nulla minus non.\\n\\nDeserunt doloremque dolor molestiae ab repellendus aut. Voluptatem aut deleniti est et et aut. Officia deleniti ipsa ea et.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:37.000000Z\",\"updated_at\":\"2023-09-22T21:39:37.000000Z\"}}', NULL, '2023-09-22 14:39:37', '2023-09-22 14:39:37'),
(55, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 56, NULL, NULL, '{\"attributes\":{\"id\":56,\"question\":\"Qui tempora ut fuga eos distinctio maxime in.\",\"answer\":\"Dolores harum repellendus accusantium consequatur numquam nobis quia nisi. Facere voluptas vel qui aut. Hic dolore ratione omnis sint odio. Repudiandae vel sed id atque.\\n\\nEt consectetur accusantium animi odit. Vel eum commodi facilis magnam architecto aut. Omnis sit totam veniam est eos nihil sit ut.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:37.000000Z\",\"updated_at\":\"2023-09-22T21:39:37.000000Z\"}}', NULL, '2023-09-22 14:39:37', '2023-09-22 14:39:37'),
(56, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 57, NULL, NULL, '{\"attributes\":{\"id\":57,\"question\":\"Exercitationem hic dolores doloremque aut atque eum.\",\"answer\":\"Iusto natus et nisi assumenda ut iusto distinctio. Ut omnis ut consequatur ipsam eum. Hic accusantium unde sint quas sit. Omnis architecto optio ex voluptas reiciendis.\\n\\nSapiente voluptatem molestias cum provident ut est aut. Quasi ea nulla iusto.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:37.000000Z\",\"updated_at\":\"2023-09-22T21:39:37.000000Z\"}}', NULL, '2023-09-22 14:39:38', '2023-09-22 14:39:38'),
(57, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 58, NULL, NULL, '{\"attributes\":{\"id\":58,\"question\":\"Illo enim animi dolores repellendus qui inventore sit.\",\"answer\":\"Dolor est nemo maxime dolorem. Autem atque odio minima sunt. Inventore ut quia officiis eum earum voluptatibus culpa. Commodi aut ut rerum autem.\\n\\nNemo sed facilis eveniet molestiae sed quibusdam sunt. Atque ipsam vitae neque quis minima consequatur. Commodi est perspiciatis vero velit. Non doloribus deserunt fugiat mollitia reprehenderit rem.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:38.000000Z\",\"updated_at\":\"2023-09-22T21:39:38.000000Z\"}}', NULL, '2023-09-22 14:39:38', '2023-09-22 14:39:38'),
(58, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 59, NULL, NULL, '{\"attributes\":{\"id\":59,\"question\":\"A quo facere iusto omnis est ad blanditiis.\",\"answer\":\"Fuga accusamus occaecati molestias et. Nesciunt et enim dolorem nobis libero quis sunt. Rem ut laboriosam ad.\\n\\nDicta eos dolorum quo soluta. Est facere rerum eos accusamus quis quam et. Blanditiis voluptates saepe neque beatae animi.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:38.000000Z\",\"updated_at\":\"2023-09-22T21:39:38.000000Z\"}}', NULL, '2023-09-22 14:39:38', '2023-09-22 14:39:38'),
(59, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 60, NULL, NULL, '{\"attributes\":{\"id\":60,\"question\":\"Culpa recusandae nobis illum est.\",\"answer\":\"Non nisi eius doloribus non. Ipsa nemo blanditiis quia nesciunt tempora commodi. Quo ipsum ab qui mollitia.\\n\\nSoluta sed aut beatae dolores commodi. Corporis sequi eveniet eligendi maxime aut ut eum. Nihil laudantium dolores occaecati qui suscipit delectus.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:38.000000Z\",\"updated_at\":\"2023-09-22T21:39:38.000000Z\"}}', NULL, '2023-09-22 14:39:38', '2023-09-22 14:39:38'),
(60, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 61, NULL, NULL, '{\"attributes\":{\"id\":61,\"question\":\"Culpa et qui in officia enim saepe blanditiis minus.\",\"answer\":\"Ut quas fuga unde repellat et. Excepturi sed sint et.\\n\\nAccusamus temporibus qui aut deleniti perspiciatis fugiat consequatur qui. Nemo eum voluptatum et et culpa. Quas autem quae est eaque laboriosam et sunt. Sed enim magnam in reprehenderit. Deserunt nostrum aut cum.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:39.000000Z\",\"updated_at\":\"2023-09-22T21:39:39.000000Z\"}}', NULL, '2023-09-22 14:39:39', '2023-09-22 14:39:39'),
(61, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 62, NULL, NULL, '{\"attributes\":{\"id\":62,\"question\":\"Qui minima quia aut veritatis.\",\"answer\":\"Iste praesentium sunt ut explicabo rem quisquam sit. Eos vel aspernatur voluptas expedita eum sunt ex. Sint expedita molestiae atque tempora molestias. Itaque laborum quae optio nulla aspernatur.\\n\\nQuo aut tempore ratione expedita deleniti dolorum voluptas. Commodi dolorem hic dolorem et velit consequatur. In magnam quibusdam sed et molestias et. Et nam laudantium et totam est.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:39.000000Z\",\"updated_at\":\"2023-09-22T21:39:39.000000Z\"}}', NULL, '2023-09-22 14:39:39', '2023-09-22 14:39:39'),
(62, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 63, NULL, NULL, '{\"attributes\":{\"id\":63,\"question\":\"Consequatur temporibus non autem qui.\",\"answer\":\"Aliquam officia sapiente vel eos tempore incidunt aperiam. Qui omnis voluptatum qui dolorum. Illum similique laboriosam maiores atque dolorem mollitia.\\n\\nMollitia totam facilis qui ut et animi. Maxime expedita nihil neque distinctio. Placeat debitis expedita quas ipsam saepe aspernatur. Accusantium molestiae autem esse aut.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:39.000000Z\",\"updated_at\":\"2023-09-22T21:39:39.000000Z\"}}', NULL, '2023-09-22 14:39:39', '2023-09-22 14:39:39'),
(63, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 64, NULL, NULL, '{\"attributes\":{\"id\":64,\"question\":\"Qui dolor at officiis excepturi sunt.\",\"answer\":\"Velit in voluptatem fuga accusamus qui quos ea. Est vel ratione in illum inventore. Tempore cum voluptate repudiandae sunt sed sequi. Culpa blanditiis laudantium a recusandae consequatur accusantium.\\n\\nNesciunt in qui sed placeat in. Dicta cupiditate qui voluptatem commodi. Sit praesentium cupiditate temporibus delectus est quia error.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:39.000000Z\",\"updated_at\":\"2023-09-22T21:39:39.000000Z\"}}', NULL, '2023-09-22 14:39:39', '2023-09-22 14:39:39'),
(64, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 65, NULL, NULL, '{\"attributes\":{\"id\":65,\"question\":\"Consequatur dolore sunt quam labore sunt.\",\"answer\":\"Sunt et maxime ea omnis neque qui molestias. Voluptatibus rerum consequatur occaecati doloribus neque tempore. Aut quibusdam qui quo quis modi veritatis temporibus.\\n\\nQuis necessitatibus fugiat porro voluptatum non rem voluptatibus. Aut et quasi repudiandae ipsa consequatur dolorem. Quos veniam error repudiandae iusto totam.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:39.000000Z\",\"updated_at\":\"2023-09-22T21:39:39.000000Z\"}}', NULL, '2023-09-22 14:39:39', '2023-09-22 14:39:39'),
(65, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 66, NULL, NULL, '{\"attributes\":{\"id\":66,\"question\":\"Id et nihil aspernatur nobis.\",\"answer\":\"Facilis aut aperiam dolorum aut blanditiis. Error iste expedita et voluptatum consequatur. Maxime dolores ipsum doloremque minima quo dignissimos sunt.\\n\\nDolorum consectetur omnis quo. Quia mollitia quis esse impedit. Eos dolor aliquid quibusdam veniam vel nihil qui sunt.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:39.000000Z\",\"updated_at\":\"2023-09-22T21:39:39.000000Z\"}}', NULL, '2023-09-22 14:39:39', '2023-09-22 14:39:39'),
(66, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 67, NULL, NULL, '{\"attributes\":{\"id\":67,\"question\":\"Numquam provident cum saepe itaque possimus repellendus dolorem quod.\",\"answer\":\"Non qui iure est consequatur quos. Dolorum iste non maxime hic. Tenetur aut suscipit sit magni exercitationem doloribus. Facilis libero adipisci exercitationem mollitia facere autem assumenda.\\n\\nLibero velit possimus quo nisi corrupti. Fuga in voluptatem molestiae natus eum eaque. Ut recusandae quis ex occaecati eveniet ipsam. Suscipit odio accusantium maiores delectus repudiandae ut dignissimos.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:40.000000Z\",\"updated_at\":\"2023-09-22T21:39:40.000000Z\"}}', NULL, '2023-09-22 14:39:40', '2023-09-22 14:39:40'),
(67, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 68, NULL, NULL, '{\"attributes\":{\"id\":68,\"question\":\"Possimus ut omnis error eaque molestiae et voluptatem.\",\"answer\":\"Ratione animi ut est blanditiis consectetur facilis. Sint in velit debitis facere id.\\n\\nEt nostrum qui iste. Consectetur eum repudiandae sit fugit excepturi voluptate est. Omnis praesentium aut facilis est nisi molestiae.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:41.000000Z\",\"updated_at\":\"2023-09-22T21:39:41.000000Z\"}}', NULL, '2023-09-22 14:39:41', '2023-09-22 14:39:41'),
(68, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 69, NULL, NULL, '{\"attributes\":{\"id\":69,\"question\":\"Necessitatibus assumenda corrupti porro corporis.\",\"answer\":\"Deleniti eos consequuntur rem facere consequatur cum aut. Ut et ut fugiat illum ipsam et mollitia. Incidunt et eaque voluptates reprehenderit autem ullam rerum. Dolor necessitatibus eveniet veniam. Voluptatem consequuntur ut enim tempore maiores repellendus explicabo.\\n\\nAsperiores quia molestias minus. Ratione quidem est eum itaque. Cum maxime vel unde quo laboriosam illo ducimus.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:41.000000Z\",\"updated_at\":\"2023-09-22T21:39:41.000000Z\"}}', NULL, '2023-09-22 14:39:41', '2023-09-22 14:39:41'),
(69, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 70, NULL, NULL, '{\"attributes\":{\"id\":70,\"question\":\"Laboriosam id ad dolore laboriosam voluptas.\",\"answer\":\"Eos tenetur voluptas aperiam dolorem ad. Fugiat a provident qui sed temporibus tempore vitae. Dolor eos eligendi omnis saepe et quia et.\\n\\nQuibusdam est id magnam. Consequuntur voluptate dolores et quia atque omnis. Quia beatae enim dolorem perferendis. Maiores incidunt dolorem delectus quidem voluptates.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:41.000000Z\",\"updated_at\":\"2023-09-22T21:39:41.000000Z\"}}', NULL, '2023-09-22 14:39:41', '2023-09-22 14:39:41'),
(70, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 71, NULL, NULL, '{\"attributes\":{\"id\":71,\"question\":\"Sint ratione sed velit inventore illo est non.\",\"answer\":\"Animi molestiae inventore temporibus et. Ut amet sequi est aut et. Quas deserunt ipsam facilis illum eveniet mollitia deleniti. Ab eius beatae nulla recusandae asperiores quam et.\\n\\nIste illum rerum vel at consequatur quo eius. Dolor sint eos autem dolor sint. Voluptatibus repellat et nesciunt eligendi nemo. Voluptate ducimus asperiores dignissimos eum. Consectetur beatae eum soluta ipsa et.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:41.000000Z\",\"updated_at\":\"2023-09-22T21:39:41.000000Z\"}}', NULL, '2023-09-22 14:39:42', '2023-09-22 14:39:42'),
(71, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 72, NULL, NULL, '{\"attributes\":{\"id\":72,\"question\":\"Inventore aut vero voluptatibus incidunt laborum repellat.\",\"answer\":\"Voluptatem architecto nesciunt assumenda vitae. Consequatur enim et doloribus aut. Minus dicta fugiat dolores. Quis ex dolores quaerat laborum.\\n\\nPerferendis cum blanditiis velit at molestiae ut fuga. Magnam omnis doloribus quasi vitae corporis iste. Temporibus deleniti laudantium et quia nihil. Enim doloremque dolorum aspernatur iste molestias.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:42.000000Z\",\"updated_at\":\"2023-09-22T21:39:42.000000Z\"}}', NULL, '2023-09-22 14:39:42', '2023-09-22 14:39:42');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES
(72, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 73, NULL, NULL, '{\"attributes\":{\"id\":73,\"question\":\"Reprehenderit doloribus voluptas maiores exercitationem ut.\",\"answer\":\"Repudiandae ducimus rerum iusto a. Adipisci ipsa minus sit numquam ullam qui eum. Optio quisquam quaerat odit officia. Eos incidunt aut autem debitis repellendus ipsam dignissimos.\\n\\nQuibusdam cumque in placeat. Veritatis natus cupiditate rerum quisquam dolores cupiditate et.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:42.000000Z\",\"updated_at\":\"2023-09-22T21:39:42.000000Z\"}}', NULL, '2023-09-22 14:39:42', '2023-09-22 14:39:42'),
(73, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 74, NULL, NULL, '{\"attributes\":{\"id\":74,\"question\":\"Error quia dolorem distinctio similique consequuntur ipsum et.\",\"answer\":\"Magnam voluptatem sunt consequuntur non. Tempora ut aut a fugiat non. Eveniet quae exercitationem eligendi adipisci ut corporis. Cum voluptas dolor numquam.\\n\\nAutem quis magnam doloribus. Dolorem animi odio aut et soluta repudiandae. Id provident quidem enim quia voluptas fuga. Quia occaecati odio tempore consequatur ut consequatur.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:42.000000Z\",\"updated_at\":\"2023-09-22T21:39:42.000000Z\"}}', NULL, '2023-09-22 14:39:42', '2023-09-22 14:39:42'),
(74, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 75, NULL, NULL, '{\"attributes\":{\"id\":75,\"question\":\"Dolores nisi qui culpa impedit architecto ut aperiam.\",\"answer\":\"Voluptas voluptas et expedita inventore mollitia. Ea et commodi et dolorem. Non et aut adipisci deleniti qui. Accusantium fuga quisquam enim sit et.\\n\\nNemo enim consequatur voluptatem exercitationem eos ab nihil unde. Est molestiae quo fugit deserunt aut amet. Perspiciatis eaque officiis assumenda rerum odit vitae veniam.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:42.000000Z\",\"updated_at\":\"2023-09-22T21:39:42.000000Z\"}}', NULL, '2023-09-22 14:39:42', '2023-09-22 14:39:42'),
(75, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 76, NULL, NULL, '{\"attributes\":{\"id\":76,\"question\":\"Reprehenderit enim dolor accusamus ut in est soluta.\",\"answer\":\"Ut dolores reiciendis dignissimos facilis consequatur ut consequatur. Iste eum tenetur ratione in unde libero a reprehenderit. Ut qui asperiores eveniet voluptates rerum deleniti suscipit. Et amet enim consequatur eum cupiditate distinctio architecto.\\n\\nMagnam dicta dignissimos numquam est. Quod id dolor nisi illum deserunt officia libero. Perferendis corrupti esse omnis ratione facere voluptatibus eius. Saepe sapiente sed et voluptatem rem.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:43.000000Z\",\"updated_at\":\"2023-09-22T21:39:43.000000Z\"}}', NULL, '2023-09-22 14:39:43', '2023-09-22 14:39:43'),
(76, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 77, NULL, NULL, '{\"attributes\":{\"id\":77,\"question\":\"Fugit distinctio vitae libero ea distinctio laudantium.\",\"answer\":\"Deleniti sed magnam voluptatum sint. Officia ex aperiam qui in ut occaecati. Harum tempore alias nisi eveniet aliquam et.\\n\\nDeserunt et aut sequi temporibus repellat. Ut beatae libero numquam et non sunt. Vel est culpa eum voluptas. Expedita modi enim necessitatibus qui.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:43.000000Z\",\"updated_at\":\"2023-09-22T21:39:43.000000Z\"}}', NULL, '2023-09-22 14:39:43', '2023-09-22 14:39:43'),
(77, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 78, NULL, NULL, '{\"attributes\":{\"id\":78,\"question\":\"Reiciendis excepturi deserunt cupiditate nostrum soluta dicta explicabo est.\",\"answer\":\"Dolores quas laudantium ut aut consectetur incidunt. Placeat nesciunt rerum dolore doloremque. Laboriosam eum ullam nihil voluptatibus est occaecati. Ducimus dolorum quo dolore deleniti aut.\\n\\nConsectetur quia voluptas ut quisquam. Aut quisquam voluptates provident. Ducimus et ab nesciunt eaque quos. Sed odio et eos iste eos eos.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:43.000000Z\",\"updated_at\":\"2023-09-22T21:39:43.000000Z\"}}', NULL, '2023-09-22 14:39:43', '2023-09-22 14:39:43'),
(78, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 79, NULL, NULL, '{\"attributes\":{\"id\":79,\"question\":\"Officiis quae architecto laboriosam incidunt.\",\"answer\":\"Natus dicta eum ipsa reiciendis quibusdam. Delectus facilis et exercitationem et modi est incidunt. Qui optio qui temporibus. Distinctio dolor in et et. Nostrum repudiandae a tenetur deleniti et atque veritatis.\\n\\nError repudiandae aut est neque. Quo et esse consequatur. Tenetur aut soluta cupiditate omnis. Sed eum sed culpa et.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:43.000000Z\",\"updated_at\":\"2023-09-22T21:39:43.000000Z\"}}', NULL, '2023-09-22 14:39:43', '2023-09-22 14:39:43'),
(79, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 80, NULL, NULL, '{\"attributes\":{\"id\":80,\"question\":\"Et atque eos cumque.\",\"answer\":\"Qui nostrum et porro ut aspernatur qui. Quisquam dolor et omnis dolor cum. Nihil sint dolores velit sed ut. Recusandae et voluptas dolores quia quo officia magnam.\\n\\nNesciunt incidunt omnis sunt quos consequatur. Atque autem dicta error repellat. Quia sed repudiandae iure. Consequatur quidem illum velit.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:43.000000Z\",\"updated_at\":\"2023-09-22T21:39:43.000000Z\"}}', NULL, '2023-09-22 14:39:43', '2023-09-22 14:39:43'),
(80, 'default', 'This model has been created by: admin', 'App\\Models\\Faq', 'created', 81, NULL, NULL, '{\"attributes\":{\"id\":81,\"question\":\"Aliquid molestiae sit laudantium.\",\"answer\":\"Necessitatibus delectus ab omnis similique sed porro cum. Illo numquam in praesentium molestias debitis. Quas ut doloribus qui perspiciatis eius inventore ullam sed.\\n\\nIncidunt non nobis qui tempore fuga. Voluptas aut repudiandae ducimus saepe. Aut dolore a perspiciatis sapiente. Dolor nam aut doloremque culpa maxime qui blanditiis.\",\"status\":\"active\",\"created_at\":\"2023-09-22T21:39:44.000000Z\",\"updated_at\":\"2023-09-22T21:39:44.000000Z\"}}', NULL, '2023-09-22 14:39:44', '2023-09-22 14:39:44'),
(81, 'default', 'This model has been updated by: admin mimin', 'App\\Models\\TeamLeague', 'updated', 6, 'App\\Models\\User', 1, '{\"attributes\":{\"id\":6,\"season\":\"2023\\/2024\",\"team_id\":9,\"total_points\":3,\"total_goals\":3,\"total_goalsreceived\":0,\"total_goalsdiff\":3,\"total_wins\":1,\"total_draws\":0,\"total_losses\":0,\"home_points\":0,\"home_goals\":0,\"home_goalsreceived\":0,\"home_goalsdiff\":0,\"home_wins\":0,\"home_draws\":0,\"home_losses\":0,\"away_points\":3,\"away_goals\":3,\"away_goalsreceived\":0,\"away_goalsdiff\":3,\"away_wins\":1,\"away_draws\":0,\"away_losses\":0,\"created_at\":\"2023-09-19T18:38:37.000000Z\",\"updated_at\":\"2023-09-22T22:38:17.000000Z\"},\"old\":{\"id\":6,\"season\":\"2023\\/2024\",\"team_id\":9,\"total_points\":0,\"total_goals\":0,\"total_goalsreceived\":0,\"total_goalsdiff\":0,\"total_wins\":0,\"total_draws\":0,\"total_losses\":0,\"home_points\":0,\"home_goals\":0,\"home_goalsreceived\":0,\"home_goalsdiff\":0,\"home_wins\":0,\"home_draws\":0,\"home_losses\":0,\"away_points\":0,\"away_goals\":0,\"away_goalsreceived\":0,\"away_goalsdiff\":0,\"away_wins\":0,\"away_draws\":0,\"away_losses\":0,\"created_at\":\"2023-09-19T18:38:37.000000Z\",\"updated_at\":\"2023-09-19T18:38:37.000000Z\"}}', NULL, '2023-09-22 15:38:17', '2023-09-22 15:38:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `advertisings`
--

CREATE TABLE `advertisings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `segment_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `original` varchar(255) DEFAULT NULL,
  `small` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `advertising_segments`
--

CREATE TABLE `advertising_segments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `size` varchar(255) DEFAULT NULL,
  `original` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `advertising_segments`
--

INSERT INTO `advertising_segments` (`id`, `title`, `size`, `original`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Leaderboard', '600x600', 'uploads/advsegments/leaderboard_1694455088.leaderboard-600x594.jpg', 'active', '2023-09-22 14:34:06', NULL),
(2, 'Billboard', '600x600', 'uploads/advsegments/billboard_1694455186.Billboard-600x617.jpg', 'active', '2023-09-22 14:34:06', NULL),
(3, 'sticky sidebar', '600x600', 'uploads/advsegments/sticky-sidebar_1694455236.sticky-sidebar-600x578.jpg', 'active', '2023-09-22 14:34:06', NULL),
(4, 'Popup', '600x600', 'uploads/advsegments/popup_1694455520.download (1).png', 'active', '2023-09-22 14:34:06', NULL),
(5, 'Anchor', '600x600', 'uploads/advsegments/anchor_1694455584.mobile-anchor-bottom.png', 'active', '2023-09-22 14:34:06', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `rand_id` varchar(255) NOT NULL,
  `published_at` datetime DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 0,
  `status` varchar(10) NOT NULL,
  `body` text NOT NULL,
  `article_tags` text DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `original` varchar(255) DEFAULT NULL,
  `large` varchar(255) DEFAULT NULL,
  `medium` varchar(255) DEFAULT NULL,
  `small` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `article_categories`
--

CREATE TABLE `article_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `category_article_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `validation` varchar(255) DEFAULT NULL,
  `is_required` tinyint(1) NOT NULL DEFAULT 0,
  `is_unique` tinyint(1) NOT NULL DEFAULT 0,
  `is_filterable` tinyint(1) NOT NULL DEFAULT 0,
  `is_configurable` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `attribute_options`
--

CREATE TABLE `attribute_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `attribute_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `awards`
--

CREATE TABLE `awards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `competition_id` bigint(20) UNSIGNED NOT NULL,
  `year` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `awards`
--

INSERT INTO `awards` (`id`, `competition_id`, `year`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '2022', 'active', '2023-09-22 14:34:06', NULL),
(2, 1, '2021', 'active', '2023-09-22 14:34:06', NULL),
(3, 1, '2020', 'active', '2023-09-22 14:34:06', NULL),
(4, 1, '2019', 'active', '2023-09-22 14:34:06', NULL),
(5, 2, '2020', 'active', '2023-09-22 14:34:06', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `original` varchar(255) DEFAULT NULL,
  `small` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `price` double(8,2) NOT NULL DEFAULT 1.00,
  `tax` double(8,2) NOT NULL DEFAULT 1.00,
  `discount` double(8,2) NOT NULL DEFAULT 1.00,
  `slug` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `shop_info` varchar(255) DEFAULT NULL,
  `shipping_cost` double(8,2) DEFAULT NULL,
  `shipping_type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_articles`
--

CREATE TABLE `category_articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `category_articles`
--

INSERT INTO `category_articles` (`id`, `parent_id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 'News', 'news', '2023-09-22 14:34:05', NULL),
(2, NULL, 'Club', 'club', '2023-09-22 14:34:05', NULL),
(3, NULL, 'League', 'league', '2023-09-22 14:34:05', NULL),
(4, NULL, 'Fans', 'fans', '2023-09-22 14:34:05', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `clubs`
--

CREATE TABLE `clubs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `stadion_id` bigint(20) UNSIGNED NOT NULL,
  `info` text DEFAULT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `clubs`
--

INSERT INTO `clubs` (`id`, `name`, `slug`, `logo`, `stadion_id`, `info`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Vfl Wolfsburg', 'vfl-wolfsburg', 'uploads/clubs/vfl-wolfsburg_1693477571.wolfsburg.png', 12, NULL, 'active', '2023-09-22 14:34:02', NULL),
(2, 'Vfl Bochum 1848', 'vfl-bochum-1848', 'uploads/clubs/vfl-bochum-1848_1693495451.bochum.png', 13, NULL, 'active', '2023-09-22 14:34:02', NULL),
(3, 'Vfb Stuttgart', 'vfb-stuttgart', 'uploads/clubs/vfb-stuttgart_1693495435.vfb.png', 15, NULL, 'active', '2023-09-22 14:34:02', NULL),
(4, 'TSG 1899 Hoffenheim', 'tsg-hoffenheim', 'uploads/clubs/tsg-1899-hoffenheim_1693495133.hoffenheim.png', 9, NULL, 'active', '2023-09-22 14:34:02', NULL),
(5, 'SV Werder Bremen', 'sv-werder-bremen', 'uploads/clubs/sv-werder-bremen_1693495070.werderbremen.png', 18, NULL, 'active', '2023-09-22 14:34:02', NULL),
(6, 'SV Darmstadt 98', 'sv-darmstadt-98', 'uploads/clubs/sv-darmstadt-98_1693495345.darmstadt.png', 19, NULL, 'active', '2023-09-22 14:34:02', NULL),
(7, 'SC Freiburg', 'sc-freiburg', 'uploads/clubs/sc-freiburg_1693492813.scfreiburg.png', 6, NULL, 'active', '2023-09-22 14:34:02', NULL),
(8, 'RB Leipzig', 'rb-leipzig', 'uploads/clubs/rb-leipzig_1693403412.rbleipzig.png', 4, NULL, 'active', '2023-09-22 14:34:02', NULL),
(9, 'FC Bayen Munich', 'fc-bayen-munich', 'uploads/clubs/fc-bayen-munich_1693477537.bayern.png', 1, NULL, 'active', '2023-09-22 14:34:02', NULL),
(10, 'FC Augsburg', 'fc-augsburg', 'uploads/clubs/fc-augsburg_1693492749.augsburg.png', 14, NULL, 'active', '2023-09-22 14:34:02', NULL),
(11, 'Eintracht Frankfurt', 'eintracht-frankfurt', 'uploads/clubs/eintracht-frankfurt_1693477514.frankfrut.png', 11, NULL, 'active', '2023-09-22 14:34:02', NULL),
(12, 'Borussia Monchengladbach', 'borussia-monchengladbach', 'uploads/clubs/borussia-monchengladbach_1693405459.gladbach.png', 10, NULL, 'active', '2023-09-22 14:34:02', NULL),
(13, 'Borussia Dortmund', 'borussia-dortmund', 'uploads/clubs/borussia-dortmund_1693405444.dortmunt.png', 2, NULL, 'active', '2023-09-22 14:34:02', NULL),
(14, 'Bayer 04 Leverkusen', 'bayer-04-leverkusen', 'uploads/clubs/bayer-04-leverkusen_1693403563.leverkusen.png', 3, NULL, 'active', '2023-09-22 14:34:02', NULL),
(15, 'FSV Mainz 05', 'fsv-mainz-05', 'uploads/clubs/fsv-mainz-05_1693492793.mainz.png', 8, NULL, 'active', '2023-09-22 14:34:02', NULL),
(16, 'FC Union Berlin', 'fc-union-berlin', 'uploads/clubs/fc-union-berlin_1693492779.union_berlin.png', 5, NULL, 'active', '2023-09-22 14:34:02', NULL),
(17, 'FC Koln', 'fc-koln', 'uploads/clubs/fc-koln_1693410504.koln.png', 7, NULL, 'active', '2023-09-22 14:34:02', NULL),
(18, 'FC Heidenheim 1846', 'fc-Heidenheim-1846', 'uploads/clubs/fc-heidenheim-1846_1693492761.heidenheim.png', 20, NULL, 'active', '2023-09-22 14:34:02', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `commentable_type` varchar(255) NOT NULL,
  `commentable_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` mediumtext NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `competitions`
--

CREATE TABLE `competitions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `info` text NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `competitions`
--

INSERT INTO `competitions` (`id`, `name`, `slug`, `info`, `logo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bundesliga', 'bundesliga', 'lorem ipsum dolor sit amet', NULL, 'active', '2023-09-22 14:34:04', NULL),
(2, 'Champion League', 'champion-league', 'lorem ipsum dolor sit amet', NULL, 'active', '2023-09-22 14:34:04', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `opened` tinyint(4) NOT NULL DEFAULT 0,
  `feedback` varchar(255) NOT NULL DEFAULT '0',
  `reply` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `countries`
--

INSERT INTO `countries` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES
(1, 'United States', 'US', NULL, NULL),
(2, 'Canada', 'CA', NULL, NULL),
(3, 'Afghanistan', 'AF', NULL, NULL),
(4, 'Albania', 'AL', NULL, NULL),
(5, 'Algeria', 'DZ', NULL, NULL),
(6, 'American Samoa', 'AS', NULL, NULL),
(7, 'Andorra', 'AD', NULL, NULL),
(8, 'Angola', 'AO', NULL, NULL),
(9, 'Anguilla', 'AI', NULL, NULL),
(10, 'Antarctica', 'AQ', NULL, NULL),
(11, 'Antigua and/or Barbuda', 'AG', NULL, NULL),
(12, 'Argentina', 'AR', NULL, NULL),
(13, 'Armenia', 'AM', NULL, NULL),
(14, 'Aruba', 'AW', NULL, NULL),
(15, 'Australia', 'AU', NULL, NULL),
(16, 'Austria', 'AT', NULL, NULL),
(17, 'Azerbaijan', 'AZ', NULL, NULL),
(18, 'Bahamas', 'BS', NULL, NULL),
(19, 'Bahrain', 'BH', NULL, NULL),
(20, 'Bangladesh', 'BD', NULL, NULL),
(21, 'Barbados', 'BB', NULL, NULL),
(22, 'Belarus', 'BY', NULL, NULL),
(23, 'Belgium', 'BE', NULL, NULL),
(24, 'Belize', 'BZ', NULL, NULL),
(25, 'Benin', 'BJ', NULL, NULL),
(26, 'Bermuda', 'BM', NULL, NULL),
(27, 'Bhutan', 'BT', NULL, NULL),
(28, 'Bolivia', 'BO', NULL, NULL),
(29, 'Bosnia and Herzegovina', 'BA', NULL, NULL),
(30, 'Botswana', 'BW', NULL, NULL),
(31, 'Bouvet Island', 'BV', NULL, NULL),
(32, 'Brazil', 'BR', NULL, NULL),
(33, 'British lndian Ocean Territory', 'IO', NULL, NULL),
(34, 'Brunei Darussalam', 'BN', NULL, NULL),
(35, 'Bulgaria', 'BG', NULL, NULL),
(36, 'Burkina Faso', 'BF', NULL, NULL),
(37, 'Burundi', 'BI', NULL, NULL),
(38, 'Cambodia', 'KH', NULL, NULL),
(39, 'Cameroon', 'CM', NULL, NULL),
(40, 'Cape Verde', 'CV', NULL, NULL),
(41, 'Cayman Islands', 'KY', NULL, NULL),
(42, 'Central African Republic', 'CF', NULL, NULL),
(43, 'Chad', 'TD', NULL, NULL),
(44, 'Chile', 'CL', NULL, NULL),
(45, 'China', 'CN', NULL, NULL),
(46, 'Christmas Island', 'CX', NULL, NULL),
(47, 'Cocos (Keeling) Islands', 'CC', NULL, NULL),
(48, 'Colombia', 'CO', NULL, NULL),
(49, 'Comoros', 'KM', NULL, NULL),
(50, 'Congo', 'CG', NULL, NULL),
(51, 'Cook Islands', 'CK', NULL, NULL),
(52, 'Costa Rica', 'CR', NULL, NULL),
(53, 'Croatia (Hrvatska)', 'HR', NULL, NULL),
(54, 'Cuba', 'CU', NULL, NULL),
(55, 'Cyprus', 'CY', NULL, NULL),
(56, 'Czech Republic', 'CZ', NULL, NULL),
(57, 'Democratic Republic of Congo', 'CD', NULL, NULL),
(58, 'Denmark', 'DK', NULL, NULL),
(59, 'Djibouti', 'DJ', NULL, NULL),
(60, 'Dominica', 'DM', NULL, NULL),
(61, 'Dominican Republic', 'DO', NULL, NULL),
(62, 'East Timor', 'TP', NULL, NULL),
(63, 'Ecudaor', 'EC', NULL, NULL),
(64, 'Egypt', 'EG', NULL, NULL),
(65, 'El Salvador', 'SV', NULL, NULL),
(66, 'Equatorial Guinea', 'GQ', NULL, NULL),
(67, 'Eritrea', 'ER', NULL, NULL),
(68, 'Estonia', 'EE', NULL, NULL),
(69, 'Ethiopia', 'ET', NULL, NULL),
(70, 'Falkland Islands (Malvinas)', 'FK', NULL, NULL),
(71, 'Faroe Islands', 'FO', NULL, NULL),
(72, 'Fiji', 'FJ', NULL, NULL),
(73, 'Finland', 'FI', NULL, NULL),
(74, 'France', 'FR', NULL, NULL),
(75, 'France, Metropolitan', 'FX', NULL, NULL),
(76, 'French Guiana', 'GF', NULL, NULL),
(77, 'French Polynesia', 'PF', NULL, NULL),
(78, 'French Southern Territories', 'TF', NULL, NULL),
(79, 'Gabon', 'GA', NULL, NULL),
(80, 'Gambia', 'GM', NULL, NULL),
(81, 'Georgia', 'GE', NULL, NULL),
(82, 'Germany', 'DE', NULL, NULL),
(83, 'Ghana', 'GH', NULL, NULL),
(84, 'Gibraltar', 'GI', NULL, NULL),
(85, 'Greece', 'GR', NULL, NULL),
(86, 'Greenland', 'GL', NULL, NULL),
(87, 'Grenada', 'GD', NULL, NULL),
(88, 'Guadeloupe', 'GP', NULL, NULL),
(89, 'Guam', 'GU', NULL, NULL),
(90, 'Guatemala', 'GT', NULL, NULL),
(91, 'Guinea', 'GN', NULL, NULL),
(92, 'Guinea-Bissau', 'GW', NULL, NULL),
(93, 'Guyana', 'GY', NULL, NULL),
(94, 'Haiti', 'HT', NULL, NULL),
(95, 'Heard and Mc Donald Islands', 'HM', NULL, NULL),
(96, 'Honduras', 'HN', NULL, NULL),
(97, 'Hong Kong', 'HK', NULL, NULL),
(98, 'Hungary', 'HU', NULL, NULL),
(99, 'Iceland', 'IS', NULL, NULL),
(100, 'India', 'IN', NULL, NULL),
(101, 'Indonesia', 'ID', NULL, NULL),
(102, 'Iran (Islamic Republic of)', 'IR', NULL, NULL),
(103, 'Iraq', 'IQ', NULL, NULL),
(104, 'Ireland', 'IE', NULL, NULL),
(105, 'Israel', 'IL', NULL, NULL),
(106, 'Italy', 'IT', NULL, NULL),
(107, 'Ivory Coast', 'CI', NULL, NULL),
(108, 'Jamaica', 'JM', NULL, NULL),
(109, 'Japan', 'JP', NULL, NULL),
(110, 'Jordan', 'JO', NULL, NULL),
(111, 'Kazakhstan', 'KZ', NULL, NULL),
(112, 'Kenya', 'KE', NULL, NULL),
(113, 'Kiribati', 'KI', NULL, NULL),
(114, 'Korea, Democratic People\'s Republic of', 'KP', NULL, NULL),
(115, 'Korea, Republic of', 'KR', NULL, NULL),
(116, 'Kuwait', 'KW', NULL, NULL),
(117, 'Kyrgyzstan', 'KG', NULL, NULL),
(118, 'Lao People\'s Democratic Republic', 'LA', NULL, NULL),
(119, 'Latvia', 'LV', NULL, NULL),
(120, 'Lebanon', 'LB', NULL, NULL),
(121, 'Lesotho', 'LS', NULL, NULL),
(122, 'Liberia', 'LR', NULL, NULL),
(123, 'Libyan Arab Jamahiriya', 'LY', NULL, NULL),
(124, 'Liechtenstein', 'LI', NULL, NULL),
(125, 'Lithuania', 'LT', NULL, NULL),
(126, 'Luxembourg', 'LU', NULL, NULL),
(127, 'Macau', 'MO', NULL, NULL),
(128, 'Macedonia', 'MK', NULL, NULL),
(129, 'Madagascar', 'MG', NULL, NULL),
(130, 'Malawi', 'MW', NULL, NULL),
(131, 'Malaysia', 'MY', NULL, NULL),
(132, 'Maldives', 'MV', NULL, NULL),
(133, 'Mali', 'ML', NULL, NULL),
(134, 'Malta', 'MT', NULL, NULL),
(135, 'Marshall Islands', 'MH', NULL, NULL),
(136, 'Martinique', 'MQ', NULL, NULL),
(137, 'Mauritania', 'MR', NULL, NULL),
(138, 'Mauritius', 'MU', NULL, NULL),
(139, 'Mayotte', 'TY', NULL, NULL),
(140, 'Mexico', 'MX', NULL, NULL),
(141, 'Micronesia, Federated States of', 'FM', NULL, NULL),
(142, 'Moldova, Republic of', 'MD', NULL, NULL),
(143, 'Monaco', 'MC', NULL, NULL),
(144, 'Mongolia', 'MN', NULL, NULL),
(145, 'Montserrat', 'MS', NULL, NULL),
(146, 'Morocco', 'MA', NULL, NULL),
(147, 'Mozambique', 'MZ', NULL, NULL),
(148, 'Myanmar', 'MM', NULL, NULL),
(149, 'Namibia', 'NA', NULL, NULL),
(150, 'Nauru', 'NR', NULL, NULL),
(151, 'Nepal', 'NP', NULL, NULL),
(152, 'Netherlands', 'NL', NULL, NULL),
(153, 'Netherlands Antilles', 'AN', NULL, NULL),
(154, 'New Caledonia', 'NC', NULL, NULL),
(155, 'New Zealand', 'NZ', NULL, NULL),
(156, 'Nicaragua', 'NI', NULL, NULL),
(157, 'Niger', 'NE', NULL, NULL),
(158, 'Nigeria', 'NG', NULL, NULL),
(159, 'Niue', 'NU', NULL, NULL),
(160, 'Norfork Island', 'NF', NULL, NULL),
(161, 'Northern Mariana Islands', 'MP', NULL, NULL),
(162, 'Norway', 'NO', NULL, NULL),
(163, 'Oman', 'OM', NULL, NULL),
(164, 'Pakistan', 'PK', NULL, NULL),
(165, 'Palau', 'PW', NULL, NULL),
(166, 'Panama', 'PA', NULL, NULL),
(167, 'Papua New Guinea', 'PG', NULL, NULL),
(168, 'Paraguay', 'PY', NULL, NULL),
(169, 'Peru', 'PE', NULL, NULL),
(170, 'Philippines', 'PH', NULL, NULL),
(171, 'Pitcairn', 'PN', NULL, NULL),
(172, 'Poland', 'PL', NULL, NULL),
(173, 'Portugal', 'PT', NULL, NULL),
(174, 'Puerto Rico', 'PR', NULL, NULL),
(175, 'Qatar', 'QA', NULL, NULL),
(176, 'Republic of South Sudan', 'SS', NULL, NULL),
(177, 'Reunion', 'RE', NULL, NULL),
(178, 'Romania', 'RO', NULL, NULL),
(179, 'Russian Federation', 'RU', NULL, NULL),
(180, 'Rwanda', 'RW', NULL, NULL),
(181, 'Saint Kitts and Nevis', 'KN', NULL, NULL),
(182, 'Saint Lucia', 'LC', NULL, NULL),
(183, 'Saint Vincent and the Grenadines', 'VC', NULL, NULL),
(184, 'Samoa', 'WS', NULL, NULL),
(185, 'San Marino', 'SM', NULL, NULL),
(186, 'Sao Tome and Principe', 'ST', NULL, NULL),
(187, 'Saudi Arabia', 'SA', NULL, NULL),
(188, 'Senegal', 'SN', NULL, NULL),
(189, 'Serbia', 'RS', NULL, NULL),
(190, 'Seychelles', 'SC', NULL, NULL),
(191, 'Sierra Leone', 'SL', NULL, NULL),
(192, 'Singapore', 'SG', NULL, NULL),
(193, 'Slovakia', 'SK', NULL, NULL),
(194, 'Slovenia', 'SI', NULL, NULL),
(195, 'Solomon Islands', 'SB', NULL, NULL),
(196, 'Somalia', 'SO', NULL, NULL),
(197, 'South Africa', 'ZA', NULL, NULL),
(198, 'South Georgia South Sandwich Islands', 'GS', NULL, NULL),
(199, 'Spain', 'ES', NULL, NULL),
(200, 'Sri Lanka', 'LK', NULL, NULL),
(201, 'St. Helena', 'SH', NULL, NULL),
(202, 'St. Pierre and Miquelon', 'PM', NULL, NULL),
(203, 'Sudan', 'SD', NULL, NULL),
(204, 'Suriname', 'SR', NULL, NULL),
(205, 'Svalbarn and Jan Mayen Islands', 'SJ', NULL, NULL),
(206, 'Swaziland', 'SZ', NULL, NULL),
(207, 'Sweden', 'SE', NULL, NULL),
(208, 'Switzerland', 'CH', NULL, NULL),
(209, 'Syrian Arab Republic', 'SY', NULL, NULL),
(210, 'Taiwan', 'TW', NULL, NULL),
(211, 'Tajikistan', 'TJ', NULL, NULL),
(212, 'Tanzania, United Republic of', 'TZ', NULL, NULL),
(213, 'Thailand', 'TH', NULL, NULL),
(214, 'Togo', 'TG', NULL, NULL),
(215, 'Tokelau', 'TK', NULL, NULL),
(216, 'Tonga', 'TO', NULL, NULL),
(217, 'Trinidad and Tobago', 'TT', NULL, NULL),
(218, 'Tunisia', 'TN', NULL, NULL),
(219, 'Turkey', 'TR', NULL, NULL),
(220, 'Turkmenistan', 'TM', NULL, NULL),
(221, 'Turks and Caicos Islands', 'TC', NULL, NULL),
(222, 'Tuvalu', 'TV', NULL, NULL),
(223, 'Uganda', 'UG', NULL, NULL),
(224, 'Ukraine', 'UA', NULL, NULL),
(225, 'United Arab Emirates', 'AE', NULL, NULL),
(226, 'United Kingdom', 'GB', NULL, NULL),
(227, 'United States minor outlying islands', 'UM', NULL, NULL),
(228, 'Uruguay', 'UY', NULL, NULL),
(229, 'Uzbekistan', 'UZ', NULL, NULL),
(230, 'Vanuatu', 'VU', NULL, NULL),
(231, 'Vatican City State', 'VA', NULL, NULL),
(232, 'Venezuela', 'VE', NULL, NULL),
(233, 'Vietnam', 'VN', NULL, NULL),
(234, 'Virgin Islands (British)', 'VG', NULL, NULL),
(235, 'Virgin Islands (U.S.)', 'VI', NULL, NULL),
(236, 'Wallis and Futuna Islands', 'WF', NULL, NULL),
(237, 'Western Sahara', 'EH', NULL, NULL),
(238, 'Yemen', 'YE', NULL, NULL),
(239, 'Yugoslavia', 'YU', NULL, NULL),
(240, 'Zaire', 'ZR', NULL, NULL),
(241, 'Zambia', 'ZM', NULL, NULL),
(242, 'Zimbabwe', 'ZW', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Amet ex dolores quia.', 'Perferendis et consequatur cumque praesentium ut. Ipsam tenetur rerum aut autem incidunt odio. Quia culpa dolor iure ut nulla. Consequatur et omnis esse optio voluptatem aspernatur optio.\n\nPlaceat incidunt repudiandae et omnis minus odit. Ea ut tempore dolorem aut omnis dolor non. Necessitatibus nostrum expedita qui.', 'active', '2023-09-22 14:34:32', '2023-09-22 14:34:32'),
(2, 'Ut mollitia impedit aperiam.', 'Nemo inventore porro error provident et quibusdam voluptatum sed. Autem in consequuntur autem. Velit et illum accusantium velit facere alias non. Quia minima sunt odio animi.\n\nQuibusdam quisquam soluta odit modi deleniti eveniet minima quibusdam. Magnam ullam sed officia earum qui.', 'active', '2023-09-22 14:39:29', '2023-09-22 14:39:29'),
(3, 'Enim placeat at iure rerum sequi porro suscipit.', 'Ut nulla error sit quaerat. Velit in quaerat reiciendis libero temporibus quisquam aut. Quos tempore vitae velit et facere eveniet perspiciatis.\n\nIn sed atque ipsa qui quibusdam nam qui. Et quos vel quos atque corporis ut. Sapiente qui est eum et ut dolores perspiciatis. Beatae voluptatibus ut labore. Quo voluptatem voluptatem enim sed.', 'active', '2023-09-22 14:39:30', '2023-09-22 14:39:30'),
(4, 'Aliquid enim voluptatem ut corporis.', 'Asperiores sed fugiat commodi ut ut. Saepe commodi consequatur in saepe voluptas. Rerum impedit distinctio sit a. Animi aperiam optio sit architecto nostrum. Et iste et temporibus quae voluptas.\n\nQuia vel labore perferendis autem aut at. Omnis repellat ullam omnis necessitatibus maiores. Nam iste commodi voluptatem et itaque officiis nihil placeat. Velit et tempora quasi aut possimus quo.', 'active', '2023-09-22 14:39:30', '2023-09-22 14:39:30'),
(5, 'Dolorum accusantium illum fuga voluptatem occaecati.', 'Culpa iste et laboriosam quo ea perferendis soluta. Nihil natus tempore cum sapiente. Praesentium sit quasi optio esse alias. Rem sapiente minima neque. Odit sed cupiditate nihil laudantium.\n\nFugit velit accusantium animi dolorum dolorem quia ab omnis. Doloribus quod id occaecati sit est alias consequatur expedita. Perferendis temporibus itaque odit suscipit. Doloribus optio laborum laudantium similique commodi.', 'active', '2023-09-22 14:39:30', '2023-09-22 14:39:30'),
(6, 'Et quia libero reiciendis ut temporibus.', 'Velit consectetur sed non fuga et. Sit ut architecto est enim nihil voluptatem. Sunt illum animi quo amet ducimus cupiditate maiores.\n\nVoluptas autem nam expedita labore. Dolores autem aut praesentium reprehenderit rem qui. Placeat totam itaque est rem. Eveniet qui adipisci et molestiae.', 'active', '2023-09-22 14:39:30', '2023-09-22 14:39:30'),
(7, 'Vel corporis unde et accusantium.', 'Quo a eligendi rerum perferendis aliquid. Quis consequatur in et ipsam. Nihil porro quia voluptate. Libero voluptas recusandae facere quo ut.\n\nTotam non culpa aliquid blanditiis corporis eum. Ad et est excepturi aut blanditiis. Dolorem enim ut quaerat veniam quidem hic. Quo sunt ea eveniet officiis tempore aut.', 'active', '2023-09-22 14:39:30', '2023-09-22 14:39:30'),
(8, 'Autem exercitationem aperiam totam aut unde aliquam.', 'Eum accusantium amet voluptatem nulla. Temporibus labore sint fugiat sed rerum et. Beatae autem itaque consequuntur molestias rerum nihil soluta. Alias voluptate a placeat necessitatibus laboriosam dolor. Iste qui et quia est.\n\nUt tempora repudiandae velit natus aut laborum dolorem. Possimus corrupti voluptas dicta facere possimus provident aliquam ut. Et voluptatem nulla qui libero provident. Cupiditate quis rerum non ratione.', 'active', '2023-09-22 14:39:31', '2023-09-22 14:39:31'),
(9, 'Et aut reiciendis distinctio quidem distinctio laboriosam.', 'Quasi suscipit aut esse amet. Quia sint fuga sunt tempora ea.\n\nNon illum accusantium dignissimos. Tempore impedit voluptas quos libero non fugit commodi.', 'active', '2023-09-22 14:39:31', '2023-09-22 14:39:31'),
(10, 'Est occaecati repellat laudantium tempore.', 'Rem ipsa reiciendis aut et. Corporis ea corrupti porro dolor sapiente tempore. Aspernatur et unde fugiat commodi.\n\nA laboriosam eaque repudiandae occaecati. Rerum ducimus accusantium molestiae mollitia. Veniam sint vel laborum eum. Deserunt et sit sunt dignissimos repellendus adipisci voluptas voluptatem.', 'active', '2023-09-22 14:39:31', '2023-09-22 14:39:31'),
(11, 'Sunt consequuntur beatae quae eum aperiam recusandae.', 'Qui consequatur iste vitae enim quasi. Deserunt perferendis occaecati sit ratione reprehenderit sequi. Quia et recusandae at. Neque et rerum voluptatem provident aut sunt. Rerum debitis quae et dolores quibusdam.\n\nRepellat est omnis qui voluptas vel quo blanditiis. Dolore molestias quo sit sint et sequi eveniet. Exercitationem consectetur ratione consequuntur est. Harum deleniti porro maxime assumenda quibusdam eligendi. Itaque mollitia dolorem consequuntur.', 'active', '2023-09-22 14:39:31', '2023-09-22 14:39:31'),
(12, 'Cupiditate qui a est soluta dicta qui reiciendis.', 'Alias reprehenderit et ut minus odio. Sunt minima deserunt porro et ipsa.\n\nReprehenderit reiciendis dolore quia consequatur reiciendis. Repudiandae atque voluptatibus quia ex ratione impedit itaque architecto. Quo expedita ut provident voluptatibus aspernatur eaque amet. Assumenda dolor aliquam qui rem est. Provident et nam et sit maxime corporis iure.', 'active', '2023-09-22 14:39:31', '2023-09-22 14:39:31'),
(13, 'Consequatur ullam consequuntur impedit nihil consequatur doloremque doloribus.', 'Numquam optio nobis ut. Autem fugit rem nisi debitis. Voluptatibus accusamus optio nihil.\n\nQui nobis qui est nesciunt. Est quidem doloribus nostrum sit error.', 'active', '2023-09-22 14:39:31', '2023-09-22 14:39:31'),
(14, 'Repudiandae consequatur dolorem sunt non eos natus optio.', 'Porro distinctio sed totam cupiditate fugit et. Hic et rerum aliquam. Est sit sed impedit et.\n\nNihil ipsum sunt vitae dolor deserunt voluptatem dolorum ipsam. Aspernatur voluptatem consequuntur aut cupiditate quod eveniet. Vel in consequatur ut eius distinctio aut rerum.', 'active', '2023-09-22 14:39:31', '2023-09-22 14:39:31'),
(15, 'Ut molestiae id possimus autem.', 'Soluta nemo vitae quia nostrum. Ut libero temporibus reiciendis deserunt. Eveniet fugit at alias quo qui dolorem.\n\nExercitationem cum velit ex quia id quo. Tenetur ad dolorum sed enim vel. Voluptatem maxime veniam recusandae aperiam quo ab hic.', 'active', '2023-09-22 14:39:31', '2023-09-22 14:39:31'),
(16, 'Ratione libero iste quibusdam explicabo accusantium in.', 'Temporibus cumque numquam qui voluptatum. Veniam ipsa vero in illo. In culpa et asperiores illo.\n\nConsequatur id quo et harum aliquid numquam voluptatem. Qui delectus quo natus rerum sit rerum. Perferendis sit unde dignissimos et omnis assumenda nihil maxime. Maiores tempore sequi aspernatur labore sunt voluptas quos rerum.', 'active', '2023-09-22 14:39:31', '2023-09-22 14:39:31'),
(17, 'Molestiae consequatur repellendus tempore dolor.', 'Ut ut provident vel neque voluptatum ipsa. Aut omnis enim commodi nesciunt. Libero officiis non pariatur quis. Provident quis voluptatem temporibus quo.\n\nReiciendis voluptas facere accusamus hic fuga quidem ipsa recusandae. Tempore hic provident a omnis consequatur id autem pariatur. Voluptatem quo ut aut minima. Quis sunt et quos dolores quasi.', 'active', '2023-09-22 14:39:31', '2023-09-22 14:39:31'),
(18, 'Quam numquam rerum quia qui voluptates.', 'Voluptatem assumenda suscipit iure. Corrupti libero hic non enim et sed praesentium necessitatibus. Amet facere et nihil sint ut omnis. Autem veritatis et nesciunt vel nisi est sint esse.\n\nUllam quia omnis quo a natus officiis architecto. Et nam rerum commodi et quis laudantium. Est aut sed nobis quia a distinctio et.', 'active', '2023-09-22 14:39:32', '2023-09-22 14:39:32'),
(19, 'Sed nostrum numquam nesciunt harum veniam quibusdam.', 'Labore dolorum ea magnam similique saepe. Architecto harum et officia temporibus possimus tenetur deserunt. Dolore ut tempore magni illo veritatis ut est. Aliquid nihil nisi ducimus exercitationem.\n\nId nulla eos eos corrupti sit omnis. Omnis voluptate odio eveniet aperiam esse eos. Dolorum nemo vitae quia architecto consequuntur.', 'active', '2023-09-22 14:39:32', '2023-09-22 14:39:32'),
(20, 'Sint optio vero voluptates quia.', 'Iusto quo ut dolorum. Possimus et ad eos hic. Consequuntur nihil eum voluptatem eveniet debitis reprehenderit dolorem.\n\nRerum occaecati velit quis non saepe. Aliquid ea praesentium esse et reiciendis.', 'active', '2023-09-22 14:39:32', '2023-09-22 14:39:32'),
(21, 'Officia et doloremque a ipsa enim quo.', 'Ut tenetur ut consequatur nostrum cupiditate similique. Cumque delectus nesciunt voluptatem autem optio aut. Facere nobis sit dicta quis ut dolor hic. Delectus ut asperiores doloribus laboriosam corrupti quae saepe.\n\nEst aut alias ipsam ipsam facere temporibus odit. Voluptas earum voluptates aut hic maxime. Modi similique sunt quia quas. Dolorem aspernatur ratione eos omnis minima molestias.', 'active', '2023-09-22 14:39:32', '2023-09-22 14:39:32'),
(22, 'Architecto iusto enim debitis provident dicta eos voluptas neque.', 'Sint ipsa enim sunt et sit consequuntur. Repellendus enim autem atque nisi et impedit saepe modi.\n\nRepellat mollitia dolor rerum quia. Tempore vel tempore aliquid animi fugit. Laudantium et voluptate adipisci dicta eum.', 'active', '2023-09-22 14:39:32', '2023-09-22 14:39:32'),
(23, 'Est eum quis amet ut ut dolore enim.', 'Ipsam perspiciatis sunt consequatur quas quo. Sit sunt atque cupiditate mollitia. Exercitationem reiciendis veritatis quibusdam recusandae quia. Minima minus nesciunt quidem veritatis natus nesciunt dolores sequi.\n\nOfficiis voluptatem vel repellat voluptatem optio dolor. Eius officia impedit ut dolorem occaecati. Eaque ad neque labore vel sit qui cupiditate enim.', 'active', '2023-09-22 14:39:32', '2023-09-22 14:39:32'),
(24, 'Et sed provident laborum sit omnis non.', 'Accusantium voluptas commodi qui eaque quia. Corrupti et aspernatur nihil illum eum in ea. Est provident aut eum.\n\nNecessitatibus dicta iusto autem porro. Quibusdam fugit repellendus fugit at neque veritatis. Quasi aut praesentium est fugit nihil. Minus iure necessitatibus quisquam quos consequatur rerum distinctio.', 'active', '2023-09-22 14:39:32', '2023-09-22 14:39:32'),
(25, 'Corporis magni laudantium delectus dicta maxime rem aut.', 'Voluptatem velit rerum autem et molestias illo. Sunt voluptatum optio eligendi quasi. Neque nisi rerum aliquid veritatis nostrum voluptatum.\n\nExplicabo neque sunt est ipsa non debitis veritatis. Perspiciatis id dolores neque provident. Quibusdam aspernatur veniam voluptatem. Est eos voluptates ut quis porro libero. Voluptas in temporibus nesciunt necessitatibus voluptatibus est non.', 'active', '2023-09-22 14:39:33', '2023-09-22 14:39:33'),
(26, 'Earum eveniet cum commodi eum dignissimos veniam.', 'Harum quasi temporibus sit consequuntur fugiat neque officia accusamus. Assumenda assumenda qui maxime molestiae aut facere. Explicabo praesentium inventore itaque amet libero molestiae. Est numquam dolore vel quis nemo.\n\nDolorum alias ex modi sunt fugit qui expedita. Et nisi iure maxime quaerat culpa qui. Perspiciatis beatae iste vero dolorem omnis tempora. Ut debitis ducimus velit ad corrupti nobis.', 'active', '2023-09-22 14:39:33', '2023-09-22 14:39:33'),
(27, 'Eligendi tempora ducimus amet aspernatur.', 'Et non vel fugiat illum a. Dignissimos eum dolorem commodi consequatur. Autem sapiente aut hic facilis id et ad. Est quis eius et esse.\n\nConsectetur voluptatem ipsum dolor ea. Voluptatem beatae distinctio quia omnis. Sapiente earum reiciendis et est.', 'active', '2023-09-22 14:39:33', '2023-09-22 14:39:33'),
(28, 'Sunt voluptatem at ut qui qui eum ducimus ad.', 'Voluptatem quo inventore mollitia quia similique deleniti at. Est reprehenderit aut repellendus corporis est nisi ut. Labore molestias facilis quod neque nostrum vitae.\n\nMaxime et pariatur praesentium. Et aut consequuntur pariatur. Voluptatem voluptatem porro cumque est expedita autem.', 'active', '2023-09-22 14:39:33', '2023-09-22 14:39:33'),
(29, 'Qui quisquam nesciunt quis modi voluptate.', 'Quos corrupti explicabo doloremque nihil. Animi magni exercitationem facere neque. Aut ratione id doloribus commodi tempora. Animi et tenetur quis.\n\nImpedit consequatur dolores saepe amet. Cupiditate nihil ut inventore corrupti labore vel. Deserunt tempore exercitationem quia rerum perspiciatis dolor.', 'active', '2023-09-22 14:39:33', '2023-09-22 14:39:33'),
(30, 'Incidunt neque error culpa est.', 'Et perspiciatis et deleniti qui. Delectus ratione aliquid sequi maxime voluptate perferendis. Aut sint modi officiis facilis voluptatum qui.\n\nAutem et error culpa harum. Ipsa occaecati similique suscipit assumenda. Minus fugiat minima laborum voluptas quia at.', 'active', '2023-09-22 14:39:33', '2023-09-22 14:39:33'),
(31, 'In placeat dolorum eligendi excepturi dolor cupiditate.', 'Libero quidem beatae nobis nesciunt explicabo minus. At consequatur aliquid non maiores possimus. Voluptatem nisi est ea.\n\nQuas ducimus distinctio culpa repellat. Dolor aut earum sint vel qui. Aut cumque temporibus ipsam rem cum aut esse.', 'active', '2023-09-22 14:39:33', '2023-09-22 14:39:33'),
(32, 'Voluptatibus amet est ab tempore aut.', 'Voluptatem vero nesciunt quia est. Modi quisquam mollitia et reiciendis.\n\nUt doloremque veniam est omnis laudantium. Culpa natus excepturi pariatur. Sit est in veniam. Iste nostrum veniam reiciendis officia nesciunt amet.', 'active', '2023-09-22 14:39:33', '2023-09-22 14:39:33'),
(33, 'Ab rerum deserunt quidem officiis pariatur sint minus.', 'Officia consequatur natus maiores quod. Officia voluptatem ut laboriosam qui in sit quas est. Est culpa voluptatem sunt doloremque voluptates placeat. Iure placeat aut qui.\n\nEnim eligendi molestias quod autem dignissimos. Perspiciatis facere et et qui est. Voluptatem similique eum ab vitae. Eveniet rerum nisi est delectus esse saepe dolorem.', 'active', '2023-09-22 14:39:34', '2023-09-22 14:39:34'),
(34, 'Quisquam vel voluptatem iure at qui consequatur amet illum.', 'Voluptatem ducimus voluptate fugiat voluptates labore nulla debitis nostrum. A voluptatum quas eum non.\n\nCorrupti placeat dolore unde non. Ab ut incidunt qui architecto labore et. Animi veniam voluptatibus iure sapiente fugiat velit blanditiis.', 'active', '2023-09-22 14:39:34', '2023-09-22 14:39:34'),
(35, 'A vel ipsam quia rerum eveniet.', 'Explicabo eos dolorem quos officiis ipsa voluptatem qui nemo. Temporibus asperiores quis ex qui asperiores voluptate dolores.\n\nDistinctio temporibus quo non ab odit quod qui. Nulla distinctio dolor qui.', 'active', '2023-09-22 14:39:34', '2023-09-22 14:39:34'),
(36, 'Sit reiciendis optio tenetur itaque ex labore velit.', 'Sit aut repudiandae aspernatur doloribus officia quia consectetur quia. Consectetur fuga qui ut unde in. Est eveniet perferendis quo necessitatibus eos at.\n\nNecessitatibus quibusdam repellendus veniam magni ut. Error sit ea nobis perferendis. Laudantium aut sit dignissimos consectetur et.', 'active', '2023-09-22 14:39:34', '2023-09-22 14:39:34'),
(37, 'Esse voluptate quam praesentium.', 'Itaque dolor et qui sunt qui id et est. Sit est cumque aperiam debitis. Illum velit est minus.\n\nQuas voluptatem laborum quos laborum. Sed ea sit quam laboriosam non repellendus iure. Recusandae qui incidunt repellendus eos perferendis sit qui saepe. Deserunt mollitia earum ex beatae.', 'active', '2023-09-22 14:39:34', '2023-09-22 14:39:34'),
(38, 'Provident excepturi est sunt officia dolores ratione sed culpa.', 'Modi fuga dolores repudiandae ad vero repellat sunt. Facere aut quis aperiam culpa repellendus eos. Alias a ducimus autem delectus libero soluta. Nostrum sit qui aut saepe dicta atque.\n\nRatione commodi qui voluptatibus neque odit nam harum eos. Minima corporis velit sunt ea molestiae numquam non. Soluta sit mollitia non nesciunt asperiores consequuntur doloremque.', 'active', '2023-09-22 14:39:34', '2023-09-22 14:39:34'),
(39, 'Enim nemo enim voluptas culpa blanditiis dicta.', 'Ipsum rerum quis nobis perferendis dolorum consectetur. Quos quia sequi commodi.\n\nDolorem accusantium qui delectus id. Itaque rerum ex veniam qui id ab aut a. Eum quis in necessitatibus minima illo culpa. Illum animi aut minus autem reprehenderit qui autem.', 'active', '2023-09-22 14:39:34', '2023-09-22 14:39:34'),
(40, 'Aliquid et ullam aut aut optio deserunt perspiciatis.', 'Et quae culpa tempore quam dolore magni. Qui omnis ipsam dolore nemo deleniti. Delectus excepturi non optio qui qui enim aut.\n\nIure unde quasi quaerat hic laudantium pariatur. Aut laboriosam odio ad odit accusantium laborum. Ducimus laudantium nesciunt enim facere nobis ipsa. Aut explicabo nisi et magnam.', 'active', '2023-09-22 14:39:35', '2023-09-22 14:39:35'),
(41, 'Ullam hic itaque accusamus accusantium laudantium.', 'Ea non autem velit voluptas. Consequuntur nihil aut magnam reprehenderit et. Fugit est dolorem blanditiis error quod. Iste ut magnam perspiciatis amet atque. Alias harum magnam et aut.\n\nSunt et molestias et occaecati aut. Praesentium dolores dolorem earum amet voluptas aspernatur qui. Odio in exercitationem perspiciatis velit. Harum dignissimos velit laboriosam non minima impedit.', 'active', '2023-09-22 14:39:35', '2023-09-22 14:39:35'),
(42, 'Cupiditate est suscipit quia amet fugit.', 'Sed consectetur deserunt qui quis consequatur. Enim dolorum sed officia incidunt. Ratione officiis ea eveniet deserunt ut officia voluptate alias. Culpa ea earum perspiciatis ab.\n\nProvident ut vitae quia quae. Assumenda sed et magni dolores ex totam quo. Vero facere ut et eius aspernatur.', 'active', '2023-09-22 14:39:35', '2023-09-22 14:39:35'),
(43, 'Sequi est quod autem.', 'Aut qui culpa sunt vel accusamus. Numquam fugiat et id dignissimos saepe eveniet. Nostrum dicta aut facere voluptatem. Nulla asperiores mollitia beatae quae nulla aut maxime.\n\nEst dolorum officia temporibus qui voluptatem. Hic eum aut voluptas modi. Autem eos iure earum. Aperiam voluptatem omnis eveniet perspiciatis rerum at.', 'active', '2023-09-22 14:39:35', '2023-09-22 14:39:35'),
(44, 'Similique voluptatum eos incidunt sed aliquid exercitationem laboriosam neque.', 'Id optio ipsa qui laborum quia maiores voluptatum hic. Officiis unde quia aliquid sint eum assumenda necessitatibus. Et ullam est quia dolores officia.\n\nArchitecto et velit impedit harum qui nemo aut vero. Aut dolorem rerum ipsa velit alias. Ea nisi occaecati fuga expedita. Dolor mollitia voluptates est.', 'active', '2023-09-22 14:39:35', '2023-09-22 14:39:35'),
(45, 'Voluptatibus sint fugiat cum animi ipsum.', 'Aut aut voluptatibus quia tempora sit. Ipsam quidem qui debitis vel in enim voluptatem molestias. Iure deleniti iste velit sit sapiente odio ut.\n\nFacilis aut sint temporibus ipsa et. Maiores voluptatem saepe ex assumenda sapiente tempora. Repellat qui iusto non.', 'active', '2023-09-22 14:39:36', '2023-09-22 14:39:36'),
(46, 'Voluptatem ad libero dolores velit consequatur debitis libero.', 'Aut dignissimos velit ut quas repudiandae. Exercitationem sint consequuntur neque accusantium quaerat quos. Ea commodi non numquam dolor aut sed a magni.\n\nReiciendis distinctio ut consequatur. Molestiae ad et deserunt et sunt. Ullam molestias sed fugit necessitatibus.', 'active', '2023-09-22 14:39:36', '2023-09-22 14:39:36'),
(47, 'Voluptate voluptas sunt ut occaecati nemo soluta.', 'Similique enim consequatur ea blanditiis soluta et qui aliquam. Non quibusdam qui accusantium accusantium beatae nobis. Illum blanditiis quod iusto voluptatibus.\n\nDolorem eum aut voluptatem commodi qui. Quia autem adipisci vel omnis. Aspernatur eaque quod voluptas laboriosam fuga est voluptatem. Illo eos nulla et voluptatem sunt odit. Magnam distinctio suscipit earum id consequatur dolores itaque natus.', 'active', '2023-09-22 14:39:36', '2023-09-22 14:39:36'),
(48, 'Sed asperiores explicabo nam doloribus occaecati a.', 'Quos dolor consequatur natus eligendi at. Aut ea voluptas unde mollitia ut excepturi eveniet. Voluptate est non quis dolor qui.\n\nEligendi aut facere provident eveniet ipsum repudiandae non nesciunt. Qui sequi fuga facilis nihil. Voluptatem quo laudantium adipisci est minus eum. Explicabo quo consequatur numquam.', 'active', '2023-09-22 14:39:36', '2023-09-22 14:39:36'),
(49, 'Reiciendis sint ab voluptatem aut quia omnis sed.', 'Reprehenderit possimus illo accusamus est. Molestias iste et quia earum consequatur quia. Tempora consequuntur nam in qui facilis autem laudantium.\n\nNulla similique asperiores et voluptates. Magnam magni ratione ut magnam incidunt et autem. Et est magnam qui vitae velit.', 'active', '2023-09-22 14:39:36', '2023-09-22 14:39:36'),
(50, 'Quos dolorum a aut provident aspernatur.', 'Ea enim consequatur quia ullam. Aut veritatis blanditiis nihil quas. Dicta est deleniti in quo quasi. Sed doloremque cumque voluptatum in.\n\nIusto quaerat eveniet velit corporis beatae. Excepturi in aliquid placeat in voluptatem ratione. Magni reprehenderit temporibus assumenda. Expedita ut ut nam est eius.', 'active', '2023-09-22 14:39:36', '2023-09-22 14:39:36'),
(51, 'Cumque eum nihil et ea voluptatem mollitia rem.', 'Itaque molestiae deleniti nisi alias inventore. Nobis rerum qui optio in. Occaecati asperiores sint error tempora. Corrupti natus deserunt voluptas adipisci illo.\n\nConsequatur veniam eaque est. Consectetur autem dignissimos nam nostrum ea sed cupiditate. Illum odio ea totam adipisci qui. Exercitationem repudiandae deserunt amet saepe repudiandae quisquam.', 'active', '2023-09-22 14:39:36', '2023-09-22 14:39:36'),
(52, 'Odio illum quod harum et necessitatibus sit impedit.', 'Dolor ut veniam ut et. Ad nihil culpa explicabo molestiae temporibus. Sunt quia rerum itaque aperiam esse natus suscipit. Quasi dolor sit adipisci.\n\nIn quis quia impedit expedita eum quidem porro qui. Aut dolor est enim odio voluptas eius a. Nemo voluptate neque soluta voluptatem sunt.', 'active', '2023-09-22 14:39:37', '2023-09-22 14:39:37'),
(53, 'Dolorem veritatis nemo fuga aliquam quis quae eum.', 'Doloremque molestiae velit omnis reiciendis nam odio dicta amet. Est dolorem beatae in numquam aut ea. Neque autem repudiandae minima debitis qui. Ut error iste libero et quaerat minima.\n\nNihil doloribus nesciunt provident architecto a exercitationem. Non magni et quia similique ut dolore. Id nobis sed incidunt. Impedit quos repellat ut quasi ipsum similique doloremque.', 'active', '2023-09-22 14:39:37', '2023-09-22 14:39:37'),
(54, 'Pariatur eligendi qui et vel rerum officia.', 'Ipsum ut dolores aut autem. Tempore ducimus est ab consectetur et. Iusto tempore ut quidem tempora quo omnis non.\n\nEos molestiae dolor deserunt voluptates quia. Non ex quis enim quisquam a. Qui deleniti amet ducimus ut. Aut ad aut est quibusdam ut voluptas.', 'active', '2023-09-22 14:39:37', '2023-09-22 14:39:37'),
(55, 'Sint consequatur quo ex consequatur pariatur.', 'Vero neque eveniet neque dignissimos delectus. Dolor in in voluptatum et qui officia. Sit voluptatem est consequuntur libero. Impedit occaecati deserunt nulla minus non.\n\nDeserunt doloremque dolor molestiae ab repellendus aut. Voluptatem aut deleniti est et et aut. Officia deleniti ipsa ea et.', 'active', '2023-09-22 14:39:37', '2023-09-22 14:39:37'),
(56, 'Qui tempora ut fuga eos distinctio maxime in.', 'Dolores harum repellendus accusantium consequatur numquam nobis quia nisi. Facere voluptas vel qui aut. Hic dolore ratione omnis sint odio. Repudiandae vel sed id atque.\n\nEt consectetur accusantium animi odit. Vel eum commodi facilis magnam architecto aut. Omnis sit totam veniam est eos nihil sit ut.', 'active', '2023-09-22 14:39:37', '2023-09-22 14:39:37'),
(57, 'Exercitationem hic dolores doloremque aut atque eum.', 'Iusto natus et nisi assumenda ut iusto distinctio. Ut omnis ut consequatur ipsam eum. Hic accusantium unde sint quas sit. Omnis architecto optio ex voluptas reiciendis.\n\nSapiente voluptatem molestias cum provident ut est aut. Quasi ea nulla iusto.', 'active', '2023-09-22 14:39:37', '2023-09-22 14:39:37'),
(58, 'Illo enim animi dolores repellendus qui inventore sit.', 'Dolor est nemo maxime dolorem. Autem atque odio minima sunt. Inventore ut quia officiis eum earum voluptatibus culpa. Commodi aut ut rerum autem.\n\nNemo sed facilis eveniet molestiae sed quibusdam sunt. Atque ipsam vitae neque quis minima consequatur. Commodi est perspiciatis vero velit. Non doloribus deserunt fugiat mollitia reprehenderit rem.', 'active', '2023-09-22 14:39:38', '2023-09-22 14:39:38'),
(59, 'A quo facere iusto omnis est ad blanditiis.', 'Fuga accusamus occaecati molestias et. Nesciunt et enim dolorem nobis libero quis sunt. Rem ut laboriosam ad.\n\nDicta eos dolorum quo soluta. Est facere rerum eos accusamus quis quam et. Blanditiis voluptates saepe neque beatae animi.', 'active', '2023-09-22 14:39:38', '2023-09-22 14:39:38'),
(60, 'Culpa recusandae nobis illum est.', 'Non nisi eius doloribus non. Ipsa nemo blanditiis quia nesciunt tempora commodi. Quo ipsum ab qui mollitia.\n\nSoluta sed aut beatae dolores commodi. Corporis sequi eveniet eligendi maxime aut ut eum. Nihil laudantium dolores occaecati qui suscipit delectus.', 'active', '2023-09-22 14:39:38', '2023-09-22 14:39:38'),
(61, 'Culpa et qui in officia enim saepe blanditiis minus.', 'Ut quas fuga unde repellat et. Excepturi sed sint et.\n\nAccusamus temporibus qui aut deleniti perspiciatis fugiat consequatur qui. Nemo eum voluptatum et et culpa. Quas autem quae est eaque laboriosam et sunt. Sed enim magnam in reprehenderit. Deserunt nostrum aut cum.', 'active', '2023-09-22 14:39:39', '2023-09-22 14:39:39'),
(62, 'Qui minima quia aut veritatis.', 'Iste praesentium sunt ut explicabo rem quisquam sit. Eos vel aspernatur voluptas expedita eum sunt ex. Sint expedita molestiae atque tempora molestias. Itaque laborum quae optio nulla aspernatur.\n\nQuo aut tempore ratione expedita deleniti dolorum voluptas. Commodi dolorem hic dolorem et velit consequatur. In magnam quibusdam sed et molestias et. Et nam laudantium et totam est.', 'active', '2023-09-22 14:39:39', '2023-09-22 14:39:39'),
(63, 'Consequatur temporibus non autem qui.', 'Aliquam officia sapiente vel eos tempore incidunt aperiam. Qui omnis voluptatum qui dolorum. Illum similique laboriosam maiores atque dolorem mollitia.\n\nMollitia totam facilis qui ut et animi. Maxime expedita nihil neque distinctio. Placeat debitis expedita quas ipsam saepe aspernatur. Accusantium molestiae autem esse aut.', 'active', '2023-09-22 14:39:39', '2023-09-22 14:39:39'),
(64, 'Qui dolor at officiis excepturi sunt.', 'Velit in voluptatem fuga accusamus qui quos ea. Est vel ratione in illum inventore. Tempore cum voluptate repudiandae sunt sed sequi. Culpa blanditiis laudantium a recusandae consequatur accusantium.\n\nNesciunt in qui sed placeat in. Dicta cupiditate qui voluptatem commodi. Sit praesentium cupiditate temporibus delectus est quia error.', 'active', '2023-09-22 14:39:39', '2023-09-22 14:39:39'),
(65, 'Consequatur dolore sunt quam labore sunt.', 'Sunt et maxime ea omnis neque qui molestias. Voluptatibus rerum consequatur occaecati doloribus neque tempore. Aut quibusdam qui quo quis modi veritatis temporibus.\n\nQuis necessitatibus fugiat porro voluptatum non rem voluptatibus. Aut et quasi repudiandae ipsa consequatur dolorem. Quos veniam error repudiandae iusto totam.', 'active', '2023-09-22 14:39:39', '2023-09-22 14:39:39'),
(66, 'Id et nihil aspernatur nobis.', 'Facilis aut aperiam dolorum aut blanditiis. Error iste expedita et voluptatum consequatur. Maxime dolores ipsum doloremque minima quo dignissimos sunt.\n\nDolorum consectetur omnis quo. Quia mollitia quis esse impedit. Eos dolor aliquid quibusdam veniam vel nihil qui sunt.', 'active', '2023-09-22 14:39:39', '2023-09-22 14:39:39'),
(67, 'Numquam provident cum saepe itaque possimus repellendus dolorem quod.', 'Non qui iure est consequatur quos. Dolorum iste non maxime hic. Tenetur aut suscipit sit magni exercitationem doloribus. Facilis libero adipisci exercitationem mollitia facere autem assumenda.\n\nLibero velit possimus quo nisi corrupti. Fuga in voluptatem molestiae natus eum eaque. Ut recusandae quis ex occaecati eveniet ipsam. Suscipit odio accusantium maiores delectus repudiandae ut dignissimos.', 'active', '2023-09-22 14:39:40', '2023-09-22 14:39:40'),
(68, 'Possimus ut omnis error eaque molestiae et voluptatem.', 'Ratione animi ut est blanditiis consectetur facilis. Sint in velit debitis facere id.\n\nEt nostrum qui iste. Consectetur eum repudiandae sit fugit excepturi voluptate est. Omnis praesentium aut facilis est nisi molestiae.', 'active', '2023-09-22 14:39:41', '2023-09-22 14:39:41'),
(69, 'Necessitatibus assumenda corrupti porro corporis.', 'Deleniti eos consequuntur rem facere consequatur cum aut. Ut et ut fugiat illum ipsam et mollitia. Incidunt et eaque voluptates reprehenderit autem ullam rerum. Dolor necessitatibus eveniet veniam. Voluptatem consequuntur ut enim tempore maiores repellendus explicabo.\n\nAsperiores quia molestias minus. Ratione quidem est eum itaque. Cum maxime vel unde quo laboriosam illo ducimus.', 'active', '2023-09-22 14:39:41', '2023-09-22 14:39:41'),
(70, 'Laboriosam id ad dolore laboriosam voluptas.', 'Eos tenetur voluptas aperiam dolorem ad. Fugiat a provident qui sed temporibus tempore vitae. Dolor eos eligendi omnis saepe et quia et.\n\nQuibusdam est id magnam. Consequuntur voluptate dolores et quia atque omnis. Quia beatae enim dolorem perferendis. Maiores incidunt dolorem delectus quidem voluptates.', 'active', '2023-09-22 14:39:41', '2023-09-22 14:39:41'),
(71, 'Sint ratione sed velit inventore illo est non.', 'Animi molestiae inventore temporibus et. Ut amet sequi est aut et. Quas deserunt ipsam facilis illum eveniet mollitia deleniti. Ab eius beatae nulla recusandae asperiores quam et.\n\nIste illum rerum vel at consequatur quo eius. Dolor sint eos autem dolor sint. Voluptatibus repellat et nesciunt eligendi nemo. Voluptate ducimus asperiores dignissimos eum. Consectetur beatae eum soluta ipsa et.', 'active', '2023-09-22 14:39:41', '2023-09-22 14:39:41'),
(72, 'Inventore aut vero voluptatibus incidunt laborum repellat.', 'Voluptatem architecto nesciunt assumenda vitae. Consequatur enim et doloribus aut. Minus dicta fugiat dolores. Quis ex dolores quaerat laborum.\n\nPerferendis cum blanditiis velit at molestiae ut fuga. Magnam omnis doloribus quasi vitae corporis iste. Temporibus deleniti laudantium et quia nihil. Enim doloremque dolorum aspernatur iste molestias.', 'active', '2023-09-22 14:39:42', '2023-09-22 14:39:42'),
(73, 'Reprehenderit doloribus voluptas maiores exercitationem ut.', 'Repudiandae ducimus rerum iusto a. Adipisci ipsa minus sit numquam ullam qui eum. Optio quisquam quaerat odit officia. Eos incidunt aut autem debitis repellendus ipsam dignissimos.\n\nQuibusdam cumque in placeat. Veritatis natus cupiditate rerum quisquam dolores cupiditate et.', 'active', '2023-09-22 14:39:42', '2023-09-22 14:39:42'),
(74, 'Error quia dolorem distinctio similique consequuntur ipsum et.', 'Magnam voluptatem sunt consequuntur non. Tempora ut aut a fugiat non. Eveniet quae exercitationem eligendi adipisci ut corporis. Cum voluptas dolor numquam.\n\nAutem quis magnam doloribus. Dolorem animi odio aut et soluta repudiandae. Id provident quidem enim quia voluptas fuga. Quia occaecati odio tempore consequatur ut consequatur.', 'active', '2023-09-22 14:39:42', '2023-09-22 14:39:42'),
(75, 'Dolores nisi qui culpa impedit architecto ut aperiam.', 'Voluptas voluptas et expedita inventore mollitia. Ea et commodi et dolorem. Non et aut adipisci deleniti qui. Accusantium fuga quisquam enim sit et.\n\nNemo enim consequatur voluptatem exercitationem eos ab nihil unde. Est molestiae quo fugit deserunt aut amet. Perspiciatis eaque officiis assumenda rerum odit vitae veniam.', 'active', '2023-09-22 14:39:42', '2023-09-22 14:39:42'),
(76, 'Reprehenderit enim dolor accusamus ut in est soluta.', 'Ut dolores reiciendis dignissimos facilis consequatur ut consequatur. Iste eum tenetur ratione in unde libero a reprehenderit. Ut qui asperiores eveniet voluptates rerum deleniti suscipit. Et amet enim consequatur eum cupiditate distinctio architecto.\n\nMagnam dicta dignissimos numquam est. Quod id dolor nisi illum deserunt officia libero. Perferendis corrupti esse omnis ratione facere voluptatibus eius. Saepe sapiente sed et voluptatem rem.', 'active', '2023-09-22 14:39:43', '2023-09-22 14:39:43'),
(77, 'Fugit distinctio vitae libero ea distinctio laudantium.', 'Deleniti sed magnam voluptatum sint. Officia ex aperiam qui in ut occaecati. Harum tempore alias nisi eveniet aliquam et.\n\nDeserunt et aut sequi temporibus repellat. Ut beatae libero numquam et non sunt. Vel est culpa eum voluptas. Expedita modi enim necessitatibus qui.', 'active', '2023-09-22 14:39:43', '2023-09-22 14:39:43'),
(78, 'Reiciendis excepturi deserunt cupiditate nostrum soluta dicta explicabo est.', 'Dolores quas laudantium ut aut consectetur incidunt. Placeat nesciunt rerum dolore doloremque. Laboriosam eum ullam nihil voluptatibus est occaecati. Ducimus dolorum quo dolore deleniti aut.\n\nConsectetur quia voluptas ut quisquam. Aut quisquam voluptates provident. Ducimus et ab nesciunt eaque quos. Sed odio et eos iste eos eos.', 'active', '2023-09-22 14:39:43', '2023-09-22 14:39:43'),
(79, 'Officiis quae architecto laboriosam incidunt.', 'Natus dicta eum ipsa reiciendis quibusdam. Delectus facilis et exercitationem et modi est incidunt. Qui optio qui temporibus. Distinctio dolor in et et. Nostrum repudiandae a tenetur deleniti et atque veritatis.\n\nError repudiandae aut est neque. Quo et esse consequatur. Tenetur aut soluta cupiditate omnis. Sed eum sed culpa et.', 'active', '2023-09-22 14:39:43', '2023-09-22 14:39:43'),
(80, 'Et atque eos cumque.', 'Qui nostrum et porro ut aspernatur qui. Quisquam dolor et omnis dolor cum. Nihil sint dolores velit sed ut. Recusandae et voluptas dolores quia quo officia magnam.\n\nNesciunt incidunt omnis sunt quos consequatur. Atque autem dicta error repellat. Quia sed repudiandae iure. Consequatur quidem illum velit.', 'active', '2023-09-22 14:39:43', '2023-09-22 14:39:43'),
(81, 'Aliquid molestiae sit laudantium.', 'Necessitatibus delectus ab omnis similique sed porro cum. Illo numquam in praesentium molestias debitis. Quas ut doloribus qui perspiciatis eius inventore ullam sed.\n\nIncidunt non nobis qui tempore fuga. Voluptas aut repudiandae ducimus saepe. Aut dolore a perspiciatis sapiente. Dolor nam aut doloremque culpa maxime qui blanditiis.', 'active', '2023-09-22 14:39:44', '2023-09-22 14:39:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matchs`
--

CREATE TABLE `matchs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `season` varchar(40) NOT NULL,
  `competition_id` bigint(20) UNSIGNED NOT NULL,
  `stadion_id` bigint(20) UNSIGNED NOT NULL,
  `home_team` bigint(20) UNSIGNED NOT NULL,
  `away_team` bigint(20) UNSIGNED NOT NULL,
  `full_time_home_goal` int(11) DEFAULT NULL,
  `full_time_away_goal` int(11) DEFAULT NULL,
  `fixture_match` date NOT NULL,
  `hour` varchar(3) DEFAULT NULL,
  `minute` varchar(3) DEFAULT NULL,
  `full_time_result` enum('W','D','L') NOT NULL,
  `status` varchar(10) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `matchs`
--

INSERT INTO `matchs` (`id`, `slug`, `season`, `competition_id`, `stadion_id`, `home_team`, `away_team`, `full_time_home_goal`, `full_time_away_goal`, `fixture_match`, `hour`, `minute`, `full_time_result`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2023/2024_bundesliga_sv-werder-bremen_vs_fc-bayen-munich_1695305729', '2023/2024', 1, 6, 5, 9, NULL, NULL, '2023-08-19', '01', '30', 'W', 'active', NULL, '2023-09-21 00:15:29', '2023-09-21 00:15:29'),
(2, '2023/2024_bundesliga_fc-bayen-munich_vs_fc-augsburg_1695305852', '2023/2024', 1, 1, 9, 10, NULL, NULL, '2023-08-25', '03', '10', 'W', 'active', NULL, '2023-09-21 00:17:32', '2023-09-21 00:17:32'),
(3, '2023/2024_bundesliga_borussia-monchengladbach_vs_fc-bayen-munich_1695306813', '2023/2024', 1, 19, 12, 9, NULL, NULL, '2023-09-01', '02', '10', 'W', 'active', NULL, '2023-09-21 00:33:33', '2023-09-21 00:33:33'),
(4, '2023/2024_bundesliga_fc-bayen-munich_vs_bayer-04-leverkusen_1695306899', '2023/2024', 1, 1, 9, 14, NULL, NULL, '2023-09-15', '03', '10', 'W', 'active', NULL, '2023-09-21 00:34:59', '2023-09-21 00:34:59'),
(5, '2023/2024_bundesliga_fc-bayen-munich_vs_vfl-bochum-1848_1695306976', '2023/2024', 1, 1, 9, 2, NULL, NULL, '2023-09-22', '02', '10', 'W', 'active', NULL, '2023-09-21 00:36:16', '2023-09-21 00:36:16'),
(6, '2023/2024_bundesliga_rb-leipzig_vs_fc-bayen-munich_1695307062', '2023/2024', 1, 4, 8, 9, NULL, NULL, '2023-09-29', '02', '10', 'W', 'active', NULL, '2023-09-21 00:37:42', '2023-09-21 00:37:42'),
(7, '2023/2024_bundesliga_fc-bayen-munich_vs_sc-freiburg_1695307146', '2023/2024', 1, 1, 9, 7, NULL, NULL, '2023-10-06', '01', '10', 'W', 'active', NULL, '2023-09-21 00:39:06', '2023-09-21 00:39:06'),
(8, '2023/2024_bundesliga_fsv-mainz-05_vs_fc-bayen-munich_1695307191', '2023/2024', 1, 16, 15, 9, NULL, NULL, '2023-10-20', '03', '10', 'W', 'active', NULL, '2023-09-21 00:39:51', '2023-09-21 00:39:51'),
(9, '2023/2024_bundesliga_fc-bayen-munich_vs_sv-darmstadt-98_1695307216', '2023/2024', 1, 1, 9, 6, NULL, NULL, '2023-10-27', '02', '10', 'W', 'active', NULL, '2023-09-21 00:40:16', '2023-09-21 00:40:16'),
(10, '2023/2024_bundesliga_borussia-dortmund_vs_fc-bayen-munich_1695309446', '2023/2024', 1, 10, 13, 9, NULL, NULL, '2023-11-03', '02', '08', 'W', 'active', NULL, '2023-09-21 01:17:26', '2023-09-21 01:17:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `match_galleries`
--

CREATE TABLE `match_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `match_id` bigint(20) UNSIGNED NOT NULL,
  `original` varchar(255) NOT NULL,
  `large` varchar(255) DEFAULT NULL,
  `medium` varchar(255) DEFAULT NULL,
  `small` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `match_lineups`
--

CREATE TABLE `match_lineups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `match_id` bigint(20) UNSIGNED NOT NULL,
  `home_player1` int(11) DEFAULT NULL,
  `home_player2` int(11) DEFAULT NULL,
  `home_player3` int(11) DEFAULT NULL,
  `home_player4` int(11) DEFAULT NULL,
  `home_player5` int(11) DEFAULT NULL,
  `home_player6` int(11) DEFAULT NULL,
  `home_player7` int(11) DEFAULT NULL,
  `home_player8` int(11) DEFAULT NULL,
  `home_player9` int(11) DEFAULT NULL,
  `home_player10` int(11) DEFAULT NULL,
  `home_player11` int(11) DEFAULT NULL,
  `home_player12` int(11) DEFAULT NULL,
  `home_player13` int(11) DEFAULT NULL,
  `home_player14` int(11) DEFAULT NULL,
  `home_player15` int(11) DEFAULT NULL,
  `home_player16` int(11) DEFAULT NULL,
  `away_player1` int(11) DEFAULT NULL,
  `away_player2` int(11) DEFAULT NULL,
  `away_player3` int(11) DEFAULT NULL,
  `away_player4` int(11) DEFAULT NULL,
  `away_player5` int(11) DEFAULT NULL,
  `away_player6` int(11) DEFAULT NULL,
  `away_player7` int(11) DEFAULT NULL,
  `away_player8` int(11) DEFAULT NULL,
  `away_player9` int(11) DEFAULT NULL,
  `away_player10` int(11) DEFAULT NULL,
  `away_player11` int(11) DEFAULT NULL,
  `away_player12` int(11) DEFAULT NULL,
  `away_player13` int(11) DEFAULT NULL,
  `away_player14` int(11) DEFAULT NULL,
  `away_player15` int(11) DEFAULT NULL,
  `away_player16` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `match_reports`
--

CREATE TABLE `match_reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `match_id` bigint(20) UNSIGNED NOT NULL,
  `report` text DEFAULT NULL,
  `original` varchar(255) NOT NULL,
  `medium` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `match_statistics`
--

CREATE TABLE `match_statistics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `match_id` bigint(20) UNSIGNED NOT NULL,
  `home_possession` tinyint(4) NOT NULL DEFAULT 0,
  `home_offsides` tinyint(4) NOT NULL DEFAULT 0,
  `home_fouls` tinyint(4) NOT NULL DEFAULT 0,
  `home_total_shots` tinyint(4) NOT NULL DEFAULT 0,
  `home_shots_on_target` tinyint(4) NOT NULL DEFAULT 0,
  `home_corners` tinyint(4) NOT NULL DEFAULT 0,
  `home_passes` tinyint(4) NOT NULL DEFAULT 0,
  `home_pass_accuracy` tinyint(4) NOT NULL DEFAULT 0,
  `home_crosses` tinyint(4) NOT NULL DEFAULT 0,
  `home_yellow_cards` tinyint(4) NOT NULL DEFAULT 0,
  `home_red_cards` tinyint(4) NOT NULL DEFAULT 0,
  `away_possession` tinyint(4) NOT NULL DEFAULT 0,
  `away_offsides` tinyint(4) NOT NULL DEFAULT 0,
  `away_fouls` tinyint(4) NOT NULL DEFAULT 0,
  `away_total_shots` tinyint(4) NOT NULL DEFAULT 0,
  `away_shots_on_target` tinyint(4) NOT NULL DEFAULT 0,
  `away_corners` tinyint(4) NOT NULL DEFAULT 0,
  `away_passes` tinyint(4) NOT NULL DEFAULT 0,
  `away_pass_accuracy` tinyint(4) NOT NULL DEFAULT 0,
  `away_crosses` tinyint(4) NOT NULL DEFAULT 0,
  `away_yellow_cards` tinyint(4) NOT NULL DEFAULT 0,
  `away_red_cards` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `medias`
--

CREATE TABLE `medias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `rand_id` varchar(255) NOT NULL,
  `published_at` datetime DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 0,
  `status` varchar(10) NOT NULL,
  `body` text NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `original` varchar(255) DEFAULT NULL,
  `large` varchar(255) DEFAULT NULL,
  `medium` varchar(255) DEFAULT NULL,
  `small` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_07_21_204825_create_sessions_table', 1),
(7, '2023_07_21_212136_create_permission_tables', 1),
(8, '2023_07_25_001821_add_columns_to_users_table', 1),
(9, '2023_07_25_021852_create_category_articles_table', 1),
(10, '2023_07_25_022036_create_articles_table', 1),
(11, '2023_07_25_023842_create_competitions_table', 1),
(12, '2023_07_25_030504_create_article_categories_table', 1),
(13, '2023_07_25_032139_create_faqs_table', 1),
(14, '2023_07_25_033802_create_stadions_table', 1),
(15, '2023_07_25_121701_create_countries_table', 1),
(16, '2023_07_26_023857_create_clubs_table', 1),
(17, '2023_07_26_104035_create_positions_table', 1),
(18, '2023_07_27_024015_create_players_table', 1),
(19, '2023_07_28_030256_create_staffs_table', 1),
(20, '2023_07_30_134613_create_schedules_table', 1),
(21, '2023_07_30_134618_create_matchs_table', 1),
(22, '2023_07_30_134619_create_statistics_table', 1),
(23, '2023_07_30_134928_create_match_reports_table', 1),
(24, '2023_07_30_134949_create_match_lineups_table', 1),
(25, '2023_08_02_230711_create_team_league_statistics_table', 1),
(26, '2023_08_03_001417_create_medias_table', 1),
(27, '2023_08_03_001624_create_match_galleries_table', 1),
(28, '2023_08_03_002645_create_awards_table', 1),
(29, '2023_08_03_003430_create_match_statistics_table', 1),
(30, '2023_08_03_024400_create_contacts_table', 1),
(31, '2023_08_04_144513_create_settings_table', 1),
(32, '2023_08_04_145148_create_slides_table', 1),
(33, '2023_08_05_035853_create_newsletter_subscribers_table', 1),
(34, '2023_08_19_041937_create_comments_table', 1),
(35, '2023_08_21_033915_create_partners_table', 1),
(36, '2023_08_21_035807_create_advertising_segments_table', 1),
(37, '2023_08_21_035929_create_advertisings_table', 1),
(38, '2023_08_31_111506_add_columns_in_schedules_table', 1),
(39, '2023_09_01_132454_create_activity_log_table', 1),
(40, '2023_09_01_132455_add_event_column_to_activity_log_table', 1),
(41, '2023_09_01_132456_add_batch_uuid_column_to_activity_log_table', 1),
(42, '2023_09_08_151421_add_columns_in_match_statistics_table', 1),
(43, '2023_09_08_181748_create_trix_rich_texts_table', 1),
(44, '2023_09_11_105847_add_columns_in_players_table', 1),
(45, '2023_09_12_003013_create_categories_table', 1),
(46, '2023_09_14_154837_create_brands_table', 1),
(47, '2023_09_14_155159_create_products_table', 1),
(48, '2023_09_14_155215_create_attributes_table', 1),
(49, '2023_09_14_155744_create_product_attribute_values_table', 1),
(50, '2023_09_14_160046_create_product_inventories_table', 1),
(51, '2023_09_14_160125_create_product_categories_table', 1),
(52, '2023_09_14_160146_create_product_images_table', 1),
(53, '2023_09_14_160454_create_attribute_options_table', 1),
(54, '2023_09_14_160512_create_orders_table', 1),
(55, '2023_09_14_160600_create_product_brands_table', 1),
(56, '2023_09_14_160625_create_order_items_table', 1),
(57, '2023_09_14_160639_create_shipments_table', 1),
(58, '2023_09_14_161104_create_carts_table', 1),
(59, '2023_09_14_161201_create_order_details_table', 1),
(60, '2023_09_14_161351_create_product_slides_table', 1),
(61, '2023_09_22_153001_create_trophies_table', 1),
(62, '2023_09_22_224354_add_column_in_players_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `newsletter_subscribers`
--

CREATE TABLE `newsletter_subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `opened` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `order_date` datetime NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `payment_method` varchar(100) NOT NULL,
  `order_amount` double(8,2) NOT NULL,
  `payment_due` datetime NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `coupon_code` varchar(255) DEFAULT NULL,
  `order_type` varchar(255) NOT NULL DEFAULT 'default_type',
  `payment_token` varchar(255) DEFAULT NULL,
  `payment_url` varchar(255) DEFAULT NULL,
  `base_total_price` decimal(16,2) NOT NULL DEFAULT 0.00,
  `tax_amount` decimal(16,2) NOT NULL DEFAULT 0.00,
  `tax_percent` decimal(16,2) NOT NULL DEFAULT 0.00,
  `discount_amount` decimal(16,2) NOT NULL DEFAULT 0.00,
  `extra_discount` double(8,2) NOT NULL DEFAULT 0.00,
  `extra_discount_type` varchar(255) DEFAULT NULL,
  `discount_percent` decimal(16,2) NOT NULL DEFAULT 0.00,
  `shipping_cost` decimal(16,2) NOT NULL DEFAULT 0.00,
  `grand_total` decimal(16,2) NOT NULL DEFAULT 0.00,
  `note` text DEFAULT NULL,
  `customer_first_name` varchar(255) NOT NULL,
  `customer_last_name` varchar(255) NOT NULL,
  `customer_address1` varchar(255) DEFAULT NULL,
  `customer_address2` varchar(255) DEFAULT NULL,
  `customer_phone` varchar(255) DEFAULT NULL,
  `customer_email` varchar(255) DEFAULT NULL,
  `customer_city_id` varchar(255) DEFAULT NULL,
  `customer_province_id` varchar(255) DEFAULT NULL,
  `customer_postcode` int(11) DEFAULT NULL,
  `shipping_courier` varchar(255) DEFAULT NULL,
  `shipping_service_name` varchar(255) DEFAULT NULL,
  `approved_by` bigint(20) UNSIGNED DEFAULT NULL,
  `approved_at` datetime DEFAULT NULL,
  `cancelled_by` bigint(20) UNSIGNED DEFAULT NULL,
  `cancelled_at` datetime DEFAULT NULL,
  `cancellation_note` text DEFAULT NULL,
  `checked` tinyint(1) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `product_detail` text NOT NULL,
  `qty` int(11) NOT NULL DEFAULT 0,
  `price` double NOT NULL DEFAULT 0,
  `tax` double NOT NULL DEFAULT 0,
  `discount` double NOT NULL DEFAULT 0,
  `delivery_status` varchar(255) NOT NULL DEFAULT 'pending',
  `payment_status` varchar(255) NOT NULL DEFAULT 'unpaid',
  `shipping_method_id` bigint(20) DEFAULT NULL,
  `variant` varchar(255) DEFAULT NULL,
  `variation` varchar(255) DEFAULT NULL,
  `discount_type` varchar(255) DEFAULT NULL,
  `is_stock_decreased` tinyint(1) NOT NULL DEFAULT 1,
  `refund_request` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `order_items`
--

CREATE TABLE `order_items` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `base_price` decimal(16,2) NOT NULL DEFAULT 0.00,
  `base_total` decimal(16,2) NOT NULL DEFAULT 0.00,
  `tax_amount` decimal(16,2) NOT NULL DEFAULT 0.00,
  `tax_percent` decimal(16,2) NOT NULL DEFAULT 0.00,
  `discount_amount` decimal(16,2) NOT NULL DEFAULT 0.00,
  `discount_percent` decimal(16,2) NOT NULL DEFAULT 0.00,
  `sub_total` decimal(16,2) NOT NULL DEFAULT 0.00,
  `sku` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `attributes` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `original` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `partners`
--

INSERT INTO `partners` (`id`, `title`, `original`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Adobe', 'images/Adobe_Corporate_25px.svg', 'active', '2023-09-22 14:34:05', NULL),
(2, 'Allianz', 'images/Allianz.svg', 'active', '2023-09-22 14:34:05', NULL),
(3, 'Audi', 'images/Audi.svg', 'active', '2023-09-22 14:34:05', NULL),
(4, 'Konami', 'images/Konami.svg', 'active', '2023-09-22 14:34:05', NULL),
(5, 'Libertex', 'images/Libertex.svg', 'active', '2023-09-22 14:34:05', NULL),
(6, 'Adidas', 'images/neu-Adidas.svg', 'active', '2023-09-22 14:34:05', NULL),
(7, 'Viesmann', 'images/Viesmann-02.svg', 'active', '2023-09-22 14:34:05', NULL),
(8, 'Sap', 'images/Sap.svg', 'active', '2023-09-22 14:34:05', NULL),
(9, 'Telekom', 'images/Telekom.svg', 'active', '2023-09-22 14:34:05', NULL),
(10, 'Tipico', 'images/Tipico.svg', 'active', '2023-09-22 14:34:05', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'add-competition', 'web', '2023-09-22 14:34:07', '2023-09-22 14:34:07'),
(2, 'edit-competition', 'web', '2023-09-22 14:34:07', '2023-09-22 14:34:07'),
(3, 'delete-competition', 'web', '2023-09-22 14:34:08', '2023-09-22 14:34:08'),
(4, 'add-award', 'web', '2023-09-22 14:34:08', '2023-09-22 14:34:08'),
(5, 'edit-award', 'web', '2023-09-22 14:34:08', '2023-09-22 14:34:08'),
(6, 'delete-award', 'web', '2023-09-22 14:34:08', '2023-09-22 14:34:08'),
(7, 'add-club', 'web', '2023-09-22 14:34:08', '2023-09-22 14:34:08'),
(8, 'edit-club', 'web', '2023-09-22 14:34:08', '2023-09-22 14:34:08'),
(9, 'delete-club', 'web', '2023-09-22 14:34:08', '2023-09-22 14:34:08'),
(10, 'add-stadion', 'web', '2023-09-22 14:34:08', '2023-09-22 14:34:08'),
(11, 'edit-stadion', 'web', '2023-09-22 14:34:08', '2023-09-22 14:34:08'),
(12, 'delete-stadion', 'web', '2023-09-22 14:34:08', '2023-09-22 14:34:08'),
(13, 'add-player', 'web', '2023-09-22 14:34:09', '2023-09-22 14:34:09'),
(14, 'edit-player', 'web', '2023-09-22 14:34:09', '2023-09-22 14:34:09'),
(15, 'delete-player', 'web', '2023-09-22 14:34:09', '2023-09-22 14:34:09'),
(16, 'add-staff', 'web', '2023-09-22 14:34:09', '2023-09-22 14:34:09'),
(17, 'edit-staff', 'web', '2023-09-22 14:34:09', '2023-09-22 14:34:09'),
(18, 'delete-staff', 'web', '2023-09-22 14:34:09', '2023-09-22 14:34:09'),
(19, 'add-position', 'web', '2023-09-22 14:34:09', '2023-09-22 14:34:09'),
(20, 'edit-position', 'web', '2023-09-22 14:34:09', '2023-09-22 14:34:09'),
(21, 'delete-position', 'web', '2023-09-22 14:34:09', '2023-09-22 14:34:09'),
(22, 'add-squad', 'web', '2023-09-22 14:34:10', '2023-09-22 14:34:10'),
(23, 'edit-squad', 'web', '2023-09-22 14:34:10', '2023-09-22 14:34:10'),
(24, 'delete-squad', 'web', '2023-09-22 14:34:10', '2023-09-22 14:34:10'),
(25, 'add-partner', 'web', '2023-09-22 14:34:10', '2023-09-22 14:34:10'),
(26, 'edit-partner', 'web', '2023-09-22 14:34:10', '2023-09-22 14:34:10'),
(27, 'delete-partner', 'web', '2023-09-22 14:34:10', '2023-09-22 14:34:10'),
(28, 'add-schedule', 'web', '2023-09-22 14:34:10', '2023-09-22 14:34:10'),
(29, 'edit-schedule', 'web', '2023-09-22 14:34:10', '2023-09-22 14:34:10'),
(30, 'delete-schedule', 'web', '2023-09-22 14:34:10', '2023-09-22 14:34:10'),
(31, 'add-match', 'web', '2023-09-22 14:34:10', '2023-09-22 14:34:10'),
(32, 'edit-match', 'web', '2023-09-22 14:34:11', '2023-09-22 14:34:11'),
(33, 'delete-match', 'web', '2023-09-22 14:34:11', '2023-09-22 14:34:11'),
(34, 'add-league', 'web', '2023-09-22 14:34:11', '2023-09-22 14:34:11'),
(35, 'edit-league', 'web', '2023-09-22 14:34:11', '2023-09-22 14:34:11'),
(36, 'delete-league', 'web', '2023-09-22 14:34:11', '2023-09-22 14:34:11'),
(37, 'add-team-league', 'web', '2023-09-22 14:34:11', '2023-09-22 14:34:11'),
(38, 'edit-team-league', 'web', '2023-09-22 14:34:11', '2023-09-22 14:34:11'),
(39, 'delete-team-league', 'web', '2023-09-22 14:34:11', '2023-09-22 14:34:11'),
(40, 'add-article', 'web', '2023-09-22 14:34:11', '2023-09-22 14:34:11'),
(41, 'edit-article', 'web', '2023-09-22 14:34:12', '2023-09-22 14:34:12'),
(42, 'delete-article', 'web', '2023-09-22 14:34:12', '2023-09-22 14:34:12'),
(43, 'add-category-article', 'web', '2023-09-22 14:34:12', '2023-09-22 14:34:12'),
(44, 'edit-category-article', 'web', '2023-09-22 14:34:12', '2023-09-22 14:34:12'),
(45, 'delete-category-article', 'web', '2023-09-22 14:34:12', '2023-09-22 14:34:12'),
(46, 'add-media', 'web', '2023-09-22 14:34:12', '2023-09-22 14:34:12'),
(47, 'edit-media', 'web', '2023-09-22 14:34:12', '2023-09-22 14:34:12'),
(48, 'delete-media', 'web', '2023-09-22 14:34:12', '2023-09-22 14:34:12'),
(49, 'add-segment', 'web', '2023-09-22 14:34:12', '2023-09-22 14:34:12'),
(50, 'edit-segment', 'web', '2023-09-22 14:34:12', '2023-09-22 14:34:12'),
(51, 'delete-segment', 'web', '2023-09-22 14:34:12', '2023-09-22 14:34:12'),
(52, 'add-adv', 'web', '2023-09-22 14:34:13', '2023-09-22 14:34:13'),
(53, 'edit-adv', 'web', '2023-09-22 14:34:13', '2023-09-22 14:34:13'),
(54, 'delete-adv', 'web', '2023-09-22 14:34:13', '2023-09-22 14:34:13'),
(55, 'add-user', 'web', '2023-09-22 14:34:13', '2023-09-22 14:34:13'),
(56, 'edit-user', 'web', '2023-09-22 14:34:13', '2023-09-22 14:34:13'),
(57, 'delete-user', 'web', '2023-09-22 14:34:13', '2023-09-22 14:34:13'),
(58, 'add-setting', 'web', '2023-09-22 14:34:13', '2023-09-22 14:34:13'),
(59, 'edit-setting', 'web', '2023-09-22 14:34:13', '2023-09-22 14:34:13'),
(60, 'delete-setting', 'web', '2023-09-22 14:34:13', '2023-09-22 14:34:13'),
(61, 'add-role', 'web', '2023-09-22 14:34:13', '2023-09-22 14:34:13'),
(62, 'edit-role', 'web', '2023-09-22 14:34:13', '2023-09-22 14:34:13'),
(63, 'delete-role', 'web', '2023-09-22 14:34:13', '2023-09-22 14:34:13'),
(64, 'add-permission', 'web', '2023-09-22 14:34:14', '2023-09-22 14:34:14'),
(65, 'edit-permission', 'web', '2023-09-22 14:34:14', '2023-09-22 14:34:14'),
(66, 'delete-permission', 'web', '2023-09-22 14:34:14', '2023-09-22 14:34:14'),
(67, 'add-faq', 'web', '2023-09-22 14:34:14', '2023-09-22 14:34:14'),
(68, 'edit-faq', 'web', '2023-09-22 14:34:14', '2023-09-22 14:34:14'),
(69, 'delete-faq', 'web', '2023-09-22 14:34:14', '2023-09-22 14:34:14'),
(70, 'add-slide', 'web', '2023-09-22 14:34:14', '2023-09-22 14:34:14'),
(71, 'edit-slide', 'web', '2023-09-22 14:34:14', '2023-09-22 14:34:14'),
(72, 'delete-slide', 'web', '2023-09-22 14:34:14', '2023-09-22 14:34:14'),
(73, 'add-category', 'web', '2023-09-22 14:34:14', '2023-09-22 14:34:14'),
(74, 'edit-category', 'web', '2023-09-22 14:34:15', '2023-09-22 14:34:15'),
(75, 'delete-category', 'web', '2023-09-22 14:34:15', '2023-09-22 14:34:15'),
(76, 'add-brand', 'web', '2023-09-22 14:34:15', '2023-09-22 14:34:15'),
(77, 'edit-brand', 'web', '2023-09-22 14:34:15', '2023-09-22 14:34:15'),
(78, 'delete-brand', 'web', '2023-09-22 14:34:15', '2023-09-22 14:34:15'),
(79, 'add-product', 'web', '2023-09-22 14:34:15', '2023-09-22 14:34:15'),
(80, 'edit-product', 'web', '2023-09-22 14:34:15', '2023-09-22 14:34:15'),
(81, 'delete-product', 'web', '2023-09-22 14:34:16', '2023-09-22 14:34:16'),
(82, 'add-attribute', 'web', '2023-09-22 14:34:16', '2023-09-22 14:34:16'),
(83, 'edit-attribute', 'web', '2023-09-22 14:34:16', '2023-09-22 14:34:16'),
(84, 'delete-attribute', 'web', '2023-09-22 14:34:16', '2023-09-22 14:34:16'),
(85, 'add-product-slide', 'web', '2023-09-22 14:34:16', '2023-09-22 14:34:16'),
(86, 'edit-product-slide', 'web', '2023-09-22 14:34:16', '2023-09-22 14:34:16'),
(87, 'delete-product-slide', 'web', '2023-09-22 14:34:16', '2023-09-22 14:34:16'),
(88, 'add-basket', 'web', '2023-09-22 14:34:16', '2023-09-22 14:34:16'),
(89, 'edit-basket', 'web', '2023-09-22 14:34:16', '2023-09-22 14:34:16'),
(90, 'delete-basket', 'web', '2023-09-22 14:34:16', '2023-09-22 14:34:16'),
(91, 'add-order', 'web', '2023-09-22 14:34:17', '2023-09-22 14:34:17'),
(92, 'edit-order', 'web', '2023-09-22 14:34:17', '2023-09-22 14:34:17'),
(93, 'delete-order', 'web', '2023-09-22 14:34:17', '2023-09-22 14:34:17'),
(94, 'add-shipment', 'web', '2023-09-22 14:34:17', '2023-09-22 14:34:17'),
(95, 'edit-shipment', 'web', '2023-09-22 14:34:17', '2023-09-22 14:34:17'),
(96, 'delete-shipment', 'web', '2023-09-22 14:34:17', '2023-09-22 14:34:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `players`
--

CREATE TABLE `players` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `club_id` bigint(20) UNSIGNED NOT NULL,
  `level` enum('senior','u20','u16') NOT NULL DEFAULT 'senior',
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `gender` enum('men','women') NOT NULL DEFAULT 'men',
  `birth_date` date DEFAULT NULL,
  `birth_location` varchar(255) DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `height` tinyint(4) DEFAULT NULL,
  `weight` tinyint(4) DEFAULT NULL,
  `prefered_foot` varchar(255) DEFAULT NULL,
  `contract_from` date DEFAULT NULL,
  `contract_until` date DEFAULT NULL,
  `shirt_number` tinyint(4) DEFAULT NULL,
  `position_id` bigint(20) UNSIGNED DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `original` varchar(255) DEFAULT NULL,
  `large` varchar(255) DEFAULT NULL,
  `medium` varchar(255) DEFAULT NULL,
  `small` varchar(255) DEFAULT NULL,
  `status` varchar(10) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `players`
--

INSERT INTO `players` (`id`, `club_id`, `level`, `name`, `slug`, `gender`, `birth_date`, `birth_location`, `country_id`, `bio`, `height`, `weight`, `prefered_foot`, `contract_from`, `contract_until`, `shirt_number`, `position_id`, `facebook`, `instagram`, `twitter`, `original`, `large`, `medium`, `small`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 9, 'senior', 'Manuel Neuer', 'manuel-neuer', 'men', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:03', NULL),
(2, 9, 'senior', 'Sven Ulrich', 'sven-ulrich', 'men', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 26, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:03', NULL),
(3, 9, 'senior', 'Yann Sommer', 'yann-sommer', 'men', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 27, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:03', NULL),
(4, 9, 'senior', 'Dayot Upamecano', 'dayot-upamecano', 'men', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:03', NULL),
(5, 9, 'senior', 'Kim Minjae', 'kim-minjae', 'men', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:03', NULL),
(6, 9, 'senior', 'Matthijs de Ligt', 'matthijs-de-ligt', 'men', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:03', NULL),
(7, 9, 'senior', 'Benjamin Pavard', 'benjamin-pavard', 'men', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:03', NULL),
(8, 9, 'senior', 'Alphonso Davies', 'alphonso-davies', 'men', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 19, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:03', NULL),
(9, 9, 'senior', 'Bouna Sarr', 'bouna-sarr', 'men', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 20, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:03', NULL),
(10, 9, 'senior', 'Raphael Guerreiro', 'raphael-guerreiro', 'men', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 22, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:03', NULL),
(11, 9, 'senior', 'Noussair Mazraoui', 'noussair-mazraoui', 'men', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 40, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:03', NULL),
(12, 9, 'senior', 'Josip Stanisic', 'josip-stanisic', 'men', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 44, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:03', NULL),
(13, 9, 'senior', 'Joshua Kimmich', 'joshua-kimmich', 'men', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:03', NULL),
(14, 9, 'senior', 'Leon Goretzka', 'leon-goretzka', 'men', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 8, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:03', NULL),
(15, 9, 'senior', 'Paul Wanner', 'paul-wanner', 'men', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 14, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:03', NULL),
(16, 9, 'senior', 'Ryan Gravenberch', 'ryan-gravenberch', 'men', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 38, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:03', NULL),
(17, 9, 'senior', 'Jamal Musiala', 'jamal-musiala', 'men', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 42, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:03', NULL),
(18, 9, 'senior', 'Konrad Laimer', 'konrad-laimer', 'men', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 27, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:03', NULL),
(19, 9, 'senior', 'Serge Gnabry', 'serge-gnabry', 'men', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:03', NULL),
(20, 9, 'senior', 'Harry Kane', 'harry-kane', 'men', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:03', NULL),
(21, 9, 'senior', 'Leroy Sane', 'leroy-sane', 'men', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:03', NULL),
(22, 9, 'senior', 'Kingsley Coman', 'kingsley-coman', 'men', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 11, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:03', NULL),
(23, 9, 'senior', 'Eric Maxim Choupo-Moting', 'eric-maxim-choupo-moting', 'men', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 13, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:03', NULL),
(24, 9, 'senior', 'Thomas Muller', 'thomas-muller', 'men', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 25, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:03', NULL),
(25, 9, 'senior', 'Gabriel Vidovic', 'gabriel-vidovic', 'men', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 32, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:03', NULL),
(26, 9, 'senior', 'Mathys Tel', 'mathys-tel', 'men', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 39, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:03', NULL),
(27, 9, 'senior', 'Arjon Ibrahimovic', 'arjon-ibrahimovic', 'men', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 46, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:03', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `positions`
--

CREATE TABLE `positions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `positions`
--

INSERT INTO `positions` (`id`, `parent_id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Goalkeeper', 'goalkeeper', '2023-09-22 14:34:03', NULL),
(2, NULL, 'Defender', 'defender', '2023-09-22 14:34:03', NULL),
(3, NULL, 'Midfielder', 'midfielder', '2023-09-22 14:34:03', NULL),
(4, NULL, 'Attacker', 'attacker', '2023-09-22 14:34:03', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rand_id` varchar(255) NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `sku` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `published` tinyint(4) NOT NULL DEFAULT 0,
  `discount_type` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `price` decimal(15,2) DEFAULT NULL,
  `discount` decimal(15,2) DEFAULT NULL,
  `weight` decimal(10,2) DEFAULT NULL,
  `width` decimal(10,2) DEFAULT NULL,
  `height` decimal(10,2) DEFAULT NULL,
  `length` decimal(10,2) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_attribute_values`
--

CREATE TABLE `product_attribute_values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `parent_product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `attribute_id` bigint(20) UNSIGNED NOT NULL,
  `text_value` text DEFAULT NULL,
  `boolean_value` tinyint(1) DEFAULT NULL,
  `integer_value` int(11) DEFAULT NULL,
  `float_value` decimal(8,2) DEFAULT NULL,
  `datetime_value` datetime DEFAULT NULL,
  `date_value` date DEFAULT NULL,
  `json_value` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_brands`
--

CREATE TABLE `product_brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `original` varchar(255) DEFAULT NULL,
  `large` varchar(255) DEFAULT NULL,
  `medium` varchar(255) DEFAULT NULL,
  `small` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_inventories`
--

CREATE TABLE `product_inventories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `product_slides`
--

CREATE TABLE `product_slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `position` int(11) NOT NULL DEFAULT 0,
  `status` varchar(255) NOT NULL,
  `body` text DEFAULT NULL,
  `original` varchar(255) DEFAULT NULL,
  `extra_large` varchar(255) DEFAULT NULL,
  `small` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2023-09-22 14:34:01', '2023-09-22 14:34:01'),
(2, 'author', 'web', '2023-09-22 14:34:06', '2023-09-22 14:34:06'),
(3, 'sales', 'web', '2023-09-22 14:34:07', '2023-09-22 14:34:07'),
(4, 'manager', 'web', '2023-09-22 14:34:07', '2023-09-22 14:34:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 2),
(41, 2),
(42, 2),
(43, 2),
(44, 2),
(45, 2),
(46, 2),
(47, 2),
(48, 2),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 2),
(68, 2),
(69, 2),
(70, 2),
(71, 2),
(72, 2),
(73, 3),
(74, 3),
(75, 3),
(76, 3),
(77, 3),
(78, 3),
(79, 3),
(80, 3),
(81, 3),
(82, 3),
(83, 3),
(84, 3),
(85, 3),
(86, 3),
(87, 3),
(88, 3),
(89, 3),
(90, 3),
(91, 3),
(92, 3),
(93, 3),
(94, 3),
(95, 3),
(96, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `season` varchar(40) NOT NULL,
  `competition_id` bigint(20) UNSIGNED NOT NULL,
  `stadion_id` bigint(20) UNSIGNED NOT NULL,
  `home_team` bigint(20) UNSIGNED NOT NULL,
  `away_team` bigint(20) UNSIGNED NOT NULL,
  `full_time_home_goal` int(11) DEFAULT NULL,
  `full_time_away_goal` int(11) DEFAULT NULL,
  `fixture_match` date NOT NULL,
  `hour` varchar(3) DEFAULT NULL,
  `minute` varchar(3) DEFAULT NULL,
  `status` varchar(10) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `schedules`
--

INSERT INTO `schedules` (`id`, `slug`, `season`, `competition_id`, `stadion_id`, `home_team`, `away_team`, `full_time_home_goal`, `full_time_away_goal`, `fixture_match`, `hour`, `minute`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '2023/2024_bundesliga_sv-werder-bremen_vs_fc-bayen-munich_1695305729', '2023/2024', 1, 6, 5, 9, NULL, NULL, '2023-08-19', '01', '30', 'active', NULL, '2023-09-21 00:15:29', '2023-09-21 00:15:29'),
(2, '2023/2024_bundesliga_fc-bayen-munich_vs_fc-augsburg_1695305852', '2023/2024', 1, 1, 9, 10, NULL, NULL, '2023-08-25', '03', '10', 'active', NULL, '2023-09-21 00:17:32', '2023-09-21 00:17:32'),
(3, '2023/2024_bundesliga_borussia-monchengladbach_vs_fc-bayen-munich_1695306813', '2023/2024', 1, 19, 12, 9, NULL, NULL, '2023-09-01', '02', '10', 'active', NULL, '2023-09-21 00:33:33', '2023-09-21 00:33:33'),
(4, '2023/2024_bundesliga_fc-bayen-munich_vs_bayer-04-leverkusen_1695306899', '2023/2024', 1, 1, 9, 14, NULL, NULL, '2023-09-15', '03', '10', 'active', NULL, '2023-09-21 00:34:59', '2023-09-21 00:34:59'),
(5, '2023/2024_bundesliga_fc-bayen-munich_vs_vfl-bochum-1848_1695306976', '2023/2024', 1, 1, 9, 2, NULL, NULL, '2023-09-22', '02', '10', 'active', NULL, '2023-09-21 00:36:16', '2023-09-21 00:36:16'),
(6, '2023/2024_bundesliga_rb-leipzig_vs_fc-bayen-munich_1695307062', '2023/2024', 1, 4, 8, 9, NULL, NULL, '2023-09-29', '02', '10', 'active', NULL, '2023-09-21 00:37:42', '2023-09-21 00:37:42'),
(7, '2023/2024_bundesliga_fc-bayen-munich_vs_sc-freiburg_1695307146', '2023/2024', 1, 1, 9, 7, NULL, NULL, '2023-10-06', '01', '10', 'active', NULL, '2023-09-21 00:39:06', '2023-09-21 00:39:06'),
(8, '2023/2024_bundesliga_fsv-mainz-05_vs_fc-bayen-munich_1695307191', '2023/2024', 1, 16, 15, 9, NULL, NULL, '2023-10-20', '03', '10', 'active', NULL, '2023-09-21 00:39:51', '2023-09-21 00:39:51'),
(9, '2023/2024_bundesliga_fc-bayen-munich_vs_sv-darmstadt-98_1695307216', '2023/2024', 1, 1, 9, 6, NULL, NULL, '2023-10-27', '02', '10', 'active', NULL, '2023-09-21 00:40:16', '2023-09-21 00:40:16'),
(10, '2023/2024_bundesliga_borussia-dortmund_vs_fc-bayen-munich_1695309446', '2023/2024', 1, 10, 13, 9, NULL, NULL, '2023-11-03', '02', '08', 'active', NULL, '2023-09-21 01:17:26', '2023-09-21 01:17:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
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
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('UwVfIqdqlQypt835J5540wjZrSPgDqewRDtf0rcq', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiUmN0Uk5mOFQ2bEpIRFkyN0FVTFc5STJRTXhOQjNmSmRXVFFxbFhpNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9zcXVhZHMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJFU0aVZwYW5VbHZqc3JtRFdpaXFmUWVtWU1qR1dPbHVTdkJDTVl6Z2lzdklsQ3JxbmsyamtPIjt9', 1695422367);

-- --------------------------------------------------------

--
-- Struktur dari tabel `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `description` longtext NOT NULL,
  `short_des` text NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `original` varchar(255) DEFAULT NULL,
  `medium` varchar(255) DEFAULT NULL,
  `small` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pinned_club` int(11) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `settings`
--

INSERT INTO `settings` (`id`, `title`, `meta_description`, `meta_keyword`, `description`, `short_des`, `icon`, `original`, `medium`, `small`, `address`, `phone`, `email`, `pinned_club`, `twitter`, `facebook`, `instagram`, `created_at`, `updated_at`) VALUES
(1, 'Bayern Munchen', 'lorem ipsum dolor sit amet', 'bla bla bla bla', 'lorem ipsum dolor sit amet', 'lorem ipsum dolor sit amet', NULL, NULL, NULL, NULL, 'lorem ipsum dolor sit amet', '08885885544', 'admin@mail.com', 9, '@fcbayern', '@fcbayern', '@fcbayern', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `shipments`
--

CREATE TABLE `shipments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `track_number` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `total_qty` int(11) NOT NULL,
  `total_weight` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `city_id` varchar(255) DEFAULT NULL,
  `province_id` varchar(255) DEFAULT NULL,
  `postcode` int(11) DEFAULT NULL,
  `shipped_by` bigint(20) UNSIGNED DEFAULT NULL,
  `shipped_at` datetime DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `position` int(11) NOT NULL DEFAULT 0,
  `status` varchar(255) NOT NULL,
  `body` text DEFAULT NULL,
  `original` varchar(255) DEFAULT NULL,
  `extra_large` varchar(255) DEFAULT NULL,
  `small` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stadions`
--

CREATE TABLE `stadions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `capacity` int(11) DEFAULT NULL,
  `seat_quality` enum('full kursi','tanpa kursi','campuran') NOT NULL,
  `vip` enum('yes','no') NOT NULL,
  `original` varchar(255) DEFAULT NULL,
  `large` varchar(255) DEFAULT NULL,
  `medium` varchar(255) DEFAULT NULL,
  `small` varchar(255) DEFAULT NULL,
  `status` varchar(10) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `stadions`
--

INSERT INTO `stadions` (`id`, `name`, `slug`, `city`, `capacity`, `seat_quality`, `vip`, `original`, `large`, `medium`, `small`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Allianz Arena', 'allianz-arena', 'munich', 75000, 'full kursi', 'yes', NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:02', NULL),
(2, 'Signal Iduna Park', 'signal-iduna-park', 'dortmund', 81365, 'full kursi', 'yes', NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:02', NULL),
(3, 'Bay Arena', 'bay-arena', 'leverkusen', 30210, 'full kursi', 'yes', NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:02', NULL),
(4, 'Red Bull Arena', 'red-bull-arena', 'leipzig', 47069, 'full kursi', 'yes', NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:02', NULL),
(5, 'Stadion An der Alten Forsterei', 'stadion-an-der-alten-forsterei', 'berlin', 22012, 'full kursi', 'yes', NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:02', NULL),
(6, 'Europa Park Stadion', 'europa-park-stadion', 'freiburg', 34700, 'full kursi', 'yes', NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:02', NULL),
(7, 'RheinEnergieStadion', 'rheinEnergieStadion', 'cologne', 50000, 'full kursi', 'yes', NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:02', NULL),
(8, 'Mewa Arena', 'mewa-arena', 'mainz', 33305, 'full kursi', 'yes', NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:02', NULL),
(9, 'Prezero Arena', 'prezero-arena', 'hoffenheim', 30150, 'full kursi', 'yes', NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:02', NULL),
(10, 'Borussia Park', 'borussia-park', 'monchengladbach', 54057, 'full kursi', 'yes', NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:02', NULL),
(11, 'Deutshe Bank Park', 'deutshe-bank-park', 'frankfurt', 51500, 'full kursi', 'yes', NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:02', NULL),
(12, 'Volkswagen Arena', 'volkswagen-arena', 'wolfsburg', 30000, 'full kursi', 'yes', NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:02', NULL),
(13, 'Vonovia Ruhrstadion', 'vonovia-ruhrstadion', 'bochum', 27599, 'full kursi', 'yes', NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:02', NULL),
(14, 'WWK Arena', 'wwk-arena', 'augsburg', 30660, 'full kursi', 'yes', NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:02', NULL),
(15, 'Mercedes-Benz Arena', 'mercedes-benz-arena', 'stuttgart', 60449, 'full kursi', 'yes', NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:02', NULL),
(16, 'Olympiastadion', 'olympiastadion', 'berlin', 77475, 'full kursi', 'yes', NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:02', NULL),
(17, 'Veltins Arena', 'veltins-arena', 'schalke', 62271, 'full kursi', 'yes', NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:02', NULL),
(18, 'Weserstadion', 'weserstadion', 'bremen', 42100, 'full kursi', 'yes', NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:02', NULL),
(19, 'Merck-Stadion am Bollenfaltor', 'merck-stadion-am-bollenfaltor', 'darmstadt', 17810, 'full kursi', 'yes', NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:02', NULL),
(20, 'Voith Arena', 'voith-arena', 'heidenheim', 15000, 'full kursi', 'yes', NULL, NULL, NULL, NULL, 'active', NULL, '2023-09-22 14:34:02', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `staffs`
--

CREATE TABLE `staffs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `club_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `birth_date` date DEFAULT NULL,
  `birth_location` varchar(255) DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `contract_from` date DEFAULT NULL,
  `contract_until` date DEFAULT NULL,
  `original` varchar(255) DEFAULT NULL,
  `medium` varchar(255) DEFAULT NULL,
  `small` varchar(255) DEFAULT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `staffs`
--

INSERT INTO `staffs` (`id`, `club_id`, `name`, `slug`, `role`, `birth_date`, `birth_location`, `country_id`, `bio`, `contract_from`, `contract_until`, `original`, `medium`, `small`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 'Thomas Tuchel', 'thomas-tuchel', 'Coach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2023-09-22 14:34:04', NULL),
(2, 9, 'Anthony Barry', 'anthony-barry', 'Coach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2023-09-22 14:34:04', NULL),
(3, 9, 'Arno Michels', 'arno-michels', 'Coach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2023-09-22 14:34:04', NULL),
(4, 9, 'Zsolt Low', 'zsolt-low', 'Coach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2023-09-22 14:34:04', NULL),
(5, 9, 'Michael Rechner', 'michael-rechner', 'Coach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2023-09-22 14:34:04', NULL),
(6, 9, 'Holger Broich', 'holger-broich', 'Coach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2023-09-22 14:34:04', NULL),
(7, 9, 'Nicolas Mayer', 'nicolas-mayer', 'Coach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', '2023-09-22 14:34:04', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `statistics`
--

CREATE TABLE `statistics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `match_id` bigint(20) UNSIGNED NOT NULL,
  `player_id` bigint(20) UNSIGNED NOT NULL,
  `minute_play` int(11) DEFAULT NULL,
  `goals` int(11) DEFAULT NULL,
  `assists` int(11) DEFAULT NULL,
  `subs_on` int(11) DEFAULT NULL,
  `subs_off` int(11) DEFAULT NULL,
  `yellow_card` int(11) DEFAULT NULL,
  `red_card` int(11) DEFAULT NULL,
  `status` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `team_league_statistics`
--

CREATE TABLE `team_league_statistics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `season` varchar(40) NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `total_points` int(11) NOT NULL DEFAULT 0,
  `total_goals` int(11) NOT NULL DEFAULT 0,
  `total_goalsreceived` int(11) NOT NULL DEFAULT 0,
  `total_goalsdiff` int(11) NOT NULL DEFAULT 0,
  `total_wins` int(11) NOT NULL DEFAULT 0,
  `total_draws` int(11) NOT NULL DEFAULT 0,
  `total_losses` int(11) NOT NULL DEFAULT 0,
  `home_points` int(11) NOT NULL DEFAULT 0,
  `home_goals` int(11) NOT NULL DEFAULT 0,
  `home_goalsreceived` int(11) NOT NULL DEFAULT 0,
  `home_goalsdiff` int(11) NOT NULL DEFAULT 0,
  `home_wins` int(11) NOT NULL DEFAULT 0,
  `home_draws` int(11) NOT NULL DEFAULT 0,
  `home_losses` int(11) NOT NULL DEFAULT 0,
  `away_points` int(11) NOT NULL DEFAULT 0,
  `away_goals` int(11) NOT NULL DEFAULT 0,
  `away_goalsreceived` int(11) NOT NULL DEFAULT 0,
  `away_goalsdiff` int(11) NOT NULL DEFAULT 0,
  `away_wins` int(11) NOT NULL DEFAULT 0,
  `away_draws` int(11) NOT NULL DEFAULT 0,
  `away_losses` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `team_league_statistics`
--

INSERT INTO `team_league_statistics` (`id`, `season`, `team_id`, `total_points`, `total_goals`, `total_goalsreceived`, `total_goalsdiff`, `total_wins`, `total_draws`, `total_losses`, `home_points`, `home_goals`, `home_goalsreceived`, `home_goalsdiff`, `home_wins`, `home_draws`, `home_losses`, `away_points`, `away_goals`, `away_goalsreceived`, `away_goalsdiff`, `away_wins`, `away_draws`, `away_losses`, `created_at`, `updated_at`) VALUES
(1, '2023/2024', 14, 3, 2, 0, 2, 1, 0, 0, 3, 2, 0, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2023-09-19 11:33:16', '2023-09-19 11:33:16'),
(2, '2023/2024', 13, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2023-09-19 11:36:30', '2023-09-19 11:36:30'),
(3, '2023/2024', 12, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2023-09-19 11:36:49', '2023-09-19 11:36:49'),
(4, '2023/2024', 11, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2023-09-19 11:36:59', '2023-09-19 11:36:59'),
(5, '2023/2024', 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2023-09-19 11:38:20', '2023-09-19 11:38:20'),
(6, '2023/2024', 9, 3, 3, 0, 3, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 3, 0, 3, 1, 0, 0, '2023-09-19 11:38:37', '2023-09-22 15:38:17'),
(7, '2023/2024', 18, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2023-09-19 11:39:00', '2023-09-19 11:39:00'),
(8, '2023/2024', 17, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2023-09-19 11:39:09', '2023-09-19 11:39:09'),
(9, '2023/2024', 16, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2023-09-19 11:39:21', '2023-09-19 11:39:21'),
(10, '2023/2024', 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2023-09-19 11:40:12', '2023-09-19 11:40:12'),
(11, '2023/2024', 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2023-09-19 11:40:54', '2023-09-19 11:40:54'),
(12, '2023/2024', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2023-09-19 11:41:21', '2023-09-19 11:41:21'),
(13, '2023/2024', 6, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2023-09-19 11:41:44', '2023-09-19 11:41:44'),
(14, '2023/2024', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2023-09-19 11:41:54', '2023-09-19 11:41:54'),
(15, '2023/2024', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2023-09-19 11:42:13', '2023-09-19 11:42:13'),
(16, '2023/2024', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2023-09-19 11:42:25', '2023-09-19 11:42:25'),
(17, '2023/2024', 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2023-09-19 11:42:36', '2023-09-19 11:42:36'),
(18, '2023/2024', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2023-09-19 11:42:45', '2023-09-19 11:42:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `trix_attachments`
--

CREATE TABLE `trix_attachments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `field` varchar(255) NOT NULL,
  `attachable_id` int(10) UNSIGNED DEFAULT NULL,
  `attachable_type` varchar(255) NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `disk` varchar(255) NOT NULL,
  `is_pending` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `trix_rich_texts`
--

CREATE TABLE `trix_rich_texts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `field` varchar(255) NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `content` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `trophies`
--

CREATE TABLE `trophies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `competition_id` bigint(20) UNSIGNED NOT NULL,
  `trophy` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `trophies`
--

INSERT INTO `trophies` (`id`, `competition_id`, `trophy`, `created_at`, `updated_at`) VALUES
(1, 1, 'uploads/trophies/4pSZPG5zcH_1695419113.dfl_pokale.png', '2023-09-22 14:45:13', '2023-09-22 14:45:13'),
(2, 2, 'uploads/trophies/5jSPQL97Ip_1695419195.cl_pokale.png', '2023-09-22 14:46:35', '2023-09-22 14:46:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `province_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `postcode` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone`, `address1`, `address2`, `province_id`, `city_id`, `postcode`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'mimin', 'admin@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-22 14:34:01', '$2y$10$U4iVpanUlvjsrmDWiiqfQemYMjGWOluSvBCMYzgisvIlCrqnk2jkO', NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-22 14:34:01', '2023-09-22 14:34:01'),
(2, 'author', 'mimin', 'author@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-22 14:34:31', '$2y$10$3QgsuChYBGYqEkRzXqt3b.WoeW2KM8fRWIvnIgM6SkId98dAkoq3y', NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-22 14:34:31', '2023-09-22 14:34:31'),
(3, 'sales', 'sale', 'sales@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-22 14:34:32', '$2y$10$a58W.q8NQNA9vJBPPGXhaO2mw3T9AGr7syTVmLhIC7YlWGiUaNNSW', NULL, NULL, NULL, NULL, NULL, NULL, '2023-09-22 14:34:32', '2023-09-22 14:34:32');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject` (`subject_type`,`subject_id`),
  ADD KEY `causer` (`causer_type`,`causer_id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indeks untuk tabel `advertisings`
--
ALTER TABLE `advertisings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `advertisings_segment_id_foreign` (`segment_id`);

--
-- Indeks untuk tabel `advertising_segments`
--
ALTER TABLE `advertising_segments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `advertising_segments_title_unique` (`title`);

--
-- Indeks untuk tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `article_categories`
--
ALTER TABLE `article_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_categories_article_id_foreign` (`article_id`),
  ADD KEY `article_categories_category_article_id_foreign` (`category_article_id`);

--
-- Indeks untuk tabel `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `attribute_options`
--
ALTER TABLE `attribute_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attribute_options_attribute_id_foreign` (`attribute_id`);

--
-- Indeks untuk tabel `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `awards_competition_id_foreign` (`competition_id`);

--
-- Indeks untuk tabel `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indeks untuk tabel `category_articles`
--
ALTER TABLE `category_articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_articles_parent_id_foreign` (`parent_id`),
  ADD KEY `category_articles_slug_index` (`slug`);

--
-- Indeks untuk tabel `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clubs_stadion_id_foreign` (`stadion_id`);

--
-- Indeks untuk tabel `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_commentable_type_commentable_id_index` (`commentable_type`,`commentable_id`);

--
-- Indeks untuk tabel `competitions`
--
ALTER TABLE `competitions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `matchs`
--
ALTER TABLE `matchs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matchs_competition_id_foreign` (`competition_id`),
  ADD KEY `matchs_home_team_foreign` (`home_team`),
  ADD KEY `matchs_away_team_foreign` (`away_team`),
  ADD KEY `matchs_stadion_id_foreign` (`stadion_id`);

--
-- Indeks untuk tabel `match_galleries`
--
ALTER TABLE `match_galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `match_galleries_match_id_foreign` (`match_id`);

--
-- Indeks untuk tabel `match_lineups`
--
ALTER TABLE `match_lineups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `match_lineups_match_id_foreign` (`match_id`);

--
-- Indeks untuk tabel `match_reports`
--
ALTER TABLE `match_reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `match_reports_match_id_foreign` (`match_id`);

--
-- Indeks untuk tabel `match_statistics`
--
ALTER TABLE `match_statistics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `match_statistics_match_id_foreign` (`match_id`);

--
-- Indeks untuk tabel `medias`
--
ALTER TABLE `medias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medias_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `newsletter_subscribers`
--
ALTER TABLE `newsletter_subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_code_unique` (`code`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_approved_by_foreign` (`approved_by`),
  ADD KEY `orders_cancelled_by_foreign` (`cancelled_by`),
  ADD KEY `orders_code_index` (`code`),
  ADD KEY `orders_code_order_date_index` (`code`,`order_date`),
  ADD KEY `orders_payment_token_index` (`payment_token`);

--
-- Indeks untuk tabel `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `order_items`
--
ALTER TABLE `order_items`
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`),
  ADD KEY `order_items_sku_index` (`sku`);

--
-- Indeks untuk tabel `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`),
  ADD KEY `players_club_id_foreign` (`club_id`),
  ADD KEY `players_country_id_foreign` (`country_id`),
  ADD KEY `players_position_id_foreign` (`position_id`);

--
-- Indeks untuk tabel `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `positions_parent_id_foreign` (`parent_id`),
  ADD KEY `positions_slug_index` (`slug`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`),
  ADD KEY `products_parent_id_foreign` (`parent_id`);

--
-- Indeks untuk tabel `product_attribute_values`
--
ALTER TABLE `product_attribute_values`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_attribute_values_product_id_foreign` (`product_id`),
  ADD KEY `product_attribute_values_attribute_id_foreign` (`attribute_id`),
  ADD KEY `product_attribute_values_parent_product_id_foreign` (`parent_product_id`);

--
-- Indeks untuk tabel `product_brands`
--
ALTER TABLE `product_brands`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_brands_product_id_foreign` (`product_id`),
  ADD KEY `product_brands_brand_id_foreign` (`brand_id`);

--
-- Indeks untuk tabel `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_categories_product_id_foreign` (`product_id`),
  ADD KEY `product_categories_category_id_foreign` (`category_id`);

--
-- Indeks untuk tabel `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indeks untuk tabel `product_inventories`
--
ALTER TABLE `product_inventories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_inventories_product_id_foreign` (`product_id`);

--
-- Indeks untuk tabel `product_slides`
--
ALTER TABLE `product_slides`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_slides_user_id_index` (`user_id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schedules_competition_id_foreign` (`competition_id`),
  ADD KEY `schedules_home_team_foreign` (`home_team`),
  ADD KEY `schedules_away_team_foreign` (`away_team`),
  ADD KEY `schedules_stadion_id_foreign` (`stadion_id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `shipments`
--
ALTER TABLE `shipments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shipments_user_id_foreign` (`user_id`),
  ADD KEY `shipments_order_id_foreign` (`order_id`),
  ADD KEY `shipments_shipped_by_foreign` (`shipped_by`),
  ADD KEY `shipments_track_number_index` (`track_number`);

--
-- Indeks untuk tabel `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slides_user_id_index` (`user_id`);

--
-- Indeks untuk tabel `stadions`
--
ALTER TABLE `stadions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staffs_club_id_foreign` (`club_id`),
  ADD KEY `staffs_country_id_foreign` (`country_id`);

--
-- Indeks untuk tabel `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `statistics_match_id_foreign` (`match_id`),
  ADD KEY `statistics_player_id_foreign` (`player_id`);

--
-- Indeks untuk tabel `team_league_statistics`
--
ALTER TABLE `team_league_statistics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team_league_statistics_team_id_foreign` (`team_id`);

--
-- Indeks untuk tabel `trix_attachments`
--
ALTER TABLE `trix_attachments`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `trix_rich_texts`
--
ALTER TABLE `trix_rich_texts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trix_rich_texts_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indeks untuk tabel `trophies`
--
ALTER TABLE `trophies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trophies_competition_id_foreign` (`competition_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT untuk tabel `advertisings`
--
ALTER TABLE `advertisings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `advertising_segments`
--
ALTER TABLE `advertising_segments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `article_categories`
--
ALTER TABLE `article_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `attribute_options`
--
ALTER TABLE `attribute_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `awards`
--
ALTER TABLE `awards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `category_articles`
--
ALTER TABLE `category_articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `clubs`
--
ALTER TABLE `clubs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `competitions`
--
ALTER TABLE `competitions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT untuk tabel `matchs`
--
ALTER TABLE `matchs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `match_galleries`
--
ALTER TABLE `match_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `match_lineups`
--
ALTER TABLE `match_lineups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `match_reports`
--
ALTER TABLE `match_reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `match_statistics`
--
ALTER TABLE `match_statistics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `medias`
--
ALTER TABLE `medias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `newsletter_subscribers`
--
ALTER TABLE `newsletter_subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `players`
--
ALTER TABLE `players`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `positions`
--
ALTER TABLE `positions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `product_attribute_values`
--
ALTER TABLE `product_attribute_values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `product_brands`
--
ALTER TABLE `product_brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `product_inventories`
--
ALTER TABLE `product_inventories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `product_slides`
--
ALTER TABLE `product_slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `shipments`
--
ALTER TABLE `shipments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `stadions`
--
ALTER TABLE `stadions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `statistics`
--
ALTER TABLE `statistics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `team_league_statistics`
--
ALTER TABLE `team_league_statistics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `trix_attachments`
--
ALTER TABLE `trix_attachments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `trix_rich_texts`
--
ALTER TABLE `trix_rich_texts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `trophies`
--
ALTER TABLE `trophies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `advertisings`
--
ALTER TABLE `advertisings`
  ADD CONSTRAINT `advertisings_segment_id_foreign` FOREIGN KEY (`segment_id`) REFERENCES `advertising_segments` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `article_categories`
--
ALTER TABLE `article_categories`
  ADD CONSTRAINT `article_categories_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `article_categories_category_article_id_foreign` FOREIGN KEY (`category_article_id`) REFERENCES `category_articles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `attribute_options`
--
ALTER TABLE `attribute_options`
  ADD CONSTRAINT `attribute_options_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `awards`
--
ALTER TABLE `awards`
  ADD CONSTRAINT `awards_competition_id_foreign` FOREIGN KEY (`competition_id`) REFERENCES `competitions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`);

--
-- Ketidakleluasaan untuk tabel `category_articles`
--
ALTER TABLE `category_articles`
  ADD CONSTRAINT `category_articles_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `category_articles` (`id`);

--
-- Ketidakleluasaan untuk tabel `clubs`
--
ALTER TABLE `clubs`
  ADD CONSTRAINT `clubs_stadion_id_foreign` FOREIGN KEY (`stadion_id`) REFERENCES `stadions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `matchs`
--
ALTER TABLE `matchs`
  ADD CONSTRAINT `matchs_away_team_foreign` FOREIGN KEY (`away_team`) REFERENCES `clubs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `matchs_competition_id_foreign` FOREIGN KEY (`competition_id`) REFERENCES `competitions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `matchs_home_team_foreign` FOREIGN KEY (`home_team`) REFERENCES `clubs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `matchs_stadion_id_foreign` FOREIGN KEY (`stadion_id`) REFERENCES `stadions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `match_galleries`
--
ALTER TABLE `match_galleries`
  ADD CONSTRAINT `match_galleries_match_id_foreign` FOREIGN KEY (`match_id`) REFERENCES `matchs` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `match_lineups`
--
ALTER TABLE `match_lineups`
  ADD CONSTRAINT `match_lineups_match_id_foreign` FOREIGN KEY (`match_id`) REFERENCES `matchs` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `match_reports`
--
ALTER TABLE `match_reports`
  ADD CONSTRAINT `match_reports_match_id_foreign` FOREIGN KEY (`match_id`) REFERENCES `matchs` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `match_statistics`
--
ALTER TABLE `match_statistics`
  ADD CONSTRAINT `match_statistics_match_id_foreign` FOREIGN KEY (`match_id`) REFERENCES `matchs` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `medias`
--
ALTER TABLE `medias`
  ADD CONSTRAINT `medias_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_approved_by_foreign` FOREIGN KEY (`approved_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_cancelled_by_foreign` FOREIGN KEY (`cancelled_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Ketidakleluasaan untuk tabel `players`
--
ALTER TABLE `players`
  ADD CONSTRAINT `players_club_id_foreign` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `players_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `players_position_id_foreign` FOREIGN KEY (`position_id`) REFERENCES `positions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `positions`
--
ALTER TABLE `positions`
  ADD CONSTRAINT `positions_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `positions` (`id`);

--
-- Ketidakleluasaan untuk tabel `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `product_attribute_values`
--
ALTER TABLE `product_attribute_values`
  ADD CONSTRAINT `product_attribute_values_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `attributes` (`id`),
  ADD CONSTRAINT `product_attribute_values_parent_product_id_foreign` FOREIGN KEY (`parent_product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `product_attribute_values_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `product_brands`
--
ALTER TABLE `product_brands`
  ADD CONSTRAINT `product_brands_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_brands_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `product_categories`
--
ALTER TABLE `product_categories`
  ADD CONSTRAINT `product_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_categories_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `product_inventories`
--
ALTER TABLE `product_inventories`
  ADD CONSTRAINT `product_inventories_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `product_slides`
--
ALTER TABLE `product_slides`
  ADD CONSTRAINT `product_slides_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_away_team_foreign` FOREIGN KEY (`away_team`) REFERENCES `clubs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `schedules_competition_id_foreign` FOREIGN KEY (`competition_id`) REFERENCES `competitions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `schedules_home_team_foreign` FOREIGN KEY (`home_team`) REFERENCES `clubs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `schedules_stadion_id_foreign` FOREIGN KEY (`stadion_id`) REFERENCES `stadions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `shipments`
--
ALTER TABLE `shipments`
  ADD CONSTRAINT `shipments_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `shipments_shipped_by_foreign` FOREIGN KEY (`shipped_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `shipments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `slides`
--
ALTER TABLE `slides`
  ADD CONSTRAINT `slides_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `staffs`
--
ALTER TABLE `staffs`
  ADD CONSTRAINT `staffs_club_id_foreign` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `staffs_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `statistics`
--
ALTER TABLE `statistics`
  ADD CONSTRAINT `statistics_match_id_foreign` FOREIGN KEY (`match_id`) REFERENCES `matchs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `statistics_player_id_foreign` FOREIGN KEY (`player_id`) REFERENCES `players` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `team_league_statistics`
--
ALTER TABLE `team_league_statistics`
  ADD CONSTRAINT `team_league_statistics_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `clubs` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `trophies`
--
ALTER TABLE `trophies`
  ADD CONSTRAINT `trophies_competition_id_foreign` FOREIGN KEY (`competition_id`) REFERENCES `competitions` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
