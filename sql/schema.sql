
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- portfolio_categorie
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `portfolio_categorie`;

CREATE TABLE `portfolio_categorie`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `nom` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- portfolio_article
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `portfolio_article`;

CREATE TABLE `portfolio_article`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `nom` VARCHAR(45) NOT NULL,
    `type` VARCHAR(45) NOT NULL,
    `language` VARCHAR(45) NOT NULL,
    `materiel` VARCHAR(45) NOT NULL,
    `description` VARCHAR(1000) NOT NULL,
    `documentation` VARCHAR(45) NOT NULL,
    `access` VARCHAR(45),
    `categorie` INTEGER NOT NULL,
    `img` VARCHAR(45),
    PRIMARY KEY (`id`),
    INDEX `portfolio_article_FI_1` (`categorie`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- portfolio_etude
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `portfolio_etude`;

CREATE TABLE `portfolio_etude`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `start` INTEGER NOT NULL,
    `end` INTEGER NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `university` VARCHAR(255) NOT NULL,
    `city` VARCHAR(45) NOT NULL,
    `zipCode` INTEGER NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- portfolio_diplome
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `portfolio_diplome`;

CREATE TABLE `portfolio_diplome`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `years` INTEGER NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- portfolio_company
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `portfolio_company`;

CREATE TABLE `portfolio_company`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `start` INTEGER NOT NULL,
    `end` INTEGER NOT NULL,
    `company` VARCHAR(255) NOT NULL,
    `job` VARCHAR(255) NOT NULL,
    `description` VARCHAR(255) NOT NULL,
    `type` VARCHAR(45) NOT NULL,
    `city` VARCHAR(45) NOT NULL,
    `zipCode` INTEGER NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- portfolio_formation
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `portfolio_formation`;

CREATE TABLE `portfolio_formation`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `years` INTEGER NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `city` VARCHAR(45) NOT NULL,
    `zipCode` INTEGER NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- portfolio_skills
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `portfolio_skills`;

CREATE TABLE `portfolio_skills`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `type` VARCHAR(45) NOT NULL,
    `description` VARCHAR(1000) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- portfolio_interest
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `portfolio_interest`;

CREATE TABLE `portfolio_interest`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `type` VARCHAR(45) NOT NULL,
    `description` VARCHAR(1000) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- portfolio_admin
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `portfolio_admin`;

CREATE TABLE `portfolio_admin`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `login` VARCHAR(45) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `password` VARCHAR(100) NOT NULL,
    `role` VARCHAR(100) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
