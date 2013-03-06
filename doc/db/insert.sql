--
-- Base de données: `portfolio`
--

--
-- Contenu de la table `portfolio_company`
--

INSERT INTO `portfolio_company` (`id`, `start`, `end`, `company`, `job`, `description`, `type`, `city`, `zipCode`) VALUES
(1, 2008, 2009, 'Crapato Biciclo', 'Emplois d''Ã©tÃ©', 'Gestion d''une structure de trampoline, gestion de la location de Kayak et zodiak, gestion de chateau gonflabe', 'contrat saisonnier', 'Morgat', 29),
(2, 2010, 2012, 'Senticom', 'Community manager/dÃ©veloppeur web', 'Mise en place des rÃ©seaux sociaux de lâ€™entreprise et de leurs maintenances.\r\nCrÃ©ation et dÃ©veloppement du site de lâ€™entreprise (hors design).', 'Contrat d''alternance', 'Paris', 75),
(3, 2012, 2013, 'Groupe Point P', 'DÃ©veloppeur web', 'CrÃ©ation de site mobile a partir de site institutionnel', 'Contrat d''alternance', 'Paris', 75);

--
-- Contenu de la table `portfolio_diplome`
--

INSERT INTO `portfolio_diplome` (`id`, `years`, `name`) VALUES
(1, 2008, 'BaccalaurÃ©at S, option SVT'),
(2, 2012, 'BTS informatique de gestion, option dÃ©veloppeur dâ€™applications');

--
-- Contenu de la table `portfolio_etude`
--

INSERT INTO `portfolio_etude` (`id`, `start`, `end`, `name`, `university`, `city`, `zipCode`) VALUES
(1, 2008, 2010, '1Ã¨re annÃ©e DUT GÃ©nie Electrique et Informatique Industriel', 'Paris X', 'Ville d''Avray', 92),
(2, 2010, 2012, 'BTS Informatique de gestion en alternance, option dÃ©veloppeur d''application', 'ITIN', 'Cergy', 95),
(3, 2012, 2013, 'Licence DÃ©veloppeur Web SystÃ¨me d''Information et MultimÃ©dia SpÃ©cialisÃ© DÃ©veloppeur Web et Web Mobile', 'UniversitÃ© de Cergy', 'Gennevilliers', 92);

--
-- Contenu de la table `portfolio_formation`
--

INSERT INTO `portfolio_formation` (`id`, `years`, `name`, `city`, `zipCode`) VALUES
(2, 2005, 'A2C1 : Partie thÃ©orique du monitorat de voile', 'Morgat', 29),
(3, 2009, 'Brevet d''Initiation a l''AÃ©ronautique', 'Ville d''Avray', 92);

--
-- Contenu de la table `portfolio_interest`
--

INSERT INTO `portfolio_interest` (`id`, `type`, `description`) VALUES
(1, 'Sport', 'Rugby, voile, ski.');

--
-- Contenu de la table `portfolio_skills`
--

INSERT INTO `portfolio_skills` (`id`, `type`, `description`) VALUES
(2, 'Langue', 'Anglais lu, parlÃ© et Ã©crit.');