<?php

/**
 * BaseBibUnites
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_unite
 * @property string $nom_unite
 * @property string $adresse_unite
 * @property string $cp_unite
 * @property string $ville_unite
 * @property string $tel_unite
 * @property string $fax_unite
 * @property string $email_unite
 * @property Doctrine_Collection $TRoles
 * 
 * @method integer             getIdUnite()       Returns the current record's "id_unite" value
 * @method string              getNomUnite()      Returns the current record's "nom_unite" value
 * @method string              getAdresseUnite()  Returns the current record's "adresse_unite" value
 * @method string              getCpUnite()       Returns the current record's "cp_unite" value
 * @method string              getVilleUnite()    Returns the current record's "ville_unite" value
 * @method string              getTelUnite()      Returns the current record's "tel_unite" value
 * @method string              getFaxUnite()      Returns the current record's "fax_unite" value
 * @method string              getEmailUnite()    Returns the current record's "email_unite" value
 * @method Doctrine_Collection getTRoles()        Returns the current record's "TRoles" collection
 * @method BibUnites           setIdUnite()       Sets the current record's "id_unite" value
 * @method BibUnites           setNomUnite()      Sets the current record's "nom_unite" value
 * @method BibUnites           setAdresseUnite()  Sets the current record's "adresse_unite" value
 * @method BibUnites           setCpUnite()       Sets the current record's "cp_unite" value
 * @method BibUnites           setVilleUnite()    Sets the current record's "ville_unite" value
 * @method BibUnites           setTelUnite()      Sets the current record's "tel_unite" value
 * @method BibUnites           setFaxUnite()      Sets the current record's "fax_unite" value
 * @method BibUnites           setEmailUnite()    Sets the current record's "email_unite" value
 * @method BibUnites           setTRoles()        Sets the current record's "TRoles" collection
 * 
 * @package    geonature
 * @subpackage model
 * @author     Gil Deluermoz
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseBibUnites extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('utilisateurs.bib_unites');
        $this->hasColumn('id_unite', 'integer', 8, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 8,
             ));
        $this->hasColumn('nom_unite', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('adresse_unite', 'string', 128, array(
             'type' => 'string',
             'length' => 128,
             ));
        $this->hasColumn('cp_unite', 'string', 5, array(
             'type' => 'string',
             'length' => 5,
             ));
        $this->hasColumn('ville_unite', 'string', 5, array(
             'type' => 'string',
             'length' => 5,
             ));
        $this->hasColumn('tel_unite', 'string', 14, array(
             'type' => 'string',
             'length' => 14,
             ));
        $this->hasColumn('fax_unite', 'string', 14, array(
             'type' => 'string',
             'length' => 14,
             ));
        $this->hasColumn('email_unite', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('TRoles', array(
             'local' => 'id_unite',
             'foreign' => 'id_unite'));
    }
}