<?php

/**
 * BaseBibSources
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_source
 * @property string $nom_source
 * @property string $desc_source
 * @property string $host
 * @property integer $port
 * @property string $username
 * @property string $pass
 * @property string $db_name
 * @property string $db_schema
 * @property string $db_table
 * @property string $db_field
 * @property Doctrine_Collection $Syntheseff
 * 
 * @method integer             getIdSource()    Returns the current record's "id_source" value
 * @method string              getNomSource()   Returns the current record's "nom_source" value
 * @method string              getDescSource()  Returns the current record's "desc_source" value
 * @method string              getHost()        Returns the current record's "host" value
 * @method integer             getPort()        Returns the current record's "port" value
 * @method string              getUsername()    Returns the current record's "username" value
 * @method string              getPass()        Returns the current record's "pass" value
 * @method string              getDbName()      Returns the current record's "db_name" value
 * @method string              getDbSchema()    Returns the current record's "db_schema" value
 * @method string              getDbTable()     Returns the current record's "db_table" value
 * @method string              getDbField()     Returns the current record's "db_field" value
 * @method Doctrine_Collection getSyntheseff()  Returns the current record's "Syntheseff" collection
 * @method BibSources          setIdSource()    Sets the current record's "id_source" value
 * @method BibSources          setNomSource()   Sets the current record's "nom_source" value
 * @method BibSources          setDescSource()  Sets the current record's "desc_source" value
 * @method BibSources          setHost()        Sets the current record's "host" value
 * @method BibSources          setPort()        Sets the current record's "port" value
 * @method BibSources          setUsername()    Sets the current record's "username" value
 * @method BibSources          setPass()        Sets the current record's "pass" value
 * @method BibSources          setDbName()      Sets the current record's "db_name" value
 * @method BibSources          setDbSchema()    Sets the current record's "db_schema" value
 * @method BibSources          setDbTable()     Sets the current record's "db_table" value
 * @method BibSources          setDbField()     Sets the current record's "db_field" value
 * @method BibSources          setSyntheseff()  Sets the current record's "Syntheseff" collection
 * 
 * @package    geonature
 * @subpackage model
 * @author     Gil Deluermoz
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseBibSources extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('synthese.bib_sources');
        $this->hasColumn('id_source', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('nom_source', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('desc_source', 'string', null, array(
             'type' => 'string',
             'length' => '',
             ));
        $this->hasColumn('host', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('port', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('username', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('pass', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('db_name', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('db_schema', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('db_table', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('db_field', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Syntheseff', array(
             'local' => 'id_source',
             'foreign' => 'id_source'));
    }
}