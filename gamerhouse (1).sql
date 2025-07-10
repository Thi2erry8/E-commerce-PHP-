-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 09 juil. 2025 à 06:47
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gamerhouse`
--

-- --------------------------------------------------------

--
-- Structure de la table `favoris`
--

CREATE TABLE `favoris` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `add_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `favoris`
--

INSERT INTO `favoris` (`id`, `user_id`, `product_id`, `add_date`) VALUES
(9, 1, 31, '2025-07-05 11:44:10'),
(10, 1, 32, '2025-07-05 11:44:14');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `product_name` varchar(50) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` varchar(1000) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `product_category` varchar(50) NOT NULL,
  `color` varchar(50) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `date`, `product_name`, `product_price`, `product_description`, `product_img`, `product_category`, `color`, `stock`) VALUES
(13, '2025-04-13', 'Xbox Controller ', 45, 'Versatile Compatibility: Supports Xbox Series X/S, Xbox One X/S consoles, and PC Win10 and above (including the Steam game platform).', 'image/36de4a0e5b0ff021f59ae630dc6794fd.jpg', 'Controller', 'Black', 15),
(14, '2025-04-13', 'Xbox Controller ', 60, 'Customizable Experience: Includes 2 custom back keys, allowing users to eliminate false triggers and enhance their gaming experience', 'image/ea465a17ccdae4d35bd8f3ebd0ba1ca9.jpg', 'Controller', 'Green', 15),
(24, '2025-04-15', 'Ps5 controller ', 90, 'Haptic feedback - Feel physically responsive feedback to your in-game actions with dual actuators which replace traditional rumble motors. In your hands, these dynamic vibrations can simulate the feeling of everything from environments to the recoil of different weapons', 'image/44f53627899ea3da84c4b37cbbf20e43.jpg', 'Controller', 'blue', 15),
(25, '2025-05-24', 'MUSETEX PC CASE ATX 6', 160, 'MUSETEX brings you gaming computer case K2,both a visual experience and a first-class installation experience,high configuration,high cost performance. Pc case pre-install 6 PWM ARGB fans, strong cooling performance;', 'image/4516c705b6e8ebdbf4f828f22b98c575.jpg', 'PcGaming', 'Black', 15),
(26, '2025-05-24', 'PC CASE ATX 9 PWM ARGB', 109, 'AMANSON Tower Case Fans can be controlled by computer software. Enjoy high-performance cooling and easy lighting through asimple +5V ARGB motherboard header, no controller necessary.', 'image/4516c705b6e8ebdbf4f828f22b98c575.jpg', 'PcGaming', 'White', 15),
(27, '2025-05-24', 'GAMDIAS ATX Mid Tower', 60, 'AURA GC1 ELITE ARGB sports an airflow-focused mesh front panel equipped with 4 ARGB fans to provide superior air intake.', 'image/b0b8978e0b3e3ed978322d426f796d70.jpg', 'PcGaming', 'Black', 15),
(28, '2025-05-24', 'ASUS TUF Gaming A14 Copilot+', 1200, 'Power through your day with Windows 11 Home, an AMD Ryzen 7 8845HS Processor, and an NVIDIA GeForce RTX 4060 Laptop GPU with Advanced Optimus.', 'image/36705ec9917ce4b400898fd8bd53eeda.jpg', 'PcGaming', 'Black', 15),
(29, '2025-05-24', 'ASUS ROG Strix G17 ', 2898, 'Power up with Windows 11 Pro, an AMD Ryzen 9 7945HX processor, and an NVIDIA GeForce RTX 4070 Laptop GPU at 140W Max TGP. BLAZING FAST MEMORY AND STORAGE – Multitask swiftly with 32GB of DDR5-4800MHz memory and speed up loading times with 1TB of PCIe 4x4.', 'image/bbe092a657d503647cc0bda659c2cbb7.jpg', 'PcGaming', 'Black', 15),
(30, '2025-05-24', 'Ps4 Slim 1TB', 350, 'Enables the greatest game developers in the world to unlock their creativity and push the boundaries of play through a platform that is tuned specifically to their needs.', 'image/4859741fc0a30dbefd88d70f23ad31d5.jpg', 'Console', 'Black', 25),
(31, '2025-05-24', 'Ps5 console (slim)', 500, 'Breathtaking Immersion - Discover a deeper gaming experience with support for haptic feedback, adaptive triggers, and 3D Audio technology.', 'image/cfee8bbab9dc4c479271d838e7d14553.jpg', 'Console', 'White', 25),
(32, '2025-05-24', 'Ps5 console (pro)', 700, 'Lightning Speed - Harness the power of a custom CPU, GPU, and SSD with Integrated I/O that rewrite the rules of what a PlayStation console can do.', 'image/358ed1ef0ad56131c6b6fb4051947be6.jpg', 'Console', 'Black', 25),
(33, '2025-05-24', 'Xbox Series X 1TB', 550, 'The Xbox Series X delivers sensationally smooth frame rates of up to 120FPS with the visual pop of HDR. Immerse yourself with sharper characters, brighter worlds, and impossible details with true-to-life 4K. From original classics like Halo: Combat Evolved to future favorites like Halo Infinite, every title looks and plays best on the Xbox Series X.', 'image/cdef37d49df388a45bb1137297b087e0.jpg', 'Console', 'Black', 25),
(34, '2025-05-24', 'Xbox white', 400, 'Play new games like Call of Duty: Black Ops 6, Avowed, and Indiana Jones and the Great Circle on day one, enjoy hundreds of high-quality games like Minecraft, Forza Motorsport, Sea of Thieves and more (membership sold separately).', 'image/20f11ab557497325dc484db63fdadc46.jpg', 'Console', 'Black', 25),
(35, '2025-05-24', 'Xbox Controller ', 65, 'Includes Xbox Wireless and Bluetooth technology for wireless gaming on console, PC, mobile phones, and tablets.*', 'image/cf5d94085021ba71ec247a1847f550b3.jpg', 'Controller', 'white & gray', 15),
(36, '2025-06-01', 'HyperX Cloud III', 75, 'Comfort is King: Comfort’s in the Cloud III’s DNA. Built for gamers who can’t have an uncomfortable headset ruin the flow of their full-combo, disrupt their speedrun, or knocking them out of the zone.', 'image/1f30f91427fbad2f6b17d63a294f520b.jpg', 'Accessory', 'Black', 23),
(37, '2025-06-01', 'NUBWO G06', 40, 'Effortless Wireless Gameplay - Transition from tangled cables to smooth wireless gaming. Leveraging a 2.4GHz connection through its USB dongle, this headset ensures consistent gameplay for PCs and many consoles. Note: Some consoles may not support this wireless feature.', 'image/89b09a53b5aa88d130f4bac4ae814448.jpg', 'Accessory', 'white', 23),
(38, '2025-06-01', 'GTRACING Gaming Chair', 125, 'Music Gaming Chair: Original designed with two bluetooth speakers. the surround sound system brings out the best in your entertainment, delivering remarkable and richly detailed stereo sound out loud in solid bass and clear, full audio. connect it to your smartphone, tablet or other bluetooth enabled devices, and enjoy music, mobile game or movie with thrilling, cinema like sound from the comfort of your gaming chair.', 'image/70d5070697bc5b9bb0879f764ca4454c.jpg', 'Accessory', 'black', 23),
(39, '2025-06-01', 'Misolant Gaming Chair', 250, 'This Misolant game chair is designed around the concept of \"ergonomics\" and has been carefully researched and developed to provide excellent support for your lower back, head and buttocks, ensuring comfort when sitting for long periods of time, and the cushion is very soft, just like sitting on a plush sofa. Whether you are playing games, working or relaxing, our gaming chair will be the perfect companion for you.', 'image/2536af9b74dd3d21179c08efcfb3ddce.jpg', 'Accessory', 'Black', 23),
(40, '2025-06-01', 'X Rocker Gaming Chair,', 150, 'ALL DAY COMFORT | Sink into the ultra-padded seating featuring quality foam technology that cradles you in comfort during those epic gaming sessions or long workdays', 'image/9af19d1c5ba93c95dc8dc28580260747.jpg', ' Accessory', 'Black', NULL),
(41, '2025-06-02', 'Sceptre Curved 24.5-inch', 150, 'AMD FreeSync Premium: By accelerating the frame rate to at least 120Hz at 1080P FHD resolution and delivering low latency to prevent visible delay in data processing, AMD FreeSync Premium allows gameplay to reach the highest echelons of performance.', 'image/8263bb2c0f89685a2bb6107c422b0c94.jpg', 'Accessory', 'Black', 23),
(42, '2025-06-02', 'MXZ Gaming PC', 1000, 'System: Intel Core Ultra 5 225F 3.3GHz 10 Cores | Intel B860 Chipset | 16GB DDR5 6400MHz | 2TB PCIe 4.0 NVMe SSD | Windows 11 Home Graphics: NVIDIA GeForce RTX 5060 Ti 8GB Graphics | 1x HDMI | 2x DisplayPort Connectivity: 1 x USB-C 3.2 | 5 x USB-A 3.2 | 2 x USB-A 2.0 | 1 x LAN | WiFi 6 | Bluetooth 5.3 | 7.1 Channel Audio', 'image/82398018113139b4270be2910daecc53.jpg', 'Accessory', 'white', 23),
(43, '2025-06-02', 'acer Nitro V ', 765, 'Picture-Perfect. Furiously Fast: Engage thoroughly with a captivating 16-inch 180Hz display that comes to life featuring a 16:10 WQXGA 2560 x 1600 resolution and sRGB 100%. With the MUX switch you can freely switch between integrated graphics or discrete graphics. Use the MUX switch to disable the discrete graphics to enhance battery life for everyday tasks while also reducing heat. Enable the discrete RTX 4060 laptop GPU with the MUX switch for an enhanced gaming experience.', 'image/a1771905522496d21fb23e46cf3865bb.jpg', 'Accessory', 'Black', 23);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(125) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `Date d'inscription` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `email`, `phone`, `password`, `Date d'inscription`) VALUES
(1, 'Augustin', 'jonathan', 'jonathanaugustin056@gmail.com', '49051191', '1234', '2025-05-06'),
(2, 'Augustin', 'Thierry', 'ja6176204@gmail.com', '49051191', '1234', '2025-05-06'),
(6, 'Jacob', 'Paul', 'adgb@gmail.com', '12345678', 'asdfg', '2025-06-25');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `favoris`
--
ALTER TABLE `favoris`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `favoris`
--
ALTER TABLE `favoris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `favoris`
--
ALTER TABLE `favoris`
  ADD CONSTRAINT `favoris_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `favoris_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
