<?php

namespace Yandex\Market\Partner\Models;

use Yandex\Common\Model;

class AddressOutlet extends Model
{

    protected $city = null;

    protected $street = null;

    protected $number = null;

    protected $building = null;

    protected $estate = null;

    protected $block = null;

    protected $additional = null;

    protected $km = null;

    protected $regionId = null;

    /**
     * @return null
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return null
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @return null
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @return null
     */
    public function getBuilding()
    {
        return $this->building;
    }

    /**
     * @return null
     */
    public function getEstate()
    {
        return $this->estate;
    }

    /**
     * @return null
     */
    public function getBlock()
    {
        return $this->block;
    }

    /**
     * @return null
     */
    public function getAdditional()
    {
        return $this->additional;
    }

    /**
     * @return null
     */
    public function getKm()
    {
        return $this->km;
    }

    /**
     * @return null
     */
    public function getRegionId()
    {
        return $this->regionId;
    }

    /**
     * @param null $regionId
     */
    public function setRegionId($regionId)
    {
        $this->regionId = $regionId;
    }

    /**
     * @param null $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @param null $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @param null $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @param null $building
     */
    public function setBuilding($building)
    {
        $this->building = $building;
    }

    /**
     * @param null $estate
     */
    public function setEstate($estate)
    {
        $this->estate = $estate;
    }

    /**
     * @param null $block
     */
    public function setBlock($block)
    {
        $this->block = $block;
    }

    /**
     * @param null $additional
     */
    public function setAdditional($additional)
    {
        $this->additional = $additional;
    }

    /**
     * @param null $km
     */
    public function setKm($km)
    {
        $this->km = $km;
    }
}
