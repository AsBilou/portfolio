<?php



/**
 * This class defines the structure of the 'portfolio_categorie' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.site_name.map
 */
class PortfolioCategorieTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'site_name.map.PortfolioCategorieTableMap';

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
        $this->setName('portfolio_categorie');
        $this->setPhpName('PortfolioCategorie');
        $this->setClassname('PortfolioCategorie');
        $this->setPackage('site_name');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('nom', 'Nom', 'VARCHAR', true, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('PortfolioArticle', 'PortfolioArticle', RelationMap::ONE_TO_MANY, array('id' => 'categorie', ), 'CASCADE', null, 'PortfolioArticles');
    } // buildRelations()

} // PortfolioCategorieTableMap
