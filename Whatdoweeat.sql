-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mer. 23 mai 2018 à 16:20
-- Version du serveur :  10.1.28-MariaDB
-- Version de PHP :  7.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Whatdoweeat`
--

-- --------------------------------------------------------

--
-- Structure de la table `FIrstDish`
--

CREATE TABLE `FIrstDish` (
  `FIrstDish_Id` int(11) NOT NULL,
  `FIrstDish_Name` varchar(255) NOT NULL,
  `FIrstDish_Description` varchar(255) NOT NULL,
  `Restaurant_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `FIrstDish`
--

INSERT INTO `FIrstDish` (`FIrstDish_Id`, `FIrstDish_Name`, `FIrstDish_Description`, `Restaurant_Id`) VALUES
(1, 'Salade Verte', 'Salade Verte et Cornichons .', 1);

-- --------------------------------------------------------

--
-- Structure de la table `Info`
--

CREATE TABLE `Info` (
  `Info_Id` int(11) NOT NULL,
  `Info_Email` varchar(128) NOT NULL,
  `Info_Mdp` varchar(128) NOT NULL,
  `Info_Tel` int(10) NOT NULL,
  `Info_Adress` varchar(255) NOT NULL,
  `Info_City` varchar(255) NOT NULL,
  `Info_PostalCode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Info`
--

INSERT INTO `Info` (`Info_Id`, `Info_Email`, `Info_Mdp`, `Info_Tel`, `Info_Adress`, `Info_City`, `Info_PostalCode`) VALUES
(1, '', '', 0, '62 Rue des grands moulins', 'Paris', '75013'),
(2, 'eleonore@g', 'abc', 1, 'djiezdjze', 'doedka', '75000'),
(3, 'Eleonore@Ele', 'abc', 123456789, 'djeozidjaz', 'djeiozad', '1');

-- --------------------------------------------------------

--
-- Structure de la table `Menu`
--

CREATE TABLE `Menu` (
  `Menu_Id` int(11) NOT NULL,
  `Menu_Type` int(10) NOT NULL,
  `Menu_Name` varchar(255) NOT NULL,
  `FirstDish_Id` int(11) NOT NULL,
  `SecondDIsh_Id` int(11) NOT NULL,
  `Dessert_Id` int(11) NOT NULL,
  `Menu_Price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Menu`
--

INSERT INTO `Menu` (`Menu_Id`, `Menu_Type`, `Menu_Name`, `FirstDish_Id`, `SecondDIsh_Id`, `Dessert_Id`, `Menu_Price`) VALUES
(1, 1, 'Un bon burger vous est nécessaire.', 1, 1, 1, 16);

-- --------------------------------------------------------

--
-- Structure de la table `Recipe`
--

CREATE TABLE `Recipe` (
  `Recipe_Id` int(11) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `Menu_Id` int(11) NOT NULL,
  `Info_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Recipe`
--

INSERT INTO `Recipe` (`Recipe_Id`, `User_Id`, `Menu_Id`, `Info_Id`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `Restaurant`
--

CREATE TABLE `Restaurant` (
  `Restaurant_Id` int(11) NOT NULL,
  `Restaurant_Name` varchar(255) NOT NULL,
  `Restaurant_City` varchar(255) NOT NULL,
  `Restaurant_PostalCode` varchar(255) NOT NULL,
  `Restaurant_Adress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Restaurant`
--

INSERT INTO `Restaurant` (`Restaurant_Id`, `Restaurant_Name`, `Restaurant_City`, `Restaurant_PostalCode`, `Restaurant_Adress`) VALUES
(1, 'Big Fernand', 'Paris', '75008', '8 rue Big Fernand'),
(2, 'Sushi Sushi', 'Paris', '75013', '135 Bibliothèque François Mitterand');

-- --------------------------------------------------------

--
-- Structure de la table `SecondDIsh`
--

CREATE TABLE `SecondDIsh` (
  `SecondDIsh_Id` int(11) NOT NULL,
  `SecondDish_Description` varchar(255) NOT NULL,
  `Restaurant_Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `SecondDIsh`
--

INSERT INTO `SecondDIsh` (`SecondDIsh_Id`, `SecondDish_Description`, `Restaurant_Id`) VALUES
(1, 'Big Fernand Burger du jour', 1);

-- --------------------------------------------------------

--
-- Structure de la table `ThirdDish`
--

CREATE TABLE `ThirdDish` (
  `ThirdDish_Id` int(11) NOT NULL,
  `ThirdDish_Description` varchar(255) NOT NULL,
  `Restaurant_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ThirdDish`
--

INSERT INTO `ThirdDish` (`ThirdDish_Id`, `ThirdDish_Description`, `Restaurant_Id`) VALUES
(1, 'Moelleux chocolaté', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `FIrstDish`
--
ALTER TABLE `FIrstDish`
  ADD PRIMARY KEY (`FIrstDish_Id`),
  ADD KEY `Restaurant_Id` (`Restaurant_Id`);

--
-- Index pour la table `Info`
--
ALTER TABLE `Info`
  ADD PRIMARY KEY (`Info_Id`);

--
-- Index pour la table `Menu`
--
ALTER TABLE `Menu`
  ADD PRIMARY KEY (`Menu_Id`),
  ADD KEY `Dessert_Id` (`Dessert_Id`),
  ADD KEY `SecondDIsh_Id` (`SecondDIsh_Id`),
  ADD KEY `FirstDish_Id` (`FirstDish_Id`);

--
-- Index pour la table `Recipe`
--
ALTER TABLE `Recipe`
  ADD PRIMARY KEY (`Recipe_Id`),
  ADD KEY `Info_Id` (`Info_Id`),
  ADD KEY `User_Id` (`User_Id`),
  ADD KEY `Menu_Id` (`Menu_Id`);

--
-- Index pour la table `Restaurant`
--
ALTER TABLE `Restaurant`
  ADD PRIMARY KEY (`Restaurant_Id`);

--
-- Index pour la table `SecondDIsh`
--
ALTER TABLE `SecondDIsh`
  ADD PRIMARY KEY (`SecondDIsh_Id`),
  ADD KEY `Restaurant_Id` (`Restaurant_Id`);

--
-- Index pour la table `ThirdDish`
--
ALTER TABLE `ThirdDish`
  ADD PRIMARY KEY (`ThirdDish_Id`),
  ADD KEY `Restaurant_Id` (`Restaurant_Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `FIrstDish`
--
ALTER TABLE `FIrstDish`
  MODIFY `FIrstDish_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `Info`
--
ALTER TABLE `Info`
  MODIFY `Info_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `Menu`
--
ALTER TABLE `Menu`
  MODIFY `Menu_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `Recipe`
--
ALTER TABLE `Recipe`
  MODIFY `Recipe_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `Restaurant`
--
ALTER TABLE `Restaurant`
  MODIFY `Restaurant_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `SecondDIsh`
--
ALTER TABLE `SecondDIsh`
  MODIFY `SecondDIsh_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `ThirdDish`
--
ALTER TABLE `ThirdDish`
  MODIFY `ThirdDish_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `FIrstDish`
--
ALTER TABLE `FIrstDish`
  ADD CONSTRAINT `firstdish_ibfk_1` FOREIGN KEY (`Restaurant_Id`) REFERENCES `Restaurant` (`Restaurant_Id`);

--
-- Contraintes pour la table `Menu`
--
ALTER TABLE `Menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`Dessert_Id`) REFERENCES `ThirdDish` (`ThirdDish_Id`),
  ADD CONSTRAINT `menu_ibfk_2` FOREIGN KEY (`SecondDIsh_Id`) REFERENCES `SecondDIsh` (`SecondDIsh_Id`),
  ADD CONSTRAINT `menu_ibfk_3` FOREIGN KEY (`FirstDish_Id`) REFERENCES `FIrstDish` (`FIrstDish_Id`);

--
-- Contraintes pour la table `Recipe`
--
ALTER TABLE `Recipe`
  ADD CONSTRAINT `recipe_ibfk_1` FOREIGN KEY (`Info_Id`) REFERENCES `Info` (`Info_Id`),
  ADD CONSTRAINT `recipe_ibfk_2` FOREIGN KEY (`User_Id`) REFERENCES `User` (`User_Id`),
  ADD CONSTRAINT `recipe_ibfk_3` FOREIGN KEY (`Menu_Id`) REFERENCES `Menu` (`Menu_Id`);

--
-- Contraintes pour la table `SecondDIsh`
--
ALTER TABLE `SecondDIsh`
  ADD CONSTRAINT `seconddish_ibfk_1` FOREIGN KEY (`Restaurant_Id`) REFERENCES `Restaurant` (`Restaurant_Id`);

--
-- Contraintes pour la table `ThirdDish`
--
ALTER TABLE `ThirdDish`
  ADD CONSTRAINT `thirddish_ibfk_1` FOREIGN KEY (`Restaurant_Id`) REFERENCES `Restaurant` (`Restaurant_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
