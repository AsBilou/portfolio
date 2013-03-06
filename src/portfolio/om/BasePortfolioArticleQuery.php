<?php


/**
 * Base class that represents a query for the 'portfolio_article' table.
 *
 *
 *
 * @method PortfolioArticleQuery orderById($order = Criteria::ASC) Order by the id column
 * @method PortfolioArticleQuery orderByNom($order = Criteria::ASC) Order by the nom column
 * @method PortfolioArticleQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method PortfolioArticleQuery orderByLanguage($order = Criteria::ASC) Order by the language column
 * @method PortfolioArticleQuery orderByMateriel($order = Criteria::ASC) Order by the materiel column
 * @method PortfolioArticleQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method PortfolioArticleQuery orderByDocumentation($order = Criteria::ASC) Order by the documentation column
 * @method PortfolioArticleQuery orderByAccess($order = Criteria::ASC) Order by the access column
 * @method PortfolioArticleQuery orderByCategorie($order = Criteria::ASC) Order by the categorie column
 * @method PortfolioArticleQuery orderByImg($order = Criteria::ASC) Order by the img column
 *
 * @method PortfolioArticleQuery groupById() Group by the id column
 * @method PortfolioArticleQuery groupByNom() Group by the nom column
 * @method PortfolioArticleQuery groupByType() Group by the type column
 * @method PortfolioArticleQuery groupByLanguage() Group by the language column
 * @method PortfolioArticleQuery groupByMateriel() Group by the materiel column
 * @method PortfolioArticleQuery groupByDescription() Group by the description column
 * @method PortfolioArticleQuery groupByDocumentation() Group by the documentation column
 * @method PortfolioArticleQuery groupByAccess() Group by the access column
 * @method PortfolioArticleQuery groupByCategorie() Group by the categorie column
 * @method PortfolioArticleQuery groupByImg() Group by the img column
 *
 * @method PortfolioArticleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PortfolioArticleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PortfolioArticleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PortfolioArticleQuery leftJoinarticle_categorie($relationAlias = null) Adds a LEFT JOIN clause to the query using the article_categorie relation
 * @method PortfolioArticleQuery rightJoinarticle_categorie($relationAlias = null) Adds a RIGHT JOIN clause to the query using the article_categorie relation
 * @method PortfolioArticleQuery innerJoinarticle_categorie($relationAlias = null) Adds a INNER JOIN clause to the query using the article_categorie relation
 *
 * @method PortfolioArticle findOne(PropelPDO $con = null) Return the first PortfolioArticle matching the query
 * @method PortfolioArticle findOneOrCreate(PropelPDO $con = null) Return the first PortfolioArticle matching the query, or a new PortfolioArticle object populated from the query conditions when no match is found
 *
 * @method PortfolioArticle findOneByNom(string $nom) Return the first PortfolioArticle filtered by the nom column
 * @method PortfolioArticle findOneByType(string $type) Return the first PortfolioArticle filtered by the type column
 * @method PortfolioArticle findOneByLanguage(string $language) Return the first PortfolioArticle filtered by the language column
 * @method PortfolioArticle findOneByMateriel(string $materiel) Return the first PortfolioArticle filtered by the materiel column
 * @method PortfolioArticle findOneByDescription(string $description) Return the first PortfolioArticle filtered by the description column
 * @method PortfolioArticle findOneByDocumentation(string $documentation) Return the first PortfolioArticle filtered by the documentation column
 * @method PortfolioArticle findOneByAccess(string $access) Return the first PortfolioArticle filtered by the access column
 * @method PortfolioArticle findOneByCategorie(int $categorie) Return the first PortfolioArticle filtered by the categorie column
 * @method PortfolioArticle findOneByImg(string $img) Return the first PortfolioArticle filtered by the img column
 *
 * @method array findById(int $id) Return PortfolioArticle objects filtered by the id column
 * @method array findByNom(string $nom) Return PortfolioArticle objects filtered by the nom column
 * @method array findByType(string $type) Return PortfolioArticle objects filtered by the type column
 * @method array findByLanguage(string $language) Return PortfolioArticle objects filtered by the language column
 * @method array findByMateriel(string $materiel) Return PortfolioArticle objects filtered by the materiel column
 * @method array findByDescription(string $description) Return PortfolioArticle objects filtered by the description column
 * @method array findByDocumentation(string $documentation) Return PortfolioArticle objects filtered by the documentation column
 * @method array findByAccess(string $access) Return PortfolioArticle objects filtered by the access column
 * @method array findByCategorie(int $categorie) Return PortfolioArticle objects filtered by the categorie column
 * @method array findByImg(string $img) Return PortfolioArticle objects filtered by the img column
 *
 * @package    propel.generator.portfolio.om
 */
abstract class BasePortfolioArticleQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePortfolioArticleQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'portfolio', $modelName = 'PortfolioArticle', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PortfolioArticleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PortfolioArticleQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PortfolioArticleQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PortfolioArticleQuery) {
            return $criteria;
        }
        $query = new PortfolioArticleQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   PortfolioArticle|PortfolioArticle[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PortfolioArticlePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PortfolioArticlePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 PortfolioArticle A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 PortfolioArticle A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `nom`, `type`, `language`, `materiel`, `description`, `documentation`, `access`, `categorie`, `img` FROM `portfolio_article` WHERE `id` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new PortfolioArticle();
            $obj->hydrate($row);
            PortfolioArticlePeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return PortfolioArticle|PortfolioArticle[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|PortfolioArticle[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return PortfolioArticleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PortfolioArticlePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PortfolioArticleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PortfolioArticlePeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PortfolioArticleQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(PortfolioArticlePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(PortfolioArticlePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PortfolioArticlePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the nom column
     *
     * Example usage:
     * <code>
     * $query->filterByNom('fooValue');   // WHERE nom = 'fooValue'
     * $query->filterByNom('%fooValue%'); // WHERE nom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PortfolioArticleQuery The current query, for fluid interface
     */
    public function filterByNom($nom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nom)) {
                $nom = str_replace('*', '%', $nom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PortfolioArticlePeer::NOM, $nom, $comparison);
    }

    /**
     * Filter the query on the type column
     *
     * Example usage:
     * <code>
     * $query->filterByType('fooValue');   // WHERE type = 'fooValue'
     * $query->filterByType('%fooValue%'); // WHERE type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PortfolioArticleQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $type)) {
                $type = str_replace('*', '%', $type);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PortfolioArticlePeer::TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the language column
     *
     * Example usage:
     * <code>
     * $query->filterByLanguage('fooValue');   // WHERE language = 'fooValue'
     * $query->filterByLanguage('%fooValue%'); // WHERE language LIKE '%fooValue%'
     * </code>
     *
     * @param     string $language The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PortfolioArticleQuery The current query, for fluid interface
     */
    public function filterByLanguage($language = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($language)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $language)) {
                $language = str_replace('*', '%', $language);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PortfolioArticlePeer::LANGUAGE, $language, $comparison);
    }

    /**
     * Filter the query on the materiel column
     *
     * Example usage:
     * <code>
     * $query->filterByMateriel('fooValue');   // WHERE materiel = 'fooValue'
     * $query->filterByMateriel('%fooValue%'); // WHERE materiel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $materiel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PortfolioArticleQuery The current query, for fluid interface
     */
    public function filterByMateriel($materiel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($materiel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $materiel)) {
                $materiel = str_replace('*', '%', $materiel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PortfolioArticlePeer::MATERIEL, $materiel, $comparison);
    }

    /**
     * Filter the query on the description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterByDescription('%fooValue%'); // WHERE description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PortfolioArticleQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $description)) {
                $description = str_replace('*', '%', $description);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PortfolioArticlePeer::DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the documentation column
     *
     * Example usage:
     * <code>
     * $query->filterByDocumentation('fooValue');   // WHERE documentation = 'fooValue'
     * $query->filterByDocumentation('%fooValue%'); // WHERE documentation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $documentation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PortfolioArticleQuery The current query, for fluid interface
     */
    public function filterByDocumentation($documentation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($documentation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $documentation)) {
                $documentation = str_replace('*', '%', $documentation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PortfolioArticlePeer::DOCUMENTATION, $documentation, $comparison);
    }

    /**
     * Filter the query on the access column
     *
     * Example usage:
     * <code>
     * $query->filterByAccess('fooValue');   // WHERE access = 'fooValue'
     * $query->filterByAccess('%fooValue%'); // WHERE access LIKE '%fooValue%'
     * </code>
     *
     * @param     string $access The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PortfolioArticleQuery The current query, for fluid interface
     */
    public function filterByAccess($access = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($access)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $access)) {
                $access = str_replace('*', '%', $access);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PortfolioArticlePeer::ACCESS, $access, $comparison);
    }

    /**
     * Filter the query on the categorie column
     *
     * Example usage:
     * <code>
     * $query->filterByCategorie(1234); // WHERE categorie = 1234
     * $query->filterByCategorie(array(12, 34)); // WHERE categorie IN (12, 34)
     * $query->filterByCategorie(array('min' => 12)); // WHERE categorie >= 12
     * $query->filterByCategorie(array('max' => 12)); // WHERE categorie <= 12
     * </code>
     *
     * @see       filterByarticle_categorie()
     *
     * @param     mixed $categorie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PortfolioArticleQuery The current query, for fluid interface
     */
    public function filterByCategorie($categorie = null, $comparison = null)
    {
        if (is_array($categorie)) {
            $useMinMax = false;
            if (isset($categorie['min'])) {
                $this->addUsingAlias(PortfolioArticlePeer::CATEGORIE, $categorie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($categorie['max'])) {
                $this->addUsingAlias(PortfolioArticlePeer::CATEGORIE, $categorie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PortfolioArticlePeer::CATEGORIE, $categorie, $comparison);
    }

    /**
     * Filter the query on the img column
     *
     * Example usage:
     * <code>
     * $query->filterByImg('fooValue');   // WHERE img = 'fooValue'
     * $query->filterByImg('%fooValue%'); // WHERE img LIKE '%fooValue%'
     * </code>
     *
     * @param     string $img The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PortfolioArticleQuery The current query, for fluid interface
     */
    public function filterByImg($img = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($img)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $img)) {
                $img = str_replace('*', '%', $img);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PortfolioArticlePeer::IMG, $img, $comparison);
    }

    /**
     * Filter the query by a related PortfolioCategorie object
     *
     * @param   PortfolioCategorie|PropelObjectCollection $portfolioCategorie The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PortfolioArticleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByarticle_categorie($portfolioCategorie, $comparison = null)
    {
        if ($portfolioCategorie instanceof PortfolioCategorie) {
            return $this
                ->addUsingAlias(PortfolioArticlePeer::CATEGORIE, $portfolioCategorie->getId(), $comparison);
        } elseif ($portfolioCategorie instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PortfolioArticlePeer::CATEGORIE, $portfolioCategorie->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByarticle_categorie() only accepts arguments of type PortfolioCategorie or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the article_categorie relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PortfolioArticleQuery The current query, for fluid interface
     */
    public function joinarticle_categorie($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('article_categorie');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'article_categorie');
        }

        return $this;
    }

    /**
     * Use the article_categorie relation PortfolioCategorie object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PortfolioCategorieQuery A secondary query class using the current class as primary query
     */
    public function usearticle_categorieQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinarticle_categorie($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'article_categorie', 'PortfolioCategorieQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   PortfolioArticle $portfolioArticle Object to remove from the list of results
     *
     * @return PortfolioArticleQuery The current query, for fluid interface
     */
    public function prune($portfolioArticle = null)
    {
        if ($portfolioArticle) {
            $this->addUsingAlias(PortfolioArticlePeer::ID, $portfolioArticle->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
