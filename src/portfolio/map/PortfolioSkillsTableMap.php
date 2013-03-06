<?php



/**
 * This class defines the structure of the 'portfolio_skills' table.
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
class PortfolioSkillsTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'portfolio.map.PortfolioSkillsTableMap';

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
        $this->setName('portfolio_skills');
        $this->setPhpName('PortfolioSkills');
        $this->setClassname('PortfolioSkills');
        $this->setPackage('portfolio');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('type', 'Type', 'VARCHAR', true, 45, null);
        $this->addColumn('description', 'Description', 'VARCHAR', true, 1000, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // PortfolioSkillsTableMap
