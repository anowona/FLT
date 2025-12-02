-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 26 avr. 2025 à 12:19
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
-- Base de données : `aperso_flt`
--

-- --------------------------------------------------------

--
-- Structure de la table `togocel`
--

CREATE TABLE `togocel` (
  `idForfait` int(11) NOT NULL,
  `codeUSSD` varchar(255) NOT NULL,
  `codeForfait` varchar(255) NOT NULL,
  `voix__f_` int(11) NOT NULL,
  `sms__sms_` int(11) NOT NULL,
  `donnees__mo_` int(11) NOT NULL,
  `prix__fcfa_` int(11) NOT NULL,
  `validite__j_` int(11) NOT NULL,
  `disponibilite` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `togocel`
--

INSERT INTO `togocel` (`idForfait`, `codeUSSD`, `codeForfait`, `voix__f_`, `sms__sms_`, `donnees__mo_`, `prix__fcfa_`, `validite__j_`, `disponibilite`) VALUES
(1, '*909*2*1*1#', 'NET250', 0, 0, 250, 250, 1, 'h24'),
(2, '*104*2*2#', '50F', 0, 0, 12, 50, 1, 'h24'),
(3, '*909*2*1*2#', 'NET100', 0, 0, 45, 100, 1, 'h24'),
(4, '*104*2*16#', '100F', 0, 0, 30, 100, 1, 'h24'),
(5, '*909*2*1*3#', 'NET200', 0, 0, 100, 200, 1, 'h24'),
(6, '*104*2*3#', '200F', 0, 0, 70, 200, 1, 'h24'),
(7, '*919*1#', '200F Connecte 1J', 700, 25, 20, 200, 1, 'h24'),
(8, '*909*2*1*4#', 'NET350', 0, 0, 180, 350, 3, 'h24'),
(9, '*104*2*4#', '350', 0, 0, 130, 350, 1, 'h24'),
(10, '*104*2*14#', '450 F', 0, 0, 2048, 450, 1, '22h a 05h'),
(11, '*909*2*1*5#', 'XTRANuit', 0, 0, 8000, 500, 1, '22h-06h'),
(12, '*919*2#', '500 F 2J', 2000, 50, 70, 500, 2, 'h24'),
(13, '*909*2*1*6#', 'NET600', 0, 0, 400, 600, 3, 'h24'),
(14, '*104*2*5#', '600F', 0, 0, 300, 600, 3, 'h24'),
(15, '*104*2*15#', '900 F', 0, 0, 3072, 900, 3, '22h a 05h'),
(16, '*909*2*2*1#', 'NET1000', 0, 0, 1000, 1000, 7, 'h24'),
(17, '*104*2*6#', '1000 F', 0, 0, 450, 1000, 3, 'h24'),
(18, '*919*3#', '1000F 5J', 5400, 50, 120, 1000, 5, 'h24'),
(19, '*909*2*2*2#', 'NET1500', 0, 0, 1600, 1500, 7, 'h24'),
(20, '*104*2*7#', '1500F', 0, 0, 600, 1500, 7, 'h24'),
(21, '*919*4#', '2500F 10J', 11000, 50, 350, 2500, 10, 'h24'),
(22, '*909*2*2*3# LOST', 'NET3000', 0, 0, 2500, 3000, 7, 'h24'),
(23, '*104*2*8#', '3000 F', 0, 0, 2048, 3000, 7, 'h24'),
(24, '*104*2*9#', '4500', 0, 0, 4096, 4500, 7, 'h24'),
(25, '*909*2*3*1#', 'NET3000', 0, 0, 3000, 3000, 30, 'h24'),
(26, '*104*2*10#', '5000 F', 0, 0, 2048, 5000, 30, 'h24'),
(27, '*909*2*3*2#', 'NET5000', 0, 0, 6000, 5000, 30, 'h24'),
(28, '*104*2*12#', '15000 F', 0, 0, 61440, 15000, 30, 'h24'),
(29, '*909*2*3*3#', 'NET10000', 0, 0, 20000, 10000, 30, 'h24'),
(30, '*909*2*1*7#', 'NET400', 0, 0, 250, 400, 2, 'h24'),
(31, '*909*2*3*4#', 'Air Fiber', 0, 0, 60000, 15000, 30, 'h24'),
(32, '*909*2*3*5#', 'Air Fiber+', 0, 0, 110000, 25000, 30, 'h24'),
(33, '*400*2*1#', 'Free', 0, 0, 50, 100, 1, 'h24');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `togocel`
--
ALTER TABLE `togocel`
  ADD PRIMARY KEY (`idForfait`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `togocel`
--
ALTER TABLE `togocel`
  MODIFY `idForfait` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


-- Drop existing columns if they exist
ALTER TABLE `togocel`
DROP COLUMN IF EXISTS `rapport_donneesPrix`,
DROP COLUMN IF EXISTS `rapport_prixDonnees`,
DROP COLUMN IF EXISTS `rapport_validitePrix`,
DROP COLUMN IF EXISTS `rapport_prixValidite`,
DROP COLUMN IF EXISTS `rapport_validiteDonnees`,
DROP COLUMN IF EXISTS `rapport_donneesValidite`,
DROP COLUMN IF EXISTS `rapport_prixSms`,
DROP COLUMN IF EXISTS `rapport_smsPrix`,
DROP COLUMN IF EXISTS `rapport_prixVoix`,
DROP COLUMN IF EXISTS `rapport_voixPrix`,
DROP COLUMN IF EXISTS `rapport_validiteSms`,
DROP COLUMN IF EXISTS `rapport_smsValidite`,
DROP COLUMN IF EXISTS `rapport_validiteVoix`,
DROP COLUMN IF EXISTS `rapport_voixValidite`,
DROP COLUMN IF EXISTS `rapport_donneesSms`,
DROP COLUMN IF EXISTS `rapport_smsDonnees`,
DROP COLUMN IF EXISTS `rapport_donneesVoix`,
DROP COLUMN IF EXISTS `rapport_voixDonnees`,
DROP COLUMN IF EXISTS `rapport_smsVoix`,
DROP COLUMN IF EXISTS `rapport_voixSms`;

-- Now add generated columns freshly
ALTER TABLE `togocel`
ADD COLUMN `rapport_donneesPrix` decimal(11,4) GENERATED ALWAYS AS (`donnees__mo_` / NULLIF(`prix__fcfa_`, 0)) STORED,
ADD COLUMN `rapport_prixDonnees` decimal(11,4) GENERATED ALWAYS AS (`prix__fcfa_` / NULLIF(`donnees__mo_`, 0)) STORED,
ADD COLUMN `rapport_validitePrix` decimal(11,4) GENERATED ALWAYS AS (`validite__j_` / NULLIF(`prix__fcfa_`, 0)) STORED,
ADD COLUMN `rapport_prixValidite` decimal(11,4) GENERATED ALWAYS AS (`prix__fcfa_` / NULLIF(`validite__j_`, 0)) STORED,
ADD COLUMN `rapport_validiteDonnees` decimal(11,4) GENERATED ALWAYS AS (`validite__j_` / NULLIF(`donnees__mo_`, 0)) STORED,
ADD COLUMN `rapport_donneesValidite` decimal(11,4) GENERATED ALWAYS AS (`donnees__mo_` / NULLIF(`validite__j_`, 0)) STORED,
ADD COLUMN `rapport_prixSms` decimal(11,4) GENERATED ALWAYS AS (`prix__fcfa_` / NULLIF(`sms__sms_`, 0)) STORED,
ADD COLUMN `rapport_smsPrix` decimal(11,4) GENERATED ALWAYS AS (`sms__sms_` / NULLIF(`prix__fcfa_`, 0)) STORED,
ADD COLUMN `rapport_prixVoix` decimal(11,4) GENERATED ALWAYS AS (`prix__fcfa_` / NULLIF(`voix__f_`, 0)) STORED,
ADD COLUMN `rapport_voixPrix` decimal(11,4) GENERATED ALWAYS AS (`voix__f_` / NULLIF(`prix__fcfa_`, 0)) STORED,
ADD COLUMN `rapport_validiteSms` decimal(11,4) GENERATED ALWAYS AS (`validite__j_` / NULLIF(`sms__sms_`, 0)) STORED,
ADD COLUMN `rapport_smsValidite` decimal(11,4) GENERATED ALWAYS AS (`sms__sms_` / NULLIF(`validite__j_`, 0)) STORED,
ADD COLUMN `rapport_validiteVoix` decimal(11,4) GENERATED ALWAYS AS (`validite__j_` / NULLIF(`voix__f_`, 0)) STORED,
ADD COLUMN `rapport_voixValidite` decimal(11,4) GENERATED ALWAYS AS (`voix__f_` / NULLIF(`validite__j_`, 0)) STORED,
ADD COLUMN `rapport_donneesSms` decimal(11,4) GENERATED ALWAYS AS (`donnees__mo_` / NULLIF(`sms__sms_`, 0)) STORED,
ADD COLUMN `rapport_smsDonnees` decimal(11,4) GENERATED ALWAYS AS (`sms__sms_` / NULLIF(`donnees__mo_`, 0)) STORED,
ADD COLUMN `rapport_donneesVoix` decimal(11,4) GENERATED ALWAYS AS (`donnees__mo_` / NULLIF(`voix__f_`, 0)) STORED,
ADD COLUMN `rapport_voixDonnees` decimal(11,4) GENERATED ALWAYS AS (`voix__f_` / NULLIF(`donnees__mo_`, 0)) STORED,
ADD COLUMN `rapport_smsVoix` decimal(11,4) GENERATED ALWAYS AS (`sms__sms_` / NULLIF(`voix__f_`, 0)) STORED,
ADD COLUMN `rapport_voixSms` decimal(11,4) GENERATED ALWAYS AS (`voix__f_` / NULLIF(`sms__sms_`, 0)) STORED;
