<?php

/**
 * EarthquakeTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class EarthquakeTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object EarthquakeTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('Earthquake');
    }
}