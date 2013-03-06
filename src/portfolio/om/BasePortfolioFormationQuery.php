<?php


/**
 * Base class that represents a query for the 'portfolio_formation' table.
 *
 *
 *
 * @method PortfolioFormationQuery orderById($order = Criteria::ASC) Order by the id column
 * @method PortfolioFormationQuery orderByYears($order = Criteria::ASC) Order by the years column
 * @method PortfolioFormationQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method PortfolioFormationQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method PortfolioFormationQuery orderByZipcode($order = Criteria::ASC) Order by the zipCode column
 *
 * @method PortfolioFormationQuery groupById() Group by the id column
 * @method PortfolioFormationQuery groupByYears() Group by the years column
 * @method PortfolioFormationQuery groupByName() Group by the name column
 * @method PortfolioFormationQuery groupByCity() Group by the city column
 * @method PortfolioFormationQuery groupByZipcode() Group by the zipCode column
 *
 * @method PortfolioFormationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PortfolioFormationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PortfolioFormationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PortfolioFormation findOne(PropelPDO $con = null) Return the first PortfolioFormation matching the query
 * @method PortfolioFormation findOneOrCreate(PropelPDO $con = null) Return the first PortfolioFormation matching the query, or a new PortfolioFormation object populated from the query conditions when no match is found
 *
 * @method PortfolioFormation findOneByYears(int $years) Return the first PortfolioFormation filtered by the years column
 * @method PortfolioFormation findOneByName(string $name) Return the first PortfolioFormation filtered by the name column
 * @method PortfolioFormation findOneByCity(string $city) Return the first PortfolioFormation filtered by the city column
 * @method PortfolioFormation findOneByZipcode(int $zipCode) Return the first PortfolioFormation filtered by the zipCode column
 *
 * @method array findById(int $id) Return PortfolioFormation objects filtered by the id column
 * @method array findByYears(int $years) Return PortfolioFormation objects filtered by the years column
 * @method array findByName(string $name) Return PortfolioFormation objects filtered by the name column
 * @method array findByCity(string $city) Return PortfolioFormation objects filtered by the city column
 * @method array findByZipcode(int $zipCode) Return PortfolioFormation objects filtered by the zipCode column
 *
 * @package    propel.generator.portfolio.om
 */
abstract class BasePortfolioFormationQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePortfolioFormationQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'portfolio', $modelName = 'PortfolioFormation', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PortfolioFormationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PortfolioFormationQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PortfolioFormationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PortfolioFormationQuery) {
            return $criteria;
        }
        $query = new PortfolioFormationQuery();
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
     * @return   PortfolioFormation|PortfolioFormation[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PortfolioFormationPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PortfolioFormationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 PortfolioFormation A model object, or null if the key is not found
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
     * @return                 PortfolioFormation A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `years`, `name`, `city`, `zipCode` FROM `portfolio_formation` WHERE `id` = :p0';
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
            $obj = new PortfolioFormation();
            $obj->hydrate($row);
            PortfolioFormationPeer::addInstanceToPool($obj, (string) $key);
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
     * @return PortfolioFormation|PortfolioFormation[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|PortfolioFormation[]|mixed the list of results, formatted by the current formatter
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
     * @return PortfolioFormationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PortfolioFormationPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PortfolioFormationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PortfolioFormationPeer::ID, $keys, Criteria::IN);
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
     * @return PortfolioFormationQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(PortfolioFormationPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(PortfolioFormationPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PortfolioFormationPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the years column
     *
     * Example usage:
     * <code>
     * $query->filterByYears(1234); // WHERE years = 1234
     * $query->filterByYears(array(12, 34)); // WHERE years IN (12, 34)
     * $query->filterByYears(array('min' => 12)); // WHERE years >= 12
     * $query->filterByYears(array('max' => 12)); // WHERE years <= 12
     * </code>
     *
     * @param     mixed $years The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PortfolioFormationQuery The current query, for fluid interface
     */
    public function filterByYears($years = null, $comparison = null)
    {
        if (is_array($years)) {
            $useMinMax = false;
            if (isset($years['min'])) {
                $this->addUsingAlias(PortfolioFormationPeer::YEARS, $years['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($years['max'])) {
                $this->addUsingAlias(PortfolioFormationPeer::YEARS, $years['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PortfolioFormationPeer::YEARS, $years, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PortfolioFormationQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PortfolioFormationPeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the city column
     *
     * Example usage:
     * <code>
     * $query->filterByCity('fooValue');   // WHERE city = 'fooValue'
     * $query->filterByCity('%fooValue%'); // WHERE city LIKE '%fooValue%'
     * </code>
     *
     * @param     string $city The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PortfolioFormationQuery The current query, for fluid interface
     */
    public function filterByCity($city = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($city)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $city)) {
                $city = str_replace('*', '%', $city);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PortfolioFormationPeer::CITY, $city, $comparison);
    }

    /**
     * Filter the query on the zipCode column
     *
     * Example usage:
     * <code>
     * $query->filterByZipcode(1234); // WHERE zipCode = 1234
     * $query->filterByZipcode(array(12, 34)); // WHERE zipCode IN (12, 34)
     * $query->filterByZipcode(array('min' => 12)); // WHERE zipCode >= 12
     * $query->filterByZipcode(array('max' => 12)); // WHERE zipCode <= 12
     * </code>
     *
     * @param     mixed $zipcode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PortfolioFormationQuery The current query, for fluid interface
     */
    public function filterByZipcode($zipcode = null, $comparison = null)
    {
        if (is_array($zipcode)) {
            $useMinMax = false;
            if (isset($zipcode['min'])) {
                $this->addUsingAlias(PortfolioFormationPeer::ZIPCODE, $zipcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($zipcode['max'])) {
                $this->addUsingAlias(PortfolioFormationPeer::ZIPCODE, $zipcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PortfolioFormationPeer::ZIPCODE, $zipcode, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   PortfolioFormation $portfolioFormation Object to remove from the list of results
     *
     * @return PortfolioFormationQuery The current query, for fluid interface
     */
    public function prune($portfolioFormation = null)
    {
        if ($portfolioFormation) {
            $this->addUsingAlias(PortfolioFormationPeer::ID, $portfolioFormation->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
