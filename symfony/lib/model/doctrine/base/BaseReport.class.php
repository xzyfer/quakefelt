<?php

/**
 * BaseReport
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $earthquake_id
 * @property string $reporter_name
 * @property string $contact_phone
 * @property string $contact_email
 * @property enum $situation
 * @property string $latitude
 * @property string $longitude
 * @property string $building
 * @property enum $asleep
 * @property integer $felt
 * @property enum $other_felt
 * @property enum $motion
 * @property integer $duration
 * @property enum $reaction
 * @property enum $response
 * @property enum $stand
 * @property enum $sway
 * @property enum $creak
 * @property enum $shelf
 * @property enum $picture
 * @property enum $furniture
 * @property enum $heavy_appliance
 * @property enum $walls
 * @property string $d_text
 * @property float $mmi
 * @property float $distance_from_epicentre
 * @property Earthquake $Earthquake
 * @property Doctrine_Collection $Damages
 * 
 * @method integer             getId()                      Returns the current record's "id" value
 * @method integer             getEarthquakeId()            Returns the current record's "earthquake_id" value
 * @method string              getReporterName()            Returns the current record's "reporter_name" value
 * @method string              getContactPhone()            Returns the current record's "contact_phone" value
 * @method string              getContactEmail()            Returns the current record's "contact_email" value
 * @method enum                getSituation()               Returns the current record's "situation" value
 * @method string              getLatitude()                Returns the current record's "latitude" value
 * @method string              getLongitude()               Returns the current record's "longitude" value
 * @method string              getBuilding()                Returns the current record's "building" value
 * @method enum                getAsleep()                  Returns the current record's "asleep" value
 * @method integer             getFelt()                    Returns the current record's "felt" value
 * @method enum                getOtherFelt()               Returns the current record's "other_felt" value
 * @method enum                getMotion()                  Returns the current record's "motion" value
 * @method integer             getDuration()                Returns the current record's "duration" value
 * @method enum                getReaction()                Returns the current record's "reaction" value
 * @method enum                getResponse()                Returns the current record's "response" value
 * @method enum                getStand()                   Returns the current record's "stand" value
 * @method enum                getSway()                    Returns the current record's "sway" value
 * @method enum                getCreak()                   Returns the current record's "creak" value
 * @method enum                getShelf()                   Returns the current record's "shelf" value
 * @method enum                getPicture()                 Returns the current record's "picture" value
 * @method enum                getFurniture()               Returns the current record's "furniture" value
 * @method enum                getHeavyAppliance()          Returns the current record's "heavy_appliance" value
 * @method enum                getWalls()                   Returns the current record's "walls" value
 * @method string              getDText()                   Returns the current record's "d_text" value
 * @method float               getMmi()                     Returns the current record's "mmi" value
 * @method float               getDistanceFromEpicentre()   Returns the current record's "distance_from_epicentre" value
 * @method Earthquake          getEarthquake()              Returns the current record's "Earthquake" value
 * @method Doctrine_Collection getDamages()                 Returns the current record's "Damages" collection
 * @method Report              setId()                      Sets the current record's "id" value
 * @method Report              setEarthquakeId()            Sets the current record's "earthquake_id" value
 * @method Report              setReporterName()            Sets the current record's "reporter_name" value
 * @method Report              setContactPhone()            Sets the current record's "contact_phone" value
 * @method Report              setContactEmail()            Sets the current record's "contact_email" value
 * @method Report              setSituation()               Sets the current record's "situation" value
 * @method Report              setLatitude()                Sets the current record's "latitude" value
 * @method Report              setLongitude()               Sets the current record's "longitude" value
 * @method Report              setBuilding()                Sets the current record's "building" value
 * @method Report              setAsleep()                  Sets the current record's "asleep" value
 * @method Report              setFelt()                    Sets the current record's "felt" value
 * @method Report              setOtherFelt()               Sets the current record's "other_felt" value
 * @method Report              setMotion()                  Sets the current record's "motion" value
 * @method Report              setDuration()                Sets the current record's "duration" value
 * @method Report              setReaction()                Sets the current record's "reaction" value
 * @method Report              setResponse()                Sets the current record's "response" value
 * @method Report              setStand()                   Sets the current record's "stand" value
 * @method Report              setSway()                    Sets the current record's "sway" value
 * @method Report              setCreak()                   Sets the current record's "creak" value
 * @method Report              setShelf()                   Sets the current record's "shelf" value
 * @method Report              setPicture()                 Sets the current record's "picture" value
 * @method Report              setFurniture()               Sets the current record's "furniture" value
 * @method Report              setHeavyAppliance()          Sets the current record's "heavy_appliance" value
 * @method Report              setWalls()                   Sets the current record's "walls" value
 * @method Report              setDText()                   Sets the current record's "d_text" value
 * @method Report              setMmi()                     Sets the current record's "mmi" value
 * @method Report              setDistanceFromEpicentre()   Sets the current record's "distance_from_epicentre" value
 * @method Report              setEarthquake()              Sets the current record's "Earthquake" value
 * @method Report              setDamages()                 Sets the current record's "Damages" collection
 * 
 * @package    quakefelt
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseReport extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('report');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'unique' => true,
             'primary' => true,
             ));
        $this->hasColumn('earthquake_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('reporter_name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('contact_phone', 'string', 30, array(
             'type' => 'string',
             'length' => 30,
             ));
        $this->hasColumn('contact_email', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('situation', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'INSIDE',
              1 => 'OUTSIDE',
              2 => 'STOPPED_VEHICLE',
              3 => 'MOVING_VEHICLE',
              4 => 'OTHER',
             ),
             'notnull' => true,
             ));
        $this->hasColumn('latitude', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('longitude', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('building', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('asleep', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'NO',
              1 => 'SLEPT_THROUGH',
              2 => 'WOKE_UP',
             ),
             'notnull' => true,
             ));
        $this->hasColumn('felt', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('other_felt', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'NO_ANSWER',
              1 => 'NO_OTHERS',
              2 => 'SOME_FELT',
              3 => 'MOST_FELT',
              4 => 'ALMOST_ALL',
             ),
             'notnull' => true,
             ));
        $this->hasColumn('motion', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'NOT_FELT',
              1 => 'WEAK',
              2 => 'MILD',
              3 => 'MODERATE',
              4 => 'STRONG',
              5 => 'VIOLENT',
             ),
             'notnull' => true,
             ));
        $this->hasColumn('duration', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('reaction', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'NONE',
              1 => 'LITTLE',
              2 => 'EXCITEMENT',
              3 => 'SOMEWHAT_FRIGHTENED',
              4 => 'VERY_FRIGHTENED',
              5 => 'EXTREMELY_FRIGHTENED',
             ),
             'notnull' => true,
             ));
        $this->hasColumn('response', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'TOOK_NO_ACTION',
              1 => 'DOORWAY',
              2 => 'DUCKED',
              3 => 'RAN_OUTSIDE',
              4 => 'OTHER',
             ),
             'notnull' => true,
             ));
        $this->hasColumn('stand', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'YES',
              1 => 'NO',
             ),
             'notnull' => true,
             ));
        $this->hasColumn('sway', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'NO',
              1 => 'SLIGHT',
              2 => 'VIOLENT',
             ),
             'notnull' => true,
             ));
        $this->hasColumn('creak', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'NO',
              1 => 'SLIGHT',
              2 => 'LOUD',
             ),
             'notnull' => true,
             ));
        $this->hasColumn('shelf', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'NO',
              1 => 'RATTLED_SLIGHTLY',
              2 => 'RATTLED_LOUDLY',
              3 => 'FEW_TOPPLED',
              4 => 'MANY_FELL',
              5 => 'MOST_FELL',
             ),
             'notnull' => true,
             ));
        $this->hasColumn('picture', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'NO',
              1 => 'NONE_FELL',
              2 => 'SOME_FELL',
             ),
             'notnull' => true,
             ));
        $this->hasColumn('furniture', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'NO',
              1 => 'YES',
             ),
             'notnull' => true,
             ));
        $this->hasColumn('heavy_appliance', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'NO',
              1 => 'SOME_CONTENTS_FELL',
              2 => 'SHIFTED_CM',
              3 => 'SHIFTED_M',
              4 => 'OVERTURNED',
             ),
             'notnull' => true,
             ));
        $this->hasColumn('walls', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'NO',
              1 => 'SOME_CRACKED',
              2 => 'PARTIAL_FALL',
              3 => 'COMPLETE_FALL',
             ),
             'notnull' => true,
             ));
        $this->hasColumn('d_text', 'string', 1000, array(
             'type' => 'string',
             'length' => 1000,
             ));
        $this->hasColumn('mmi', 'float', null, array(
             'type' => 'float',
             ));
        $this->hasColumn('distance_from_epicentre', 'float', null, array(
             'type' => 'float',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Earthquake', array(
             'local' => 'earthquake_id',
             'foreign' => 'id'));

        $this->hasMany('Damage as Damages', array(
             'local' => 'id',
             'foreign' => 'report_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}