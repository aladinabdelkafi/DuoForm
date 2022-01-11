-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 11 jan. 2022 à 02:28
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `duoform`
--

-- --------------------------------------------------------

--
-- Structure de la table `meeting`
--

CREATE TABLE `meeting` (
  `id` int(3) NOT NULL,
  `sujet` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `etudiant` varchar(3) NOT NULL,
  `accompagnateur` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `meeting`
--

INSERT INTO `meeting` (`id`, `sujet`, `date`, `lieu`, `etudiant`, `accompagnateur`) VALUES
(1, 'PHP programming', '2022-02-03 10:00:00', '86 Rue Pasteur, 69007 Lyon', '8', '11'),
(2, 'Design thinking', '2022-01-16 14:30:00', 'VisioConférance', '10', '11'),
(3, 'aaaaa', '2022-01-15 10:30:00', 'ici', '2', '19'),
(4, 'UX/UI', '2022-01-30 08:00:00', 'VisioConférance', '10', '13'),
(5, 'UX/UI', '2022-02-01 10:00:00', 'lyon', '15', '13');

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `id` int(4) NOT NULL,
  `nom_prenom_pers` varchar(255) NOT NULL,
  `date_naiss_pers` varchar(255) NOT NULL,
  `interet_pers` varchar(255) NOT NULL,
  `email_pers` varchar(255) NOT NULL,
  `mdp_pers` varchar(255) NOT NULL,
  `tel_pers` varchar(255) NOT NULL,
  `preferences_rencontre` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `domaine` varchar(255) NOT NULL,
  `nivEtudProf` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`id`, `nom_prenom_pers`, `date_naiss_pers`, `interet_pers`, `email_pers`, `mdp_pers`, `tel_pers`, `preferences_rencontre`, `ville`, `bio`, `domaine`, `nivEtudProf`, `image`, `id_role`) VALUES
(8, 'Alaeddine ABDELKEFI', '20/02/1997', 'Sciences,Dev', 'alaeddine.abdelkafi@viacesi.fr', '123', '0628636730', 'Dans nos locaux,En visio,Un lieu public', 'vienne', 'Bonjour, moi c’est Alaeddine, je suis chef cuisto, j’aime le bon vin et les raclettes, tu connais !', 'Sciences,Dev', '', 'avatars-3@2x.png', 'Etudiant'),
(9, 'Eric Hochet', '20/10/1990', 'Sciences,UX/UI,Dev', 'aladinabdelkafi02@gmail.com', '123', '0623583030', 'Dans nos locaux,En visio,Un lieu public', 'lyon', 'Bonjour, moi c’est Eric, je suis professionnelle de la photographie, j’aime la nature et les bonnes bières à l’ancienne tu connais !', 'Sciences,UX/UI,Dev', '10', 'avatars-1@2x.png', 'Professionel'),
(10, 'sabrine', '20/10/1996', 'Dev', 'sabrine@gmail.com', '123', '0632587469', 'Dans nos locaux,Un lieu public,En visio', 'lyon', 'Bonjour c\'est le bio de Sabrine', 'Sciences,Dev', '', 'avatars-4@2x.png', 'Etudiant'),
(11, 'Mahdi chaabouni', '20/02/1997', 'Droit,Commerce,Psycho', 'mahdi@gmail.com', '123', '0628636730', 'En visio,Un lieu public', 'vienne', 'Bonjour, moi c’est Mahdi, je suis professionnelle du développement, j’aime la nature et les bonnes bières à l’ancienne tu connais !', 'Droit,Commerce,Psycho', '10', 'avatars-7@2x.png', 'Professionel'),
(13, 'Bastien boisjot', '20/05/1995', 'Dev,UX/UI', 'bastien@gmail.com', '123', '0658796420', 'En visio,Un lieu public', 'rouen', 'Bonjour, moi c’est Bastien, je suis professionnelle du développement, j’aime la nature et les bonnes\n            bières à l’ancienne tu connais !', 'Dev,UX/UI', '', 'avatars-1@1x.png', 'Professionel'),
(14, 'gabriel zucman', '03/12/1990', 'UX/UI,Dev,Autre', 'gabriel@gmail.com', '123', '0630286450', 'En visio,Un lieu public', 'lyon', 'mon bio', 'UX/UI,Dev,Autre', '10', 'avatars-6@2x.png', 'Professionel'),
(15, 'Rayan Ali', '8/08/2000', 'UX/UI', 'rayan@gmail.com', '123', '0628636820', 'Dans nos locaux,En visio,Un lieu public', 'lyon', 'Bonjour c\'est le bio de rayan', 'UX/UI', '', 'avatars-2@2x.png', 'Etudiant');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id` int(1) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'Etudiant'),
(2, 'Professionel');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `meeting`
--
ALTER TABLE `meeting`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
