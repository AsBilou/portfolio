
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

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
-- portfolio_categorie
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `portfolio_categorie`;

CREATE TABLE `portfolio_categorie`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `nom` VARCHAR(45) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
