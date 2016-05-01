
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 14 Février 2016 à 16:19
-- Version du serveur: 10.0.20-MariaDB
-- Version de PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `u384378146_ucbl`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualite`
--

CREATE TABLE IF NOT EXISTS `actualite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `date_heure` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Contenu de la table `actualite`
--

INSERT INTO `actualite` (`id`, `nom`, `prenom`, `email`, `categorie`, `titre`, `description`, `date_heure`, `image_name`) VALUES
(57, 'Abebe', 'Fanuel', 'fanoueltad@gmail.com', 'Cinema', 'Star Wars', 'L’Orchestre Symphonique INSA – Universités, orchestre universitaire lyonnais, aborde chaque année un répertoire varié, autour des classiques de la musique symphonique romantique, classique, mais aussi moderne. La qualité des musiciens de l’OSIU est depuis longtemps reconnue et le Théâtre Astrée est chaque fois heureux de les accueillir. Cette année ils se lancent dans un programme de musiques de films, et revisitent les grands noms du genre : Star Wars, Harry Potter, Pirates de Caraïbes et d’autres !.', '2016-02-14 01:45:31', 'starwars.png'),
(56, 'Abebe', 'Fanuel', 'fanoueltad@gmail.com', 'Football', 'Theatre Astree', 'Le Théâtre Astrée (450 places), situé sur le Domaine Scientifique de la Doua à Villeurbanne, est né de la volonté de l''Université Claude Bernard Lyon 1 de développer une politique culturelle originale avec l''ouverture d''un centre culturel pluridisciplinaire en milieu universitaire. Les grands axes de cette politique consistent à réunir, sur un même site, formation : 13 ateliers de pratique artistique pour les étudiants et les personnels de l''Université sous la direction pédagogique d''artistes professionnels, et création/diffusion : compagnies en résidence, accueil de compagnies professionnelles, politique d''émergence de jeunes compagnies, accueil de spectacles émanant des centres de formation artistiques régionaux, réalisations des ateliers de l''Université...\r\n\r\nUne moyenne de 90 spectacles ou expositions par an dans toutes les disciplines artistiques (théâtre, danse, musique, vidéo, cinéma, arts plastiques, photographie...) réunissent sur un même lieu publics étudiant, universitaire et publics de l''agglomération, se concluant chaque mois de mai par les Arthémiades, festival annuel du spectacle vivant à Lyon 1.', '2016-02-14 01:41:20', 'astree.jpg'),
(55, 'Abebe', 'Fanuel', 'fanoueltad@gmail.com', 'Football', 'Theatre Astree', 'Le Théâtre Astrée (450 places), situé sur le Domaine Scientifique de la Doua à Villeurbanne, est né de la volonté de l''Université Claude Bernard Lyon 1 de développer une politique culturelle originale avec l''ouverture d''un centre culturel pluridisciplinaire en milieu universitaire. Les grands axes de cette politique consistent à réunir, sur un même site, formation : 13 ateliers de pratique artistique pour les étudiants et les personnels de l''Université sous la direction pédagogique d''artistes professionnels, et création/diffusion : compagnies en résidence, accueil de compagnies professionnelles, politique d''émergence de jeunes compagnies, accueil de spectacles émanant des centres de formation artistiques régionaux, réalisations des ateliers de l''Université...\r\n\r\nUne moyenne de 90 spectacles ou expositions par an dans toutes les disciplines artistiques (théâtre, danse, musique, vidéo, cinéma, arts plastiques, photographie...) réunissent sur un même lieu publics étudiant, universitaire et publics de l''agglomération, se concluant chaque mois de mai par les Arthémiades, festival annuel du spectacle vivant à Lyon 1.', '2016-02-14 01:39:48', 'astree.jpg'),
(54, 'Abebe', 'Fanuel', 'fanoueltad@gmail.com', 'Football', 'Equipe de Foot Elite', 'Nos étudiants  emmenés par les coaches François POPP et Benoit LACAZETTE ont participé du 1er au 10 aout aux Championnats d’Europe Universitaire de futsal et ce sont qualifiés pour un 1/8ème de finale contre l’Université de Paris 1 (Champion de France 2015 et Champion d’Europe en titre) !!!\r\n\r\nDans des conditions exceptionnelles d’organisation et d’infrastructures (merci Poznan et la Pologne !), 22 équipes venant de toute l’Europe (France, Pologne, Israël, Allemagne, Croatie, Turquie, Ukraine, Russie, Arménie, Norvège, Portugal, Angleterre et Irlande) ont lutté pendant 7 jours pour atteindre le titre suprême remporté cette année par les Croates de l’Université de Vern, 3 à 1, face aux Russes de l’université de Sibérie !\r\n\r\nLes hommes du capitaine Mohamed GALLOUZE ont livré 6 matches de très haute intensité. Tout d’abord contre les équipes d’Arménie (nul 3/3), d’Israël (défaite 6/0) et d’Angleterre (victoire 4/2) en poule.\r\n\r\nPuis en 1/8ème contre Paris 1 (composé de toute l’équipe du KB United Champion de France 2015 de Ligue 1) ou nous livrons un bon match mais le niveau de nos adversaires ne nous permet pas de tenir deux mi temps : défaite 7 à 0. Les matches de classement sont à notre portée et très serrés, mais nous nous inclinons par trois fois contre les équipes de Poznan University of Economics (4 à 3), de Munster (6 à 2) et de Norwegian School of Economics (5 à 2).', '2016-02-14 01:25:51', 'lyon_foot.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
