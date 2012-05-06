<?php


/**
 * Base class that represents a row from the 'meta_tag' table.
 *
 * 
 *
 * @package    propel.generator.plugins.iceSEOPlugin.lib.model.om
 */
abstract class BaseiceModelMetaTag extends BaseObject  implements Persistent
{

  /**
   * Peer class name
   */
  const PEER = 'iceModelMetaTagPeer';

  /**
   * The Peer class.
   * Instance provides a convenient way of calling static methods on a class
   * that calling code may not be able to identify.
   * @var        iceModelMetaTagPeer
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
   * The value for the url field.
   * @var        string
   */
  protected $url;

  /**
   * The value for the parameters field.
   * @var        string
   */
  protected $parameters;

  /**
   * The value for the updated_at field.
   * @var        string
   */
  protected $updated_at;

  /**
   * The value for the created_at field.
   * @var        string
   */
  protected $created_at;

  /**
   * @var        array iceModelMetaTagI18n[] Collection to store aggregation of iceModelMetaTagI18n objects.
   */
  protected $colliceModelMetaTagI18ns;

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

  // symfony_i18n behavior
  
  /**
   * @var string The value for the culture field
   */
  protected $culture = null;
  
  /**
   * @var array Current I18N objects
   */
  protected $current_i18n = array();

  /**
   * An array of objects scheduled for deletion.
   * @var    array
   */
  protected $iceModelMetaTagI18nsScheduledForDeletion = null;

  /**
   * Get the [id] column value.
   * 
   * @return     int
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * Get the [url] column value.
   * 
   * @return     string
   */
  public function getUrl()
  {
    return $this->url;
  }

  /**
   * Get the [parameters] column value.
   * 
   * @return     string
   */
  public function getParameters()
  {
    return $this->parameters;
  }

  /**
   * Get the [optionally formatted] temporal [updated_at] column value.
   * 
   *
   * @param      string $format The date/time format string (either date()-style or strftime()-style).
   *              If format is NULL, then the raw DateTime object will be returned.
   * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
   * @throws     PropelException - if unable to parse/validate the date/time value.
   */
  public function getUpdatedAt($format = 'Y-m-d H:i:s')
  {
    if ($this->updated_at === null)
    {
      return null;
    }


    if ($this->updated_at === '0000-00-00 00:00:00')
    {
      // while technically this is not a default value of NULL,
      // this seems to be closest in meaning.
      return null;
    }
    else
    {
      try
      {
        $dt = new DateTime($this->updated_at);
      }
      catch (Exception $x)
      {
        throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->updated_at, true), $x);
      }
    }

    if ($format === null)
    {
      // Because propel.useDateTimeClass is TRUE, we return a DateTime object.
      return $dt;
    }
    elseif (strpos($format, '%') !== false)
    {
      return strftime($format, $dt->format('U'));
    }
    else
    {
      return $dt->format($format);
    }
  }

  /**
   * Get the [optionally formatted] temporal [created_at] column value.
   * 
   *
   * @param      string $format The date/time format string (either date()-style or strftime()-style).
   *              If format is NULL, then the raw DateTime object will be returned.
   * @return     mixed Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00
   * @throws     PropelException - if unable to parse/validate the date/time value.
   */
  public function getCreatedAt($format = 'Y-m-d H:i:s')
  {
    if ($this->created_at === null)
    {
      return null;
    }


    if ($this->created_at === '0000-00-00 00:00:00')
    {
      // while technically this is not a default value of NULL,
      // this seems to be closest in meaning.
      return null;
    }
    else
    {
      try
      {
        $dt = new DateTime($this->created_at);
      }
      catch (Exception $x)
      {
        throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->created_at, true), $x);
      }
    }

    if ($format === null)
    {
      // Because propel.useDateTimeClass is TRUE, we return a DateTime object.
      return $dt;
    }
    elseif (strpos($format, '%') !== false)
    {
      return strftime($format, $dt->format('U'));
    }
    else
    {
      return $dt->format($format);
    }
  }

  /**
   * Set the value of [id] column.
   * 
   * @param      int $v new value
   * @return     iceModelMetaTag The current object (for fluent API support)
   */
  public function setId($v)
  {
    if ($v !== null)
    {
      $v = (int) $v;
    }

    if ($this->id !== $v)
    {
      $this->id = $v;
      $this->modifiedColumns[] = iceModelMetaTagPeer::ID;
    }

    return $this;
  }

  /**
   * Set the value of [url] column.
   * 
   * @param      string $v new value
   * @return     iceModelMetaTag The current object (for fluent API support)
   */
  public function setUrl($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->url !== $v)
    {
      $this->url = $v;
      $this->modifiedColumns[] = iceModelMetaTagPeer::URL;
    }

    return $this;
  }

  /**
   * Set the value of [parameters] column.
   * 
   * @param      string $v new value
   * @return     iceModelMetaTag The current object (for fluent API support)
   */
  public function setParameters($v)
  {
    if ($v !== null)
    {
      $v = (string) $v;
    }

    if ($this->parameters !== $v)
    {
      $this->parameters = $v;
      $this->modifiedColumns[] = iceModelMetaTagPeer::PARAMETERS;
    }

    return $this;
  }

  /**
   * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     iceModelMetaTag The current object (for fluent API support)
   */
  public function setUpdatedAt($v)
  {
    $dt = PropelDateTime::newInstance($v, null, 'DateTime');
    if ($this->updated_at !== null || $dt !== null)
    {
      $currentDateAsString = ($this->updated_at !== null && $tmpDt = new DateTime($this->updated_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
      $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
      if ($currentDateAsString !== $newDateAsString)
      {
        $this->updated_at = $newDateAsString;
        $this->modifiedColumns[] = iceModelMetaTagPeer::UPDATED_AT;
      }
    }

    return $this;
  }

  /**
   * Sets the value of [created_at] column to a normalized version of the date/time value specified.
   * 
   * @param      mixed $v string, integer (timestamp), or DateTime value.
   *               Empty strings are treated as NULL.
   * @return     iceModelMetaTag The current object (for fluent API support)
   */
  public function setCreatedAt($v)
  {
    $dt = PropelDateTime::newInstance($v, null, 'DateTime');
    if ($this->created_at !== null || $dt !== null)
    {
      $currentDateAsString = ($this->created_at !== null && $tmpDt = new DateTime($this->created_at)) ? $tmpDt->format('Y-m-d H:i:s') : null;
      $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
      if ($currentDateAsString !== $newDateAsString)
      {
        $this->created_at = $newDateAsString;
        $this->modifiedColumns[] = iceModelMetaTagPeer::CREATED_AT;
      }
    }

    return $this;
  }

  /**
   * Indicates whether the columns in this object are only set to default values.
   *
   * This method can be used in conjunction with isModified() to indicate whether an object is both
   * modified _and_ has some values set which are non-default.
   *
   * @return     boolean Whether the columns in this object are only been set with default values.
   */
  public function hasOnlyDefaultValues()
  {
    // otherwise, everything was equal, so return TRUE
    return true;
  }

  /**
   * Hydrates (populates) the object variables with values from the database resultset.
   *
   * An offset (0-based "start column") is specified so that objects can be hydrated
   * with a subset of the columns in the resultset rows.  This is needed, for example,
   * for results of JOIN queries where the resultset row includes columns from two or
   * more tables.
   *
   * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
   * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
   * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
   * @return     int next starting column
   * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
   */
  public function hydrate($row, $startcol = 0, $rehydrate = false)
  {
    try
    {

      $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
      $this->url = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
      $this->parameters = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
      $this->updated_at = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
      $this->created_at = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
      $this->resetModified();

      $this->setNew(false);

      if ($rehydrate)
      {
        $this->ensureConsistency();
      }

      return $startcol + 5; // 5 = iceModelMetaTagPeer::NUM_HYDRATE_COLUMNS.

    }
    catch (Exception $e)
    {
      throw new PropelException("Error populating iceModelMetaTag object", $e);
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
   * @throws     PropelException
   */
  public function ensureConsistency()
  {

  }

  /**
   * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
   *
   * This will only work if the object has been saved and has a valid primary key set.
   *
   * @param      boolean $deep (optional) Whether to also de-associated any related objects.
   * @param      PropelPDO $con (optional) The PropelPDO connection to use.
   * @return     void
   * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
   */
  public function reload($deep = false, PropelPDO $con = null)
  {
    if ($this->isDeleted())
    {
      throw new PropelException("Cannot reload a deleted object.");
    }

    if ($this->isNew())
    {
      throw new PropelException("Cannot reload an unsaved object.");
    }

    if ($con === null)
    {
      $con = Propel::getConnection(iceModelMetaTagPeer::DATABASE_NAME, Propel::CONNECTION_READ);
    }

    // We don't need to alter the object instance pool; we're just modifying this instance
    // already in the pool.

    $stmt = iceModelMetaTagPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
    $row = $stmt->fetch(PDO::FETCH_NUM);
    $stmt->closeCursor();
    if (!$row)
    {
      throw new PropelException('Cannot find matching row in the database to reload object values.');
    }
    $this->hydrate($row, 0, true); // rehydrate

    if ($deep) {  // also de-associate any related objects?

      $this->colliceModelMetaTagI18ns = null;

    }
  }

  /**
   * Removes this object from datastore and sets delete attribute.
   *
   * @param      PropelPDO $con
   * @return     void
   * @throws     PropelException
   * @see        BaseObject::setDeleted()
   * @see        BaseObject::isDeleted()
   */
  public function delete(PropelPDO $con = null)
  {
    if ($this->isDeleted())
    {
      throw new PropelException("This object has already been deleted.");
    }

    if ($con === null)
    {
      $con = Propel::getConnection(iceModelMetaTagPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    try
    {
      $deleteQuery = iceModelMetaTagQuery::create()
        ->filterByPrimaryKey($this->getPrimaryKey());
      $ret = $this->preDelete($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseiceModelMetaTag:delete:pre') as $callable)
      {
        if (call_user_func($callable, $this, $con))
        {
          $con->commit();
          return;
        }
      }

      if ($ret)
      {
        $deleteQuery->delete($con);
        $this->postDelete($con);
        // symfony_behaviors behavior
        foreach (sfMixer::getCallables('BaseiceModelMetaTag:delete:post') as $callable)
        {
          call_user_func($callable, $this, $con);
        }

        $con->commit();
        $this->setDeleted(true);
      }
      else
      {
        $con->commit();
      }
    }
    catch (Exception $e)
    {
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
   * @param      PropelPDO $con
   * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
   * @throws     PropelException
   * @see        doSave()
   */
  public function save(PropelPDO $con = null)
  {
    if ($this->isDeleted())
    {
      throw new PropelException("You cannot save an object that has been deleted.");
    }

    if ($con === null)
    {
      $con = Propel::getConnection(iceModelMetaTagPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
    }

    $con->beginTransaction();
    $isInsert = $this->isNew();
    try
    {
      $ret = $this->preSave($con);
      // symfony_behaviors behavior
      foreach (sfMixer::getCallables('BaseiceModelMetaTag:save:pre') as $callable)
      {
        if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
        {
          $con->commit();
          return $affectedRows;
        }
      }

      // symfony_timestampable behavior
      if ($this->isModified() && !$this->isColumnModified(iceModelMetaTagPeer::UPDATED_AT))
      {
        $this->setUpdatedAt(time());
      }
      if ($isInsert)
      {
        $ret = $ret && $this->preInsert($con);
        // symfony_timestampable behavior
        if (!$this->isColumnModified(iceModelMetaTagPeer::CREATED_AT))
        {
          $this->setCreatedAt(time());
        }

      }
      else
      {
        $ret = $ret && $this->preUpdate($con);
      }
      if ($ret)
      {
        $affectedRows = $this->doSave($con);
        if ($isInsert)
        {
          $this->postInsert($con);
        }
        else
        {
          $this->postUpdate($con);
        }
        $this->postSave($con);
        // symfony_behaviors behavior
        foreach (sfMixer::getCallables('BaseiceModelMetaTag:save:post') as $callable)
        {
          call_user_func($callable, $this, $con, $affectedRows);
        }

        iceModelMetaTagPeer::addInstanceToPool($this);
      }
      else
      {
        $affectedRows = 0;
      }
      $con->commit();
      return $affectedRows;
    }
    catch (Exception $e)
    {
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
   * @param      PropelPDO $con
   * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
   * @throws     PropelException
   * @see        save()
   */
  protected function doSave(PropelPDO $con)
  {
    $affectedRows = 0; // initialize var to track total num of affected rows
    if (!$this->alreadyInSave)
    {
      $this->alreadyInSave = true;

      if ($this->isNew() || $this->isModified())
      {
        // persist changes
        if ($this->isNew())
        {
          $this->doInsert($con);
        }
        else
        {
          $this->doUpdate($con);
        }
        $affectedRows += 1;
        $this->resetModified();
      }

      if ($this->iceModelMetaTagI18nsScheduledForDeletion !== null)
      {
        if (!$this->iceModelMetaTagI18nsScheduledForDeletion->isEmpty())
        {
          iceModelMetaTagI18nQuery::create()
            ->filterByPrimaryKeys($this->iceModelMetaTagI18nsScheduledForDeletion->getPrimaryKeys(false))
            ->delete($con);
          $this->iceModelMetaTagI18nsScheduledForDeletion = null;
        }
      }

      if ($this->colliceModelMetaTagI18ns !== null)
      {
        foreach ($this->colliceModelMetaTagI18ns as $referrerFK)
        {
          $referrerFK->seticeModelMetaTag($this);
          if (!$referrerFK->isDeleted())
          {
            $affectedRows += $referrerFK->save($con);
          }
        }
      }

      $this->alreadyInSave = false;

    }
    return $affectedRows;
  }

  /**
   * Insert the row in the database.
   *
   * @param      PropelPDO $con
   *
   * @throws     PropelException
   * @see        doSave()
   */
  protected function doInsert(PropelPDO $con)
  {
    $modifiedColumns = array();
    $index = 0;

    $this->modifiedColumns[] = iceModelMetaTagPeer::ID;
    if (null !== $this->id)
    {
      throw new PropelException('Cannot insert a value for auto-increment primary key (' . iceModelMetaTagPeer::ID . ')');
    }

     // check the columns in natural order for more readable SQL queries
    if ($this->isColumnModified(iceModelMetaTagPeer::ID))
    {
      $modifiedColumns[':p' . $index++]  = '`ID`';
    }
    if ($this->isColumnModified(iceModelMetaTagPeer::URL))
    {
      $modifiedColumns[':p' . $index++]  = '`URL`';
    }
    if ($this->isColumnModified(iceModelMetaTagPeer::PARAMETERS))
    {
      $modifiedColumns[':p' . $index++]  = '`PARAMETERS`';
    }
    if ($this->isColumnModified(iceModelMetaTagPeer::UPDATED_AT))
    {
      $modifiedColumns[':p' . $index++]  = '`UPDATED_AT`';
    }
    if ($this->isColumnModified(iceModelMetaTagPeer::CREATED_AT))
    {
      $modifiedColumns[':p' . $index++]  = '`CREATED_AT`';
    }

    $sql = sprintf(
      'INSERT INTO `meta_tag` (%s) VALUES (%s)',
      implode(', ', $modifiedColumns),
      implode(', ', array_keys($modifiedColumns))
    );

    try
    {
      $stmt = $con->prepare($sql);
      foreach ($modifiedColumns as $identifier => $columnName)
      {
        switch ($columnName)
        {
          case '`ID`':
            $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
            break;
          case '`URL`':
            $stmt->bindValue($identifier, $this->url, PDO::PARAM_STR);
            break;
          case '`PARAMETERS`':
            $stmt->bindValue($identifier, $this->parameters, PDO::PARAM_STR);
            break;
          case '`UPDATED_AT`':
            $stmt->bindValue($identifier, $this->updated_at, PDO::PARAM_STR);
            break;
          case '`CREATED_AT`':
            $stmt->bindValue($identifier, $this->created_at, PDO::PARAM_STR);
            break;
        }
      }
      $stmt->execute();
    }
    catch (Exception $e)
    {
      Propel::log($e->getMessage(), Propel::LOG_ERR);
      throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
    }

    try
    {
      $pk = $con->lastInsertId();
    }
    catch (Exception $e)
    {
      throw new PropelException('Unable to get autoincrement id.', $e);
    }
    $this->setId($pk);

    $this->setNew(false);
  }

  /**
   * Update the row in the database.
   *
   * @param      PropelPDO $con
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
   * @return     array ValidationFailed[]
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
   * @param      mixed $columns Column name or an array of column names.
   * @return     boolean Whether all columns pass validation.
   * @see        doValidate()
   * @see        getValidationFailures()
   */
  public function validate($columns = null)
  {
    $res = $this->doValidate($columns);
    if ($res === true)
    {
      $this->validationFailures = array();
      return true;
    }
    else
    {
      $this->validationFailures = $res;
      return false;
    }
  }

  /**
   * This function performs the validation work for complex object models.
   *
   * In addition to checking the current object, all related objects will
   * also be validated.  If all pass then <code>true</code> is returned; otherwise
   * an aggreagated array of ValidationFailed objects will be returned.
   *
   * @param      array $columns Array of column names to validate.
   * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
   */
  protected function doValidate($columns = null)
  {
    if (!$this->alreadyInValidation)
    {
      $this->alreadyInValidation = true;
      $retval = null;

      $failureMap = array();


      if (($retval = iceModelMetaTagPeer::doValidate($this, $columns)) !== true)
      {
        $failureMap = array_merge($failureMap, $retval);
      }


        if ($this->colliceModelMetaTagI18ns !== null)
        {
          foreach ($this->colliceModelMetaTagI18ns as $referrerFK)
          {
          $referrerFK->seticeModelMetaTag($this);
            if (!$referrerFK->validate($columns))
            {
              $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
            }
          }
        }


      $this->alreadyInValidation = false;
    }

    return (!empty($failureMap) ? $failureMap : true);
  }

  /**
   * Retrieves a field from the object by name passed in as a string.
   *
   * @param      string $name name
   * @param      string $type The type of fieldname the $name is of:
   *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
   *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
   * @return     mixed Value of field.
   */
  public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
  {
    $pos = iceModelMetaTagPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
    $field = $this->getByPosition($pos);
    return $field;
  }

  /**
   * Retrieves a field from the object by Position as specified in the xml schema.
   * Zero-based.
   *
   * @param      int $pos position in xml schema
   * @return     mixed Value of field at $pos
   */
  public function getByPosition($pos)
  {
    switch($pos)
    {
      case 0:
        return $this->getId();
        break;
      case 1:
        return $this->getUrl();
        break;
      case 2:
        return $this->getParameters();
        break;
      case 3:
        return $this->getUpdatedAt();
        break;
      case 4:
        return $this->getCreatedAt();
        break;
      default:
        return null;
        break;
    }
  }

  /**
   * Exports the object as an array.
   *
   * You can specify the key type of the array by passing one of the class
   * type constants.
   *
   * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
   *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
   *                    Defaults to BasePeer::TYPE_PHPNAME.
   * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
   * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
   * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
   *
   * @return    array an associative array containing the field names (as keys) and field values
   */
  public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
  {
    if (isset($alreadyDumpedObjects['iceModelMetaTag'][$this->getPrimaryKey()]))
    {
      return '*RECURSION*';
    }
    $alreadyDumpedObjects['iceModelMetaTag'][$this->getPrimaryKey()] = true;
    $keys = iceModelMetaTagPeer::getFieldNames($keyType);
    $result = array(
      $keys[0] => $this->getId(),
      $keys[1] => $this->getUrl(),
      $keys[2] => $this->getParameters(),
      $keys[3] => $this->getUpdatedAt(),
      $keys[4] => $this->getCreatedAt(),
    );
    if ($includeForeignObjects)
    {
      if (null !== $this->colliceModelMetaTagI18ns)
      {
        $result['iceModelMetaTagI18ns'] = $this->colliceModelMetaTagI18ns->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
      }
    }
    return $result;
  }

  /**
   * Sets a field from the object by name passed in as a string.
   *
   * @param      string $name peer name
   * @param      mixed $value field value
   * @param      string $type The type of fieldname the $name is of:
   *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
   *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
   * @return     void
   */
  public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
  {
    $pos = iceModelMetaTagPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
    return $this->setByPosition($pos, $value);
  }

  /**
   * Sets a field from the object by Position as specified in the xml schema.
   * Zero-based.
   *
   * @param      int $pos position in xml schema
   * @param      mixed $value field value
   * @return     void
   */
  public function setByPosition($pos, $value)
  {
    switch($pos)
    {
      case 0:
        $this->setId($value);
        break;
      case 1:
        $this->setUrl($value);
        break;
      case 2:
        $this->setParameters($value);
        break;
      case 3:
        $this->setUpdatedAt($value);
        break;
      case 4:
        $this->setCreatedAt($value);
        break;
    }
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
   * The default key type is the column's phpname (e.g. 'AuthorId')
   *
   * @param      array  $arr     An array to populate the object from.
   * @param      string $keyType The type of keys the array uses.
   * @return     void
   */
  public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
  {
    $keys = iceModelMetaTagPeer::getFieldNames($keyType);

    if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
    if (array_key_exists($keys[1], $arr)) $this->setUrl($arr[$keys[1]]);
    if (array_key_exists($keys[2], $arr)) $this->setParameters($arr[$keys[2]]);
    if (array_key_exists($keys[3], $arr)) $this->setUpdatedAt($arr[$keys[3]]);
    if (array_key_exists($keys[4], $arr)) $this->setCreatedAt($arr[$keys[4]]);
  }

  /**
   * Build a Criteria object containing the values of all modified columns in this object.
   *
   * @return     Criteria The Criteria object containing all modified values.
   */
  public function buildCriteria()
  {
    $criteria = new Criteria(iceModelMetaTagPeer::DATABASE_NAME);

    if ($this->isColumnModified(iceModelMetaTagPeer::ID)) $criteria->add(iceModelMetaTagPeer::ID, $this->id);
    if ($this->isColumnModified(iceModelMetaTagPeer::URL)) $criteria->add(iceModelMetaTagPeer::URL, $this->url);
    if ($this->isColumnModified(iceModelMetaTagPeer::PARAMETERS)) $criteria->add(iceModelMetaTagPeer::PARAMETERS, $this->parameters);
    if ($this->isColumnModified(iceModelMetaTagPeer::UPDATED_AT)) $criteria->add(iceModelMetaTagPeer::UPDATED_AT, $this->updated_at);
    if ($this->isColumnModified(iceModelMetaTagPeer::CREATED_AT)) $criteria->add(iceModelMetaTagPeer::CREATED_AT, $this->created_at);

    return $criteria;
  }

  /**
   * Builds a Criteria object containing the primary key for this object.
   *
   * Unlike buildCriteria() this method includes the primary key values regardless
   * of whether or not they have been modified.
   *
   * @return     Criteria The Criteria object containing value(s) for primary key(s).
   */
  public function buildPkeyCriteria()
  {
    $criteria = new Criteria(iceModelMetaTagPeer::DATABASE_NAME);
    $criteria->add(iceModelMetaTagPeer::ID, $this->id);

    return $criteria;
  }

  /**
   * Returns the primary key for this object (row).
   * @return     int
   */
  public function getPrimaryKey()
  {
    return $this->getId();
  }

  /**
   * Generic method to set the primary key (id column).
   *
   * @param      int $key Primary key.
   * @return     void
   */
  public function setPrimaryKey($key)
  {
    $this->setId($key);
  }

  /**
   * Returns true if the primary key for this object is null.
   * @return     boolean
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
   * @param      object $copyObj An object of iceModelMetaTag (or compatible) type.
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
   * @throws     PropelException
   */
  public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
  {
    $copyObj->setUrl($this->getUrl());
    $copyObj->setParameters($this->getParameters());
    $copyObj->setUpdatedAt($this->getUpdatedAt());
    $copyObj->setCreatedAt($this->getCreatedAt());

    if ($deepCopy && !$this->startCopy)
    {
      // important: temporarily setNew(false) because this affects the behavior of
      // the getter/setter methods for fkey referrer objects.
      $copyObj->setNew(false);
      // store object hash to prevent cycle
      $this->startCopy = true;

      foreach ($this->geticeModelMetaTagI18ns() as $relObj)
      {
        if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
          $copyObj->addiceModelMetaTagI18n($relObj->copy($deepCopy));
        }
      }

      //unflag object copy
      $this->startCopy = false;
    }

    if ($makeNew)
    {
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
   * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
   * @return     iceModelMetaTag Clone of current object.
   * @throws     PropelException
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
   * @return     iceModelMetaTagPeer
   */
  public function getPeer()
  {
    if (self::$peer === null)
    {
      self::$peer = new iceModelMetaTagPeer();
    }
    return self::$peer;
  }


  /**
   * Initializes a collection based on the name of a relation.
   * Avoids crafting an 'init[$relationName]s' method name
   * that wouldn't work when StandardEnglishPluralizer is used.
   *
   * @param      string $relationName The name of the relation to initialize
   * @return     void
   */
  public function initRelation($relationName)
  {
    if ('iceModelMetaTagI18n' == $relationName)
    {
      return $this->initiceModelMetaTagI18ns();
    }
  }

  /**
   * Clears out the colliceModelMetaTagI18ns collection
   *
   * This does not modify the database; however, it will remove any associated objects, causing
   * them to be refetched by subsequent calls to accessor method.
   *
   * @return     void
   * @see        addiceModelMetaTagI18ns()
   */
  public function cleariceModelMetaTagI18ns()
  {
    $this->colliceModelMetaTagI18ns = null; // important to set this to NULL since that means it is uninitialized
  }

  /**
   * Initializes the colliceModelMetaTagI18ns collection.
   *
   * By default this just sets the colliceModelMetaTagI18ns collection to an empty array (like clearcolliceModelMetaTagI18ns());
   * however, you may wish to override this method in your stub class to provide setting appropriate
   * to your application -- for example, setting the initial array to the values stored in database.
   *
   * @param      boolean $overrideExisting If set to true, the method call initializes
   *                                        the collection even if it is not empty
   *
   * @return     void
   */
  public function initiceModelMetaTagI18ns($overrideExisting = true)
  {
    if (null !== $this->colliceModelMetaTagI18ns && !$overrideExisting)
    {
      return;
    }
    $this->colliceModelMetaTagI18ns = new PropelObjectCollection();
    $this->colliceModelMetaTagI18ns->setModel('iceModelMetaTagI18n');
  }

  /**
   * Gets an array of iceModelMetaTagI18n objects which contain a foreign key that references this object.
   *
   * If the $criteria is not null, it is used to always fetch the results from the database.
   * Otherwise the results are fetched from the database the first time, then cached.
   * Next time the same method is called without $criteria, the cached collection is returned.
   * If this iceModelMetaTag is new, it will return
   * an empty collection or the current collection; the criteria is ignored on a new object.
   *
   * @param      Criteria $criteria optional Criteria object to narrow the query
   * @param      PropelPDO $con optional connection object
   * @return     PropelCollection|array iceModelMetaTagI18n[] List of iceModelMetaTagI18n objects
   * @throws     PropelException
   */
  public function geticeModelMetaTagI18ns($criteria = null, PropelPDO $con = null)
  {
    if(null === $this->colliceModelMetaTagI18ns || null !== $criteria)
    {
      if ($this->isNew() && null === $this->colliceModelMetaTagI18ns)
      {
        // return empty collection
        $this->initiceModelMetaTagI18ns();
      }
      else
      {
        $colliceModelMetaTagI18ns = iceModelMetaTagI18nQuery::create(null, $criteria)
          ->filterByiceModelMetaTag($this)
          ->find($con);
        if (null !== $criteria)
        {
          return $colliceModelMetaTagI18ns;
        }
        $this->colliceModelMetaTagI18ns = $colliceModelMetaTagI18ns;
      }
    }
    return $this->colliceModelMetaTagI18ns;
  }

  /**
   * Sets a collection of iceModelMetaTagI18n objects related by a one-to-many relationship
   * to the current object.
   * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
   * and new objects from the given Propel collection.
   *
   * @param      PropelCollection $iceModelMetaTagI18ns A Propel collection.
   * @param      PropelPDO $con Optional connection object
   */
  public function seticeModelMetaTagI18ns(PropelCollection $iceModelMetaTagI18ns, PropelPDO $con = null)
  {
    $this->iceModelMetaTagI18nsScheduledForDeletion = $this->geticeModelMetaTagI18ns(new Criteria(), $con)->diff($iceModelMetaTagI18ns, false);

    foreach ($iceModelMetaTagI18ns as $iceModelMetaTagI18n)
    {
      // Fix issue with collection modified by reference
      if ($iceModelMetaTagI18n->isNew())
      {
        $iceModelMetaTagI18n->seticeModelMetaTag($this);
      }
      $this->addiceModelMetaTagI18n($iceModelMetaTagI18n);
    }

    $this->colliceModelMetaTagI18ns = $iceModelMetaTagI18ns;
  }

  /**
   * Returns the number of related iceModelMetaTagI18n objects.
   *
   * @param      Criteria $criteria
   * @param      boolean $distinct
   * @param      PropelPDO $con
   * @return     int Count of related iceModelMetaTagI18n objects.
   * @throws     PropelException
   */
  public function counticeModelMetaTagI18ns(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
  {
    if(null === $this->colliceModelMetaTagI18ns || null !== $criteria)
    {
      if ($this->isNew() && null === $this->colliceModelMetaTagI18ns)
      {
        return 0;
      }
      else
      {
        $query = iceModelMetaTagI18nQuery::create(null, $criteria);
        if($distinct)
        {
          $query->distinct();
        }
        return $query
          ->filterByiceModelMetaTag($this)
          ->count($con);
      }
    }
    else
    {
      return count($this->colliceModelMetaTagI18ns);
    }
  }

  /**
   * Method called to associate a iceModelMetaTagI18n object to this object
   * through the iceModelMetaTagI18n foreign key attribute.
   *
   * @param      iceModelMetaTagI18n $l iceModelMetaTagI18n
   * @return     iceModelMetaTag The current object (for fluent API support)
   */
  public function addiceModelMetaTagI18n(iceModelMetaTagI18n $l)
  {
    if ($this->colliceModelMetaTagI18ns === null)
    {
      $this->initiceModelMetaTagI18ns();
    }
    if (!$this->colliceModelMetaTagI18ns->contains($l)) { // only add it if the **same** object is not already associated
      $this->doAddiceModelMetaTagI18n($l);
    }

    return $this;
  }

  /**
   * @param  iceModelMetaTagI18n $iceModelMetaTagI18n The iceModelMetaTagI18n object to add.
   */
  protected function doAddiceModelMetaTagI18n($iceModelMetaTagI18n)
  {
    $this->colliceModelMetaTagI18ns[]= $iceModelMetaTagI18n;
    $iceModelMetaTagI18n->seticeModelMetaTag($this);
  }

  /**
   * Clears the current object and sets all attributes to their default values
   */
  public function clear()
  {
    $this->id = null;
    $this->url = null;
    $this->parameters = null;
    $this->updated_at = null;
    $this->created_at = null;
    $this->alreadyInSave = false;
    $this->alreadyInValidation = false;
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
   * @param      boolean $deep Whether to also clear the references on all referrer objects.
   */
  public function clearAllReferences($deep = false)
  {
    if ($deep)
    {
      if ($this->colliceModelMetaTagI18ns)
      {
        foreach ($this->colliceModelMetaTagI18ns as $o)
        {
          $o->clearAllReferences($deep);
        }
      }
    }

    if ($this->colliceModelMetaTagI18ns instanceof PropelCollection)
    {
      $this->colliceModelMetaTagI18ns->clearIterator();
    }
    $this->colliceModelMetaTagI18ns = null;
  }

  /**
   * Uses the primaryString column from the related i18n model
   * @see iceModelMetaTagI18n
   */
  public function __toString()
  {
    return (string) $this->getCurrenticeModelMetaTagI18n();
  }


  // symfony_i18n behavior
  
  /**
   * Returns the culture.
   *
   * @return string The culture
   */
  public function getCulture()
  {
    return $this->culture;
  }
  
  /**
   * Sets the culture.
   *
   * @param string  The culture to set
   *
   * @return iceModelMetaTag
   */
  public function setCulture($culture)
  {
    $this->culture = $culture;
    return $this;
  }
  
  /**
   * Returns the "title" value from the current {@link iceModelMetaTagI18n}.
   */
  public function getTitle($culture = null)
  {
    return $this->getCurrenticeModelMetaTagI18n($culture)->getTitle();
  }
  
  /**
   * Sets the "title" value of the current {@link iceModelMetaTagI18n}.
   *
   * @return iceModelMetaTag
   */
  public function setTitle($value, $culture = null)
  {
    $this->getCurrenticeModelMetaTagI18n($culture)->setTitle($value);
    return $this;
  }
  
  /**
   * Returns the "description" value from the current {@link iceModelMetaTagI18n}.
   */
  public function getDescription($culture = null)
  {
    return $this->getCurrenticeModelMetaTagI18n($culture)->getDescription();
  }
  
  /**
   * Sets the "description" value of the current {@link iceModelMetaTagI18n}.
   *
   * @return iceModelMetaTag
   */
  public function setDescription($value, $culture = null)
  {
    $this->getCurrenticeModelMetaTagI18n($culture)->setDescription($value);
    return $this;
  }
  
  /**
   * Returns the "keywords" value from the current {@link iceModelMetaTagI18n}.
   */
  public function getKeywords($culture = null)
  {
    return $this->getCurrenticeModelMetaTagI18n($culture)->getKeywords();
  }
  
  /**
   * Sets the "keywords" value of the current {@link iceModelMetaTagI18n}.
   *
   * @return iceModelMetaTag
   */
  public function setKeywords($value, $culture = null)
  {
    $this->getCurrenticeModelMetaTagI18n($culture)->setKeywords($value);
    return $this;
  }
  
  /**
   * Returns the current translation.
   *
   * @return iceModelMetaTagI18n
   */
  public function getCurrenticeModelMetaTagI18n($culture = null)
  {
    if (null === $culture)
    {
      $culture = null === $this->culture ? sfPropel::getDefaultCulture() : $this->culture;
    }
  
    if (!isset($this->current_i18n[$culture]))
    {
      $object = $this->isNew() ? null : iceModelMetaTagI18nPeer::retrieveByPK($this->getPrimaryKey(), $culture);
      if ($object)
      {
        $this->seticeModelMetaTagI18nForCulture($object, $culture);
      }
      else
      {
        $this->seticeModelMetaTagI18nForCulture(new iceModelMetaTagI18n(), $culture);
        $this->current_i18n[$culture]->setCulture($culture);
      }
    }
  
    return $this->current_i18n[$culture];
  }
  
  /**
   * Sets the translation object for a culture.
   */
  public function seticeModelMetaTagI18nForCulture(iceModelMetaTagI18n $object, $culture)
  {
    $this->current_i18n[$culture] = $object;
    $this->addiceModelMetaTagI18n($object);
  }

  /**
   * Catches calls to virtual methods
   */
  public function __call($name, $params)
  {
    
    // symfony_behaviors behavior
    if ($callable = sfMixer::getCallable('BaseiceModelMetaTag:' . $name))
    {
      array_unshift($params, $this);
      return call_user_func_array($callable, $params);
    }

    return parent::__call($name, $params);
  }

}
