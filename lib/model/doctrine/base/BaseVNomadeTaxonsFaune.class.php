<?php

/**
 * BaseVNomadeTaxonsFaune
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_taxon
 * @property integer $cd_ref
 * @property string $nom_latin
 * @property string $nom_francais
 * @property integer $id_classe
 * @property integer $denombrement
 * @property boolean $patrimonial
 * @property string $message
 * @property boolean $contactfaune
 * @property boolean $mortalite
 * @property BibTaxons $BibTaxons
 * @property CorUniteTaxon $CorUniteTaxon
 * @property TRelevesCf $TRelevesCf
 * 
 * @method integer            getIdTaxon()       Returns the current record's "id_taxon" value
 * @method integer            getCdRef()         Returns the current record's "cd_ref" value
 * @method string             getNomLatin()      Returns the current record's "nom_latin" value
 * @method string             getNomFrancais()   Returns the current record's "nom_francais" value
 * @method integer            getIdClasse()      Returns the current record's "id_classe" value
 * @method integer            getDenombrement()  Returns the current record's "denombrement" value
 * @method boolean            getPatrimonial()   Returns the current record's "patrimonial" value
 * @method string             getMessage()       Returns the current record's "message" value
 * @method boolean            getContactfaune()  Returns the current record's "contactfaune" value
 * @method boolean            getMortalite()     Returns the current record's "mortalite" value
 * @method BibTaxons          getBibTaxons()     Returns the current record's "BibTaxons" value
 * @method CorUniteTaxon      getCorUniteTaxon() Returns the current record's "CorUniteTaxon" value
 * @method TRelevesCf         getTRelevesCf()    Returns the current record's "TRelevesCf" value
 * @method VNomadeTaxonsFaune setIdTaxon()       Sets the current record's "id_taxon" value
 * @method VNomadeTaxonsFaune setCdRef()         Sets the current record's "cd_ref" value
 * @method VNomadeTaxonsFaune setNomLatin()      Sets the current record's "nom_latin" value
 * @method VNomadeTaxonsFaune setNomFrancais()   Sets the current record's "nom_francais" value
 * @method VNomadeTaxonsFaune setIdClasse()      Sets the current record's "id_classe" value
 * @method VNomadeTaxonsFaune setDenombrement()  Sets the current record's "denombrement" value
 * @method VNomadeTaxonsFaune setPatrimonial()   Sets the current record's "patrimonial" value
 * @method VNomadeTaxonsFaune setMessage()       Sets the current record's "message" value
 * @method VNomadeTaxonsFaune setContactfaune()  Sets the current record's "contactfaune" value
 * @method VNomadeTaxonsFaune setMortalite()     Sets the current record's "mortalite" value
 * @method VNomadeTaxonsFaune setBibTaxons()     Sets the current record's "BibTaxons" value
 * @method VNomadeTaxonsFaune setCorUniteTaxon() Sets the current record's "CorUniteTaxon" value
 * @method VNomadeTaxonsFaune setTRelevesCf()    Sets the current record's "TRelevesCf" value
 * 
 * @package    geonature
 * @subpackage model
 * @author     Gil Deluermoz
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseVNomadeTaxonsFaune extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('contactfaune.v_nomade_taxons_faune');
        $this->hasColumn('id_taxon', 'integer', 8, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 8,
             ));
        $this->hasColumn('cd_ref', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             ));
        $this->hasColumn('nom_latin', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('nom_francais', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('id_classe', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             ));
        $this->hasColumn('denombrement', 'integer', 8, array(
             'type' => 'integer',
             'length' => 8,
             ));
        $this->hasColumn('patrimonial', 'boolean', 1, array(
             'type' => 'boolean',
             'length' => 1,
             ));
        $this->hasColumn('message', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('contactfaune', 'boolean', 1, array(
             'type' => 'boolean',
             'length' => 1,
             ));
        $this->hasColumn('mortalite', 'boolean', 1, array(
             'type' => 'boolean',
             'length' => 1,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('BibTaxons', array(
             'local' => 'id_taxon',
             'foreign' => 'id_taxon'));

        $this->hasOne('CorUniteTaxon', array(
             'local' => 'id_taxon',
             'foreign' => 'id_taxon'));

        $this->hasOne('TRelevesCf', array(
             'local' => 'id_taxon',
             'foreign' => 'id_taxon'));
    }
}