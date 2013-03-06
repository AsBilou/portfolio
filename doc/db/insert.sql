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
(1, 'Sport', 'Rugby, voile, ski.'),
(2, 'Loisirs', 'Voyages (USA, Italie, Maroc, Antilles, Egypte, etc), cinÃ©ma, musique, photo, jeux-vidÃ©o.');


--
-- Contenu de la table `portfolio_skills`
--

INSERT INTO `portfolio_skills` (`id`, `type`, `description`) VALUES
(1, 'Langue', 'Anglais lu, parlÃ© et Ã©crit.');

INSERT INTO `portfolio_categorie` (`id`, `nom`) VALUES
 (1, 'site'),
 (2, 'application'),
 (3, 'projet');

INSERT INTO `portfolio_article` (`id`, `nom`, `type`, `language`, `materiel`, `description`, `documentation`, `Access`, `categorie`, `img`) VALUES
(4, 'Senticom', 'Site d''actualité', 'PHP / HTML / SQL / CSS', 'Serveur web / Serveur de base de donnée', 'Senticom est un site d''actualité qui permet a la société qui l''utilise de présenter ses secteurs d''activité et ses créations.', 'PTI_4_Senciom.pdf', 'senticom/', 1, 'senticom.jpg'),
(3, 'Sport3000', 'Site communautaire', 'PHP / HTML / SQL / JavaScript / Ajax / CSS', 'Serveur web / Serveur de base de donnée', 'Sport 3000 est un site communautaire qui permet au sportif de se rencontrer. Chaque utilisateur connecté peut ajouter un markeur pour indiquer à toute la communauté qu''il pratique un sport à cette endroit. Sur le markeur sont indiqué la date d''ajout, le sport pratiqué et l''adresse mail du sportif. Un menu déroulant permet a l''utilisateur de sélectionner plus finement le sport qu''il pratique et ainsi afficher que les markeurs du sport sélectionné.', 'PTI_3_Sport3000.pdf', 'sport/', 1, 'sport.jpg'),
(5, 'Waterfall', 'Site E-Commerce', 'PHP / HTML / SQL / CSS', 'Serveur web / Serveur de base de données', 'Waterfall est un fabriquant français d''enceinte de haute qualité. Ce site non officiel est un site de e-commerce qui permet au client d''acheter en ligne des enceintes.', 'PTI_5_Waterfall.pdf', 'waterfall/', 1, 'waterfall.jpg'),
(6, 'Cocktail 3000', 'Site intranet de gestion', 'PHP / HTML / SQL / JavaScript / Ajax / CSS', 'Serveur web / Serveur de base de donnée', 'Cocktail 3000 est l''interface web d''une application que j''ai codé en Java. Elle permet de gerer des boissons et des cocktails. L''utilisateur peux ainsi créer des cocktails a partir des boissons présente dans la base de données. Et si les boissons qu''il demande n''existe pas, alors il peux les créer dans l''onglet de gestion des boissons. Ce site est prévue pour une utilisation en intranet. C''est pour cela qu''il n''y a pas d''identification.', 'PTI_2_Cocktail_PHP.pdf', 'cocktail/', 1, 'cocktail.jpg'),
(7, 'The amazing maze', 'Jeu', 'PHP / HTML / CSS / JavaScript', 'Serveur web', 'The amazing maze est un jeu développé en PHP et Javascript. Lors du chargement de la page, un labyrinthe est généré automatiquement. Le joueur peut déplacer la petite balle avec les touches de son clavier ou en cliquant sur les flèches directionnelles. ', 'http://github.com/AsBilou/Maze_LPDW', 'maze/', 1, 'maze.png');
