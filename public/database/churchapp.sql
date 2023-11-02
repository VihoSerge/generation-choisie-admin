CREATE DATABASE churchapp;
USE churchapp;

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `thumbnail_url` text NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `covers` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `url` text NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `url` text NOT NULL,
  `description` text DEFAULT NULL,
  `categoryid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `podcasts` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `url` text NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin admin', 'admin@admin.com', '$2y$10$W/Fa/OYHfPl8xB9yuz7Nw.q0TTo6VLD0hskdxgvRH..fQ0aVynWKG');


ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `covers`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryid` (`categoryid`);

ALTER TABLE `podcasts`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`categoryid`) REFERENCES `categories` (`id`);
COMMIT;

