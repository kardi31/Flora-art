<?php

/**
 * Offer_Model_Doctrine_BaseOfferTranslation
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $lang
 * @property string $slug
 * @property string $name
 * @property clob $description
 * @property Offer_Model_Doctrine_Offer $Offer
 * 
 * @package    Admi
 * @subpackage Offer
 * @author     Michał Folga <michalfolga@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class Offer_Model_Doctrine_BaseOfferTranslation extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('offer_offer_translation');
        $this->hasColumn('id', 'integer', 4, array(
             'primary' => true,
             'autoincrement' => true,
             'type' => 'integer',
             'length' => '4',
             ));
        $this->hasColumn('lang', 'string', 64, array(
             'primary' => true,
             'type' => 'string',
             'length' => '64',
             ));
        $this->hasColumn('slug', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('description', 'clob', null, array(
             'type' => 'clob',
             ));

        $this->option('type', 'MyISAM');
        $this->option('collate', 'utf8_general_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Offer_Model_Doctrine_Offer as Offer', array(
             'local' => 'id',
             'foreign' => 'id'));
    }
}