<?php

/**
 * BaseLSecteurs
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_secteur
 * @property string $nom_secteur
 * @property blob $the_geom
 * @property Doctrine_Collection $LCommunes
 * 
 * @method integer             getIdSecteur()   Returns the current record's "id_secteur" value
 * @method string              getNomSecteur()  Returns the current record's "nom_secteur" value
 * @method blob                getTheGeom()     Returns the current record's "the_geom" value
 * @method Doctrine_Collection getLCommunes()   Returns the current record's "LCommunes" collection
 * @method LSecteurs           setIdSecteur()   Sets the current record's "id_secteur" value
 * @method LSecteurs           setNomSecteur()  Sets the current record's "nom_secteur" value
 * @method LSecteurs           setTheGeom()     Sets the current record's "the_geom" value
 * @method LSecteurs           setLCommunes()   Sets the current record's "LCommunes" collection
 * 
 * @package    geonature
 * @subpackage model
 * @author     Gil Deluermoz
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseLSecteurs extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('layers.l_secteurs');
        $this->hasColumn('id_secteur', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('nom_secteur', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('the_geom', 'blob', null, array(
             'type' => 'blob',
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('LCommunes', array(
             'local' => 'id_secteur',
             'foreign' => 'id_secteur'));
    }
}