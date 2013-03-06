<?php


/**
 * Base class that represents a query for the 'portfolio_etude' table.
 *
 *
 *
 * @method PortfolioEtudeQuery orderById($order = Criteria::ASC) Order by the id column
 * @method PortfolioEtudeQuery orderByStart($order = Criteria::ASC) Order by the start column
 * @method PortfolioEtudeQuery orderByEnd($order = Criteria::ASC) Order by the end column
 * @method PortfolioEtudeQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method PortfolioEtudeQuery orderByUniversity($order = Criteria::ASC) Order by the university column
 * @method PortfolioEtudeQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method PortfolioEtudeQuery orderByZipcode($order = Criteria::ASC) Order by the zipCode column
 *
 * @method PortfolioEtudeQuery groupById() Group by the id column
 * @method PortfolioEtudeQuery groupByStart() Group by the start column
 * @method PortfolioEtudeQuery groupByEnd() Group by the end column
 * @method PortfolioEtudeQuery groupByName() Group by the name column
 * @method PortfolioEtudeQuery groupByUniversity() Group by the university column
 * @method PortfolioEtudeQuery groupByCity() Group by the city column
 * @method PortfolioEtudeQuery groupByZipcode() Group by the zipCode column
 *
 * @method PortfolioEtudeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PortfolioEtudeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PortfolioEtudeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PortfolioEtude findOne(PropelPDO $con = null) Return the first PortfolioEtude matching the query
 * @method PortfolioEtude findOneOrCreate(PropelPDO $con = null) Return the first PortfolioEtude matching the query, or a new PortfolioEtude object populated from the query conditions when no match is found
 *
 * @method PortfolioEtude findOneByStart(int $start) Return the first PortfolioEtude filtered by the start column
 * @method PortfolioEtude findOneByEnd(int $end) Return the first PortfolioEtude filtered by the end column
 * @method PortfolioEtude findOneByName(string $name) Return the first PortfolioEtude filtered by the name column
 * @method PortfolioEtude findOneByUniversity(string $university) Return the first PortfolioEtude filtered by the university column
 * @method PortfolioEtude findOneByCity(string $city) Return the first PortfolioEtude filtered by the city column
 * @method PortfolioEtude findOneByZipcode(int $zipCode) Return the first PortfolioEtude filtered by the zipCode column
 *
 * @method array findById(int $id) Return PortfolioEtude objects filtered by the id column
 * @method array findByStart(int $start) Return PortfolioEtude objects filtered by the start column
 * @method array findByEnd(int $end) Return PortfolioEtude objects filtered by the end column
 * @method array findByName(string $name) Return PortfolioEtude objects filtered by the name column
 * @method array findByUniversity(string $university) Return PortfolioEtude objects filtered by the university column
 * @method array findByCity(string $city) Return PortfolioEtude objects filtered by the city column
 * @method array findByZipcode(int $zipCode) Return PortfolioEtude objects filtered by the zipCode column
 *
 * @package    propel.generator.portfolio.om
 */
abstract class BasePortfolioEtudeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePortfolioEtudeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'portfolio', $modelName = 'PortfolioEtude', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PortfolioEtudeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PortfolioEtudeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PortfolioEtudeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PortfolioEtudeQuery) {
            return $criteria;
        }
        $query = new PortfolioEtudeQuery();
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
     * @return   PortfolioEtude|PortfolioEtude[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PortfolioEtudePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PortfolioEtudePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 PortfolioEtude A model object, or null if the key is not found
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
     * @return                 PortfolioEtude A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `start`, `end`, `name`, `university`, `city`, `zipCode` FROM `portfolio_etude` WHERE `id` = :p0';
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
            $obj = new PortfolioEtude();
            $obj->hydrate($row);
            PortfolioEtudePeer::addInstanceToPool($obj, (string) $key);
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
     * @return PortfolioEtude|PortfolioEtude[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|PortfolioEtude[]|mixed the list of results, formatted by the current formatter
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
     * @return PortfolioEtudeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PortfolioEtudePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PortfolioEtudeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PortfolioEtudePeer::ID, $keys, Criteria::IN);
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
     * @return PortfolioEtudeQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(PortfolioEtudePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(PortfolioEtudePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PortfolioEtudePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the start column
     *
     * Example usage:
     * <code>
     * $query->filterByStart(1234); // WHERE start = 1234
     * $query->filterByStart(array(12, 34)); // WHERE start IN (12, 34)
     * $query->filterByStart(array('min' => 12)); // WHERE start >= 12
     * $query->filterByStart(array('max' => 12)); // WHERE start <= 12
     * </code>
     *
     * @param     mixed $start The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PortfolioEtudeQuery The current query, for fluid interface
     */
    public function filterByStart($start = null, $comparison = null)
    {
        if (is_array($start)) {
            $useMinMax = false;
            if (isset($start['min'])) {
                $this->addUsingAlias(PortfolioEtudePeer::START, $start['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($start['max'])) {
                $this->addUsingAlias(PortfolioEtudePeer::START, $start['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PortfolioEtudePeer::START, $start, $comparison);
    }

    /**
     * Filter the query on the end column
     *
     * Example usage:
     * <code>
     * $query->filterByEnd(1234); // WHERE end = 1234
     * $query->filterByEnd(array(12, 34)); // WHERE end IN (12, 34)
     * $query->filterByEnd(array('min' => 12)); // WHERE end >= 12
     * $query->filterByEnd(array('max' => 12)); // WHERE end <= 12
     * </code>
     *
     * @param     mixed $end The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PortfolioEtudeQuery The current query, for fluid interface
     */
    public function filterByEnd($end = null, $comparison = null)
    {
        if (is_array($end)) {
            $useMinMax = false;
            if (isset($end['min'])) {
                $this->addUsingAlias(PortfolioEtudePeer::END, $end['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($end['max'])) {
                $this->addUsingAlias(PortfolioEtudePeer::END, $end['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PortfolioEtudePeer::END, $end, $comparison);
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
     * @return PortfolioEtudeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PortfolioEtudePeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the university column
     *
     * Example usage:
     * <code>
     * $query->filterByUniversity('fooValue');   // WHERE university = 'fooValue'
     * $query->filterByUniversity('%fooValue%'); // WHERE university LIKE '%fooValue%'
     * </code>
     *
     * @param     string $university The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PortfolioEtudeQuery The current query, for fluid interface
     */
    public function filterByUniversity($university = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($university)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $university)) {
                $university = str_replace('*', '%', $university);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PortfolioEtudePeer::UNIVERSITY, $university, $comparison);
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
     * @return PortfolioEtudeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PortfolioEtudePeer::CITY, $city, $comparison);
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
     * @return PortfolioEtudeQuery The current query, for fluid interface
     */
    public function filterByZipcode($zipcode = null, $comparison = null)
    {
        if (is_array($zipcode)) {
            $useMinMax = false;
            if (isset($zipcode['min'])) {
                $this->addUsingAlias(PortfolioEtudePeer::ZIPCODE, $zipcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($zipcode['max'])) {
                $this->addUsingAlias(PortfolioEtudePeer::ZIPCODE, $zipcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PortfolioEtudePeer::ZIPCODE, $zipcode, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   PortfolioEtude $portfolioEtude Object to remove from the list of results
     *
     * @return PortfolioEtudeQuery The current query, for fluid interface
     */
    public function prune($portfolioEtude = null)
    {
        if ($portfolioEtude) {
            $this->addUsingAlias(PortfolioEtudePeer::ID, $portfolioEtude->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
