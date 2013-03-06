<?php


/**
 * Base class that represents a row from the 'portfolio_article' table.
 *
 *
 *
 * @package    propel.generator.portfolio.om
 */
abstract class BasePortfolioArticle extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PortfolioArticlePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PortfolioArticlePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinit loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * The value for the nom field.
     * @var        string
     */
    protected $nom;

    /**
     * The value for the type field.
     * @var        string
     */
    protected $type;

    /**
     * The value for the language field.
     * @var        string
     */
    protected $language;

    /**
     * The value for the materiel field.
     * @var        string
     */
    protected $materiel;

    /**
     * The value for the description field.
     * @var        string
     */
    protected $description;

    /**
     * The value for the documentation field.
     * @var        string
     */
    protected $documentation;

    /**
     * The value for the access field.
     * @var        string
     */
    protected $access;

    /**
     * The value for the categorie field.
     * @var        int
     */
    protected $categorie;

    /**
     * The value for the img field.
     * @var        string
     */
    protected $img;

    /**
     * @var        PortfolioCategorie
     */
    protected $aarticle_categorie;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * Get the [id] column value.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the [nom] column value.
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Get the [type] column value.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get the [language] column value.
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Get the [materiel] column value.
     *
     * @return string
     */
    public function getMateriel()
    {
        return $this->materiel;
    }

    /**
     * Get the [description] column value.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get the [documentation] column value.
     *
     * @return string
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Get the [access] column value.
     *
     * @return string
     */
    public function getAccess()
    {
        return $this->access;
    }

    /**
     * Get the [categorie] column value.
     *
     * @return int
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Get the [img] column value.
     *
     * @return string
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set the value of [id] column.
     *
     * @param int $v new value
     * @return PortfolioArticle The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = PortfolioArticlePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [nom] column.
     *
     * @param string $v new value
     * @return PortfolioArticle The current object (for fluent API support)
     */
    public function setNom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom !== $v) {
            $this->nom = $v;
            $this->modifiedColumns[] = PortfolioArticlePeer::NOM;
        }


        return $this;
    } // setNom()

    /**
     * Set the value of [type] column.
     *
     * @param string $v new value
     * @return PortfolioArticle The current object (for fluent API support)
     */
    public function setType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type !== $v) {
            $this->type = $v;
            $this->modifiedColumns[] = PortfolioArticlePeer::TYPE;
        }


        return $this;
    } // setType()

    /**
     * Set the value of [language] column.
     *
     * @param string $v new value
     * @return PortfolioArticle The current object (for fluent API support)
     */
    public function setLanguage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->language !== $v) {
            $this->language = $v;
            $this->modifiedColumns[] = PortfolioArticlePeer::LANGUAGE;
        }


        return $this;
    } // setLanguage()

    /**
     * Set the value of [materiel] column.
     *
     * @param string $v new value
     * @return PortfolioArticle The current object (for fluent API support)
     */
    public function setMateriel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->materiel !== $v) {
            $this->materiel = $v;
            $this->modifiedColumns[] = PortfolioArticlePeer::MATERIEL;
        }


        return $this;
    } // setMateriel()

    /**
     * Set the value of [description] column.
     *
     * @param string $v new value
     * @return PortfolioArticle The current object (for fluent API support)
     */
    public function setDescription($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description !== $v) {
            $this->description = $v;
            $this->modifiedColumns[] = PortfolioArticlePeer::DESCRIPTION;
        }


        return $this;
    } // setDescription()

    /**
     * Set the value of [documentation] column.
     *
     * @param string $v new value
     * @return PortfolioArticle The current object (for fluent API support)
     */
    public function setDocumentation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->documentation !== $v) {
            $this->documentation = $v;
            $this->modifiedColumns[] = PortfolioArticlePeer::DOCUMENTATION;
        }


        return $this;
    } // setDocumentation()

    /**
     * Set the value of [access] column.
     *
     * @param string $v new value
     * @return PortfolioArticle The current object (for fluent API support)
     */
    public function setAccess($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->access !== $v) {
            $this->access = $v;
            $this->modifiedColumns[] = PortfolioArticlePeer::ACCESS;
        }


        return $this;
    } // setAccess()

    /**
     * Set the value of [categorie] column.
     *
     * @param int $v new value
     * @return PortfolioArticle The current object (for fluent API support)
     */
    public function setCategorie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->categorie !== $v) {
            $this->categorie = $v;
            $this->modifiedColumns[] = PortfolioArticlePeer::CATEGORIE;
        }

        if ($this->aarticle_categorie !== null && $this->aarticle_categorie->getId() !== $v) {
            $this->aarticle_categorie = null;
        }


        return $this;
    } // setCategorie()

    /**
     * Set the value of [img] column.
     *
     * @param string $v new value
     * @return PortfolioArticle The current object (for fluent API support)
     */
    public function setImg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->img !== $v) {
            $this->img = $v;
            $this->modifiedColumns[] = PortfolioArticlePeer::IMG;
        }


        return $this;
    } // setImg()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which restultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->nom = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->type = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->language = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->materiel = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->description = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->documentation = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->access = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->categorie = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->img = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);
            return $startcol + 10; // 10 = PortfolioArticlePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating PortfolioArticle object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

        if ($this->aarticle_categorie !== null && $this->categorie !== $this->aarticle_categorie->getId()) {
            $this->aarticle_categorie = null;
        }
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(PortfolioArticlePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PortfolioArticlePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aarticle_categorie = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(PortfolioArticlePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PortfolioArticleQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(PortfolioArticlePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                PortfolioArticlePeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            // We call the save method on the following object(s) if they
            // were passed to this object by their coresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aarticle_categorie !== null) {
                if ($this->aarticle_categorie->isModified() || $this->aarticle_categorie->isNew()) {
                    $affectedRows += $this->aarticle_categorie->save($con);
                }
                $this->setarticle_categorie($this->aarticle_categorie);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = PortfolioArticlePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PortfolioArticlePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PortfolioArticlePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(PortfolioArticlePeer::NOM)) {
            $modifiedColumns[':p' . $index++]  = '`nom`';
        }
        if ($this->isColumnModified(PortfolioArticlePeer::TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`type`';
        }
        if ($this->isColumnModified(PortfolioArticlePeer::LANGUAGE)) {
            $modifiedColumns[':p' . $index++]  = '`language`';
        }
        if ($this->isColumnModified(PortfolioArticlePeer::MATERIEL)) {
            $modifiedColumns[':p' . $index++]  = '`materiel`';
        }
        if ($this->isColumnModified(PortfolioArticlePeer::DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`description`';
        }
        if ($this->isColumnModified(PortfolioArticlePeer::DOCUMENTATION)) {
            $modifiedColumns[':p' . $index++]  = '`documentation`';
        }
        if ($this->isColumnModified(PortfolioArticlePeer::ACCESS)) {
            $modifiedColumns[':p' . $index++]  = '`access`';
        }
        if ($this->isColumnModified(PortfolioArticlePeer::CATEGORIE)) {
            $modifiedColumns[':p' . $index++]  = '`categorie`';
        }
        if ($this->isColumnModified(PortfolioArticlePeer::IMG)) {
            $modifiedColumns[':p' . $index++]  = '`img`';
        }

        $sql = sprintf(
            'INSERT INTO `portfolio_article` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id`':
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`nom`':
                        $stmt->bindValue($identifier, $this->nom, PDO::PARAM_STR);
                        break;
                    case '`type`':
                        $stmt->bindValue($identifier, $this->type, PDO::PARAM_STR);
                        break;
                    case '`language`':
                        $stmt->bindValue($identifier, $this->language, PDO::PARAM_STR);
                        break;
                    case '`materiel`':
                        $stmt->bindValue($identifier, $this->materiel, PDO::PARAM_STR);
                        break;
                    case '`description`':
                        $stmt->bindValue($identifier, $this->description, PDO::PARAM_STR);
                        break;
                    case '`documentation`':
                        $stmt->bindValue($identifier, $this->documentation, PDO::PARAM_STR);
                        break;
                    case '`access`':
                        $stmt->bindValue($identifier, $this->access, PDO::PARAM_STR);
                        break;
                    case '`categorie`':
                        $stmt->bindValue($identifier, $this->categorie, PDO::PARAM_INT);
                        break;
                    case '`img`':
                        $stmt->bindValue($identifier, $this->img, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setId($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggreagated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            // We call the validate method on the following object(s) if they
            // were passed to this object by their coresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aarticle_categorie !== null) {
                if (!$this->aarticle_categorie->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aarticle_categorie->getValidationFailures());
                }
            }


            if (($retval = PortfolioArticlePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }



            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_FIELDNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_FIELDNAME)
    {
        $pos = PortfolioArticlePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getId();
                break;
            case 1:
                return $this->getNom();
                break;
            case 2:
                return $this->getType();
                break;
            case 3:
                return $this->getLanguage();
                break;
            case 4:
                return $this->getMateriel();
                break;
            case 5:
                return $this->getDescription();
                break;
            case 6:
                return $this->getDocumentation();
                break;
            case 7:
                return $this->getAccess();
                break;
            case 8:
                return $this->getCategorie();
                break;
            case 9:
                return $this->getImg();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_FIELDNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_FIELDNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['PortfolioArticle'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['PortfolioArticle'][$this->getPrimaryKey()] = true;
        $keys = PortfolioArticlePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getNom(),
            $keys[2] => $this->getType(),
            $keys[3] => $this->getLanguage(),
            $keys[4] => $this->getMateriel(),
            $keys[5] => $this->getDescription(),
            $keys[6] => $this->getDocumentation(),
            $keys[7] => $this->getAccess(),
            $keys[8] => $this->getCategorie(),
            $keys[9] => $this->getImg(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aarticle_categorie) {
                $result['article_categorie'] = $this->aarticle_categorie->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_FIELDNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_FIELDNAME)
    {
        $pos = PortfolioArticlePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setNom($value);
                break;
            case 2:
                $this->setType($value);
                break;
            case 3:
                $this->setLanguage($value);
                break;
            case 4:
                $this->setMateriel($value);
                break;
            case 5:
                $this->setDescription($value);
                break;
            case 6:
                $this->setDocumentation($value);
                break;
            case 7:
                $this->setAccess($value);
                break;
            case 8:
                $this->setCategorie($value);
                break;
            case 9:
                $this->setImg($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_FIELDNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_FIELDNAME)
    {
        $keys = PortfolioArticlePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setNom($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setType($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setLanguage($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setMateriel($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDescription($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDocumentation($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setAccess($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setCategorie($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setImg($arr[$keys[9]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PortfolioArticlePeer::DATABASE_NAME);

        if ($this->isColumnModified(PortfolioArticlePeer::ID)) $criteria->add(PortfolioArticlePeer::ID, $this->id);
        if ($this->isColumnModified(PortfolioArticlePeer::NOM)) $criteria->add(PortfolioArticlePeer::NOM, $this->nom);
        if ($this->isColumnModified(PortfolioArticlePeer::TYPE)) $criteria->add(PortfolioArticlePeer::TYPE, $this->type);
        if ($this->isColumnModified(PortfolioArticlePeer::LANGUAGE)) $criteria->add(PortfolioArticlePeer::LANGUAGE, $this->language);
        if ($this->isColumnModified(PortfolioArticlePeer::MATERIEL)) $criteria->add(PortfolioArticlePeer::MATERIEL, $this->materiel);
        if ($this->isColumnModified(PortfolioArticlePeer::DESCRIPTION)) $criteria->add(PortfolioArticlePeer::DESCRIPTION, $this->description);
        if ($this->isColumnModified(PortfolioArticlePeer::DOCUMENTATION)) $criteria->add(PortfolioArticlePeer::DOCUMENTATION, $this->documentation);
        if ($this->isColumnModified(PortfolioArticlePeer::ACCESS)) $criteria->add(PortfolioArticlePeer::ACCESS, $this->access);
        if ($this->isColumnModified(PortfolioArticlePeer::CATEGORIE)) $criteria->add(PortfolioArticlePeer::CATEGORIE, $this->categorie);
        if ($this->isColumnModified(PortfolioArticlePeer::IMG)) $criteria->add(PortfolioArticlePeer::IMG, $this->img);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(PortfolioArticlePeer::DATABASE_NAME);
        $criteria->add(PortfolioArticlePeer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of PortfolioArticle (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setNom($this->getNom());
        $copyObj->setType($this->getType());
        $copyObj->setLanguage($this->getLanguage());
        $copyObj->setMateriel($this->getMateriel());
        $copyObj->setDescription($this->getDescription());
        $copyObj->setDocumentation($this->getDocumentation());
        $copyObj->setAccess($this->getAccess());
        $copyObj->setCategorie($this->getCategorie());
        $copyObj->setImg($this->getImg());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return PortfolioArticle Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return PortfolioArticlePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PortfolioArticlePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a PortfolioCategorie object.
     *
     * @param             PortfolioCategorie $v
     * @return PortfolioArticle The current object (for fluent API support)
     * @throws PropelException
     */
    public function setarticle_categorie(PortfolioCategorie $v = null)
    {
        if ($v === null) {
            $this->setCategorie(NULL);
        } else {
            $this->setCategorie($v->getId());
        }

        $this->aarticle_categorie = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the PortfolioCategorie object, it will not be re-added.
        if ($v !== null) {
            $v->addPortfolioArticle($this);
        }


        return $this;
    }


    /**
     * Get the associated PortfolioCategorie object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return PortfolioCategorie The associated PortfolioCategorie object.
     * @throws PropelException
     */
    public function getarticle_categorie(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aarticle_categorie === null && ($this->categorie !== null) && $doQuery) {
            $this->aarticle_categorie = PortfolioCategorieQuery::create()->findPk($this->categorie, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aarticle_categorie->addPortfolioArticles($this);
             */
        }

        return $this->aarticle_categorie;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->nom = null;
        $this->type = null;
        $this->language = null;
        $this->materiel = null;
        $this->description = null;
        $this->documentation = null;
        $this->access = null;
        $this->categorie = null;
        $this->img = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volumne/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;
            if ($this->aarticle_categorie instanceof Persistent) {
              $this->aarticle_categorie->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aarticle_categorie = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(PortfolioArticlePeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
