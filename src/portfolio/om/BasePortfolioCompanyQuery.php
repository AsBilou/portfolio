<?php


/**
 * Base class that represents a query for the 'portfolio_company' table.
 *
 *
 *
 * @method PortfolioCompanyQuery orderById($order = Criteria::ASC) Order by the id column
 * @method PortfolioCompanyQuery orderByStart($order = Criteria::ASC) Order by the start column
 * @method PortfolioCompanyQuery orderByEnd($order = Criteria::ASC) Order by the end column
 * @method PortfolioCompanyQuery orderByCompany($order = Criteria::ASC) Order by the company column
 * @method PortfolioCompanyQuery orderByJob($order = Criteria::ASC) Order by the job column
 * @method PortfolioCompanyQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method PortfolioCompanyQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method PortfolioCompanyQuery orderByCity($order = Criteria::ASC) Order by the city column
 * @method PortfolioCompanyQuery orderByZipcode($order = Criteria::ASC) Order by the zipCode column
 *
 * @method PortfolioCompanyQuery groupById() Group by the id column
 * @method PortfolioCompanyQuery groupByStart() Group by the start column
 * @method PortfolioCompanyQuery groupByEnd() Group by the end column
 * @method PortfolioCompanyQuery groupByCompany() Group by the company column
 * @method PortfolioCompanyQuery groupByJob() Group by the job column
 * @method PortfolioCompanyQuery groupByDescription() Group by the description column
 * @method PortfolioCompanyQuery groupByType() Group by the type column
 * @method PortfolioCompanyQuery groupByCity() Group by the city column
 * @method PortfolioCompanyQuery groupByZipcode() Group by the zipCode column
 *
 * @method PortfolioCompanyQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PortfolioCompanyQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PortfolioCompanyQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PortfolioCompany findOne(PropelPDO $con = null) Return the first PortfolioCompany matching the query
 * @method PortfolioCompany findOneOrCreate(PropelPDO $con = null) Return the first PortfolioCompany matching the query, or a new PortfolioCompany object populated from the query conditions when no match is found
 *
 * @method PortfolioCompany findOneByStart(int $start) Return the first PortfolioCompany filtered by the start column
 * @method PortfolioCompany findOneByEnd(int $end) Return the first PortfolioCompany filtered by the end column
 * @method PortfolioCompany findOneByCompany(string $company) Return the first PortfolioCompany filtered by the company column
 * @method PortfolioCompany findOneByJob(string $job) Return the first PortfolioCompany filtered by the job column
 * @method PortfolioCompany findOneByDescription(string $description) Return the first PortfolioCompany filtered by the description column
 * @method PortfolioCompany findOneByType(string $type) Return the first PortfolioCompany filtered by the type column
 * @method PortfolioCompany findOneByCity(string $city) Return the first PortfolioCompany filtered by the city column
 * @method PortfolioCompany findOneByZipcode(int $zipCode) Return the first PortfolioCompany filtered by the zipCode column
 *
 * @method array findById(int $id) Return PortfolioCompany objects filtered by the id column
 * @method array findByStart(int $start) Return PortfolioCompany objects filtered by the start column
 * @method array findByEnd(int $end) Return PortfolioCompany objects filtered by the end column
 * @method array findByCompany(string $company) Return PortfolioCompany objects filtered by the company column
 * @method array findByJob(string $job) Return PortfolioCompany objects filtered by the job column
 * @method array findByDescription(string $description) Return PortfolioCompany objects filtered by the description column
 * @method array findByType(string $type) Return PortfolioCompany objects filtered by the type column
 * @method array findByCity(string $city) Return PortfolioCompany objects filtered by the city column
 * @method array findByZipcode(int $zipCode) Return PortfolioCompany objects filtered by the zipCode column
 *
 * @package    propel.generator.portfolio.om
 */
abstract class BasePortfolioCompanyQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePortfolioCompanyQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'portfolio', $modelName = 'PortfolioCompany', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PortfolioCompanyQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PortfolioCompanyQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PortfolioCompanyQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PortfolioCompanyQuery) {
            return $criteria;
        }
        $query = new PortfolioCompanyQuery();
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
     * @return   PortfolioCompany|PortfolioCompany[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PortfolioCompanyPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PortfolioCompanyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 PortfolioCompany A model object, or null if the key is not found
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
     * @return                 PortfolioCompany A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `start`, `end`, `company`, `job`, `description`, `type`, `city`, `zipCode` FROM `portfolio_company` WHERE `id` = :p0';
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
            $obj = new PortfolioCompany();
            $obj->hydrate($row);
            PortfolioCompanyPeer::addInstanceToPool($obj, (string) $key);
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
     * @return PortfolioCompany|PortfolioCompany[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|PortfolioCompany[]|mixed the list of results, formatted by the current formatter
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
     * @return PortfolioCompanyQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PortfolioCompanyPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PortfolioCompanyQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PortfolioCompanyPeer::ID, $keys, Criteria::IN);
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
     * @return PortfolioCompanyQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(PortfolioCompanyPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(PortfolioCompanyPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PortfolioCompanyPeer::ID, $id, $comparison);
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
     * @return PortfolioCompanyQuery The current query, for fluid interface
     */
    public function filterByStart($start = null, $comparison = null)
    {
        if (is_array($start)) {
            $useMinMax = false;
            if (isset($start['min'])) {
                $this->addUsingAlias(PortfolioCompanyPeer::START, $start['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($start['max'])) {
                $this->addUsingAlias(PortfolioCompanyPeer::START, $start['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PortfolioCompanyPeer::START, $start, $comparison);
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
     * @return PortfolioCompanyQuery The current query, for fluid interface
     */
    public function filterByEnd($end = null, $comparison = null)
    {
        if (is_array($end)) {
            $useMinMax = false;
            if (isset($end['min'])) {
                $this->addUsingAlias(PortfolioCompanyPeer::END, $end['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($end['max'])) {
                $this->addUsingAlias(PortfolioCompanyPeer::END, $end['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PortfolioCompanyPeer::END, $end, $comparison);
    }

    /**
     * Filter the query on the company column
     *
     * Example usage:
     * <code>
     * $query->filterByCompany('fooValue');   // WHERE company = 'fooValue'
     * $query->filterByCompany('%fooValue%'); // WHERE company LIKE '%fooValue%'
     * </code>
     *
     * @param     string $company The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PortfolioCompanyQuery The current query, for fluid interface
     */
    public function filterByCompany($company = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($company)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $company)) {
                $company = str_replace('*', '%', $company);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PortfolioCompanyPeer::COMPANY, $company, $comparison);
    }

    /**
     * Filter the query on the job column
     *
     * Example usage:
     * <code>
     * $query->filterByJob('fooValue');   // WHERE job = 'fooValue'
     * $query->filterByJob('%fooValue%'); // WHERE job LIKE '%fooValue%'
     * </code>
     *
     * @param     string $job The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PortfolioCompanyQuery The current query, for fluid interface
     */
    public function filterByJob($job = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($job)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $job)) {
                $job = str_replace('*', '%', $job);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PortfolioCompanyPeer::JOB, $job, $comparison);
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
     * @return PortfolioCompanyQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PortfolioCompanyPeer::DESCRIPTION, $description, $comparison);
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
     * @return PortfolioCompanyQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PortfolioCompanyPeer::TYPE, $type, $comparison);
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
     * @return PortfolioCompanyQuery The current query, for fluid interface
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

        return $this->addUsingAlias(PortfolioCompanyPeer::CITY, $city, $comparison);
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
     * @return PortfolioCompanyQuery The current query, for fluid interface
     */
    public function filterByZipcode($zipcode = null, $comparison = null)
    {
        if (is_array($zipcode)) {
            $useMinMax = false;
            if (isset($zipcode['min'])) {
                $this->addUsingAlias(PortfolioCompanyPeer::ZIPCODE, $zipcode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($zipcode['max'])) {
                $this->addUsingAlias(PortfolioCompanyPeer::ZIPCODE, $zipcode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PortfolioCompanyPeer::ZIPCODE, $zipcode, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   PortfolioCompany $portfolioCompany Object to remove from the list of results
     *
     * @return PortfolioCompanyQuery The current query, for fluid interface
     */
    public function prune($portfolioCompany = null)
    {
        if ($portfolioCompany) {
            $this->addUsingAlias(PortfolioCompanyPeer::ID, $portfolioCompany->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
