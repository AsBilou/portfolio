<?php



/**
 * This class defines the structure of the 'portfolio_article' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.portfolio.map
 */
class PortfolioArticleTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'portfolio.map.PortfolioArticleTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('portfolio_article');
        $this->setPhpName('PortfolioArticle');
        $this->setClassname('PortfolioArticle');
        $this->setPackage('portfolio');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idArticle', 'Idarticle', 'INTEGER', true, null, null);
        $this->addColumn('nom', 'Nom', 'VARCHAR', true, 45, null);
        $this->addColumn('type', 'Type', 'VARCHAR', true, 45, null);
        $this->addColumn('language', 'Language', 'VARCHAR', true, 45, null);
        $this->addColumn('materiel', 'Materiel', 'VARCHAR', true, 45, null);
        $this->addColumn('description', 'Description', 'VARCHAR', true, 1000, null);
        $this->addColumn('documentation', 'Documentation', 'VARCHAR', true, 45, null);
        $this->addColumn('access', 'Access', 'VARCHAR', false, 45, null);
        $this->addForeignKey('categorie', 'Categorie', 'INTEGER', 'portfolio_categorie', 'id', true, null, null);
        $this->addColumn('img', 'Img', 'VARCHAR', false, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('article_categorie', 'PortfolioCategorie', RelationMap::MANY_TO_ONE, array('categorie' => 'id', ), 'CASCADE', null);
    } // buildRelations()

} // PortfolioArticleTableMap
