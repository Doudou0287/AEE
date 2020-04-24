n SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 24, 2020 at 03:35 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aee`
--

-- --------------------------------------------------------

--
-- Table structure for table `announce`
--

DROP TABLE IF EXISTS `announce`;
CREATE TABLE IF NOT EXISTS `announce` (
	  `ID` int(11) NOT NULL AUTO_INCREMENT,
	  `NOM` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
	  `PRENOM` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
	  `SUJET` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
	  `MESSAGE` text COLLATE utf8mb4_unicode_ci NOT NULL,
	  `DATE_MESSAGE` datetime NOT NULL,
	  `LINKS` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
	  PRIMARY KEY (`ID`)
	) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
	
	--
	-- Dumping data for table `announce`
	--
	
	INSERT INTO `announce` (`ID`, `NOM`, `PRENOM`, `SUJET`, `MESSAGE`, `DATE_MESSAGE`, `LINKS`) VALUES
	(1, 'AL KEBSI', 'sundus', 'sephora discount', 'Sephora vous ouvre les portes de son univers magnifique, rempli dâ€idÃes cadeaux et d\'incontournables produits beautÃ. Partez Ã la recherche des derniÃres nouveautÃs et retrouvez vos best-sellers maquillage : fond de teint, rouge Ã lÃvres, mascara, tout pour Ãªtre au top. On peaufine notre look avec une touche de fragrance. Eau de parfum ou eau de toilette, on shoppe notre parfum femme prÃfÃrÃ et on chouchoute Monsieur avec son parfum homme si unique. AprÃs une longue journÃe, on sâ€octroie une pause dÃtente bien mÃritÃe. A nous les soins visage, corps ou cheveux ! Une routine beautÃ parfaite avec des marques expertes et leurs soins novateurs : Clarins, Fresh ou GlamGlow pour un teint frais. On sâ€offre une chevelure de rÃªve avec des soins rÃparateurs, parfaitement adaptÃs Ã tous nos besoins, du mythique Christophe Robin Ã l\'incontournable Bumble & Bumble. A la recherche du cadeau parfait ? On sâ€inspire du Beauty Board et de sa communautÃ pour trouver la perle rare qui fera plaisir Ã coup sÃr. Avec Sephora, vous Ãªtes au cÅur de la beautÃ . suivez le lien suivant pour savoir plus ', '2020-04-22 07:00:57', ' https://www.sephora.fr/?utm_source=google&utm_medium=cpc&utm_campaign=BrandSephora_search_SephoraMarqueexacte&utm_term=sephora&gclid=Cj0KCQjw0pfzBRCOARIsANi0g0vRfRf4e7rHKASZB1RcRKgFopruIeffd8HQlu4lgZse6ABZxgKW8ssaAlWLEALw_wcB');
	
	-- --------------------------------------------------------
	
	--
	-- Table structure for table `announce1`
	--
	
	DROP TABLE IF EXISTS `announce1`;
	CREATE TABLE IF NOT EXISTS `announce1` (
		  `ID` int(11) NOT NULL AUTO_INCREMENT,
		  `NOM` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
		  `PRENOM` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
		  `SUJET` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
		  `MESSAGE` text COLLATE utf8mb4_unicode_ci NOT NULL,
		  `DATE_MESSAGE` datetime NOT NULL,
		  `LINKS` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
		  PRIMARY KEY (`ID`)
		) NE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
		
		--
		-- Dumping data for table `announce1`
		--
		
		INSERT INTO `announce1` (`ID`, `NOM`, `PRENOM`, `SUJET`, `MESSAGE`, `DATE_MESSAGE`, `LINKS`) VALUES
		(12, 'CLARK', 'roni', 'event', 'La Semaine de l\'EMPLOI Ostwald-Illkirch ', '2020-04-22 07:55:14', 'https://facebook.com/events/s/la-semaine-de-lemploi-ostwald-/512391319713513/'),
		(13, 'HAMID ADDIN', 'Fatehia', 'ART', 'Atelier \"Le GÃnie c\'est Vous !\" ( ReportÃ) Sunday, April 26, 2020 at 9:30 AM Julien Jeanvoine - Art ThÃrapie Fatehia Hameed-addin invited you', '2020-04-22 08:12:55', 'https://facebook.com/events/s/la-semaine-de-lemploi-ostwald-/512391319713513/'),
		(14, 'akkjebsi', 'sawsan', 'announce', 'Bonjour Ã toutes et Ã tous,\r\n\r\nTrois annonces aujourd\'hui !\r\n\r\n1. Le contrÃle de demain est Ãvidemment annulÃ. Nous reviendrons vers vous pour plus d\'informations quant Ã l\'Ãpreuve qui lui sera substituÃe.\r\n\r\n2. Ce soir petite confÃrence sur \"Les modÃles Ãconomiques du logiciel libre\", Ãa se passe ici : https://www.meetup.com/fr-FR/Wild-Code-School-Strasbourg/events/269641359/ c\'est gratuit et en ligne !\r\n\r\n3. Depuis une semaine une appli de petites annonces a ÃtÃ dÃveloppÃe pour les Ãtudiants, par la fac. Elle vous permet si vous le souhaitez proposer votre aide pour des compÃtences que vous avez, demander de l\'aide dans des compÃtences oÃ vous avez du mal, proposer des projets qui vous tiennent Ã coeur ou des activitÃs en groupe, les sorties en ce moment c\'est compliquÃ, mais pourquoi pas des parties de jeux-vidÃos par exemple ou du travail de groupe, Ãvidemment tous Ãa en ligne ! Pour y accÃder Ãa se passe ici : \r\n\r\nBonne journÃe Ã toutes et Ã tous !', '2020-04-22 18:09:19', 'https://feu.unistra.fr');
		
		-- --------------------------------------------------------
		
		--
		-- Table structure for table `contact`
		--
		
		DROP TABLE IF EXISTS `contact`;
		CREATE TABLE IF NOT EXISTS `contact` (
			  `id` int(11) NOT NULL AUTO_INCREMENT,
			  `email` varchar(255) NOT NULL,
			  `message` text NOT NULL,
			  `dateMessage` date NOT NULL,
			  PRIMARY KEY (`id`)
			) ENGINE=InnoDB AUTO_INCREMENT=313 DEFAULT CHARSET=utf8;
			
			--
			-- Dumping data for table `contact`
			--
			
			INSERT INTO `contact` (`id`, `email`, `message`, `dateMessage`) VALUES
			(312, 'blabla@gmail.com', 'hio', '2020-04-24');
			
			-- --------------------------------------------------------
			
			--
			-- Table structure for table `users`
			--
			
			DROP TABLE IF EXISTS `users`;
			CREATE TABLE IF NOT EXISTS `users` (
				  `id` int(11) NOT NULL AUTO_INCREMENT,
				  `username` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
				  `email` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
				  `password` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
				  PRIMARY KEY (`id`)
				) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
				
				--
				-- Dumping data for table `users`
				--
				
				INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
				(1, 'sun', 'sun@gmail.com', 'ebd556e6dfc99dbed29675ce1c6c68e5'),
				(2, 'sundus', 'sundus@gmail.com', '939243514a19d9fed7dccf6ea71c8594'),
				(3, 'H.fatehia', 'hameedfathia@gmail.com', '1c74b04f0d5de9cc190c7431bae57b5d'),
				(4, 'sawsan', 'kebsisawsan@gmail.com', '925544d7f90cd3663531546f080bbed8');
				COMMIT;
				
				/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
				/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
				/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
				{{
