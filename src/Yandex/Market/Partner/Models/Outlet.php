<?php

namespace Yandex\Market\Partner\Models;

use Yandex\Common\Model;
use Yandex\Common\StringCollection;

class Outlet extends Model
{
    protected $id = null;

    protected $mappingClasses = [
        'address' => 'Yandex\Market\Partner\Models\AddressOutlet',
        'deliveryRules' => 'Yandex\Market\Partner\Models\DeliveryRules',
        'emails' => 'Yandex\Common\StringCollection',
        'phones' => 'Yandex\Common\StringCollection',
        'workingSchedule' => 'Yandex\Market\Partner\Models\WorkingSchedule'
    ];
    protected $propNameMap = [];

    /**
     * @var null|boolean
     */
    protected $isBookNow = null;

    /**
     * @var null|boolean
     */
    protected $isMain = null;

    /**
     * @var null|string
     */
    protected $name = null;

    /**
     * @var null|string
     */
    protected $reason = null;

    /**
     * @var null|string
     */
    protected $shopOutletId = null;

    /**
     * @var null|enum
     */
    protected $status = null;

    /**
     * @var null|enum
     */
    protected $type = null;

    /**
     * @var null|enum
     */
    protected $visibility = null;

    /**
     * @var null|string
     */
    protected $workingTime = null;

    /**
     * @var null|AddressOutlet
     */
    protected $address = null;
    protected $emails = null;
    protected $phones = null;
    protected $deliveryRules = null;
    protected $workingSchedule = null;


    protected $coords = null;
    protected $shopOutletCode = null;

    /**
     * Retrieve the id property
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the id property
     *
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsBookNow()
    {
        return $this->isBookNow;
    }

    /**
     * @return bool|null
     */
    public function getIsMain()
    {
        return $this->isMain;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return null|string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @return null|string
     */
    public function getShopOutletId()
    {
        return $this->shopOutletId;
    }

    /**
     * @return null|enum
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return null|enum
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return null|enum
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * @return null|string
     */
    public function getWorkingTime()
    {
        return $this->workingTime;
    }

    /**
     * @return AddressOutlet|null
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return DeliveryRules|null
     */
    public function getDeliveryRules()
    {
        return $this->deliveryRules;
    }

    /**
     * @return StringCollection|null
     */
    public function getEmails()
    {
        return $this->emails;
    }

    /**
     * @return StringCollection|null
     */
    public function getPhones()
    {
        return $this->phones;
    }

    /**
     * @return array
     */
    public function getMappingClasses(): array
    {
        return $this->mappingClasses;
    }

    /**
     * @param array $mappingClasses
     */
    public function setMappingClasses(array $mappingClasses)
    {
        $this->mappingClasses = $mappingClasses;
    }

    /**
     * @return array
     */
    public function getPropNameMap(): array
    {
        return $this->propNameMap;
    }

    /**
     * @param array $propNameMap
     */
    public function setPropNameMap(array $propNameMap)
    {
        $this->propNameMap = $propNameMap;
    }

    /**
     * @return null
     */
    public function getWorkingSchedule()
    {
        return $this->workingSchedule;
    }

    /**
     * @param null $workingSchedule
     */
    public function setWorkingSchedule($workingSchedule)
    {
        $this->workingSchedule = $workingSchedule;
    }

    /**
     * @return null
     */
    public function getCoords()
    {
        return $this->coords;
    }

    /**
     * @param null $coords
     */
    public function setCoords($coords)
    {
        $this->coords = $coords;
    }

    /**
     * @return null
     */
    public function getShopOutletCode()
    {
        return $this->shopOutletCode;
    }

    /**
     * @param null $shopOutletCode
     */
    public function setShopOutletCode($shopOutletCode)
    {
        $this->shopOutletCode = $shopOutletCode;
    }

    /**
     * @param bool|null $isBookNow
     */
    public function setIsBookNow($isBookNow)
    {
        $this->isBookNow = $isBookNow;
        return $this;
    }

    /**
     * @param bool|null $isMain
     */
    public function setIsMain($isMain)
    {
        $this->isMain = $isMain;
        return $this;
    }

    /**
     * @param null|string $reason
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
        return $this;
    }

    /**
     * @param null|string $shopOutletId
     */
    public function setShopOutletId($shopOutletId)
    {
        $this->shopOutletId = $shopOutletId;
        return $this;
    }

    /**
     * @param null|enum $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param null|enum $type
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param null|enum $visibility
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;
        return $this;
    }

    /**
     * @param null|string $workingTime
     */
    public function setWorkingTime($workingTime)
    {
        $this->workingTime = $workingTime;
        return $this;
    }

    /**
     * @param null|AddressOutlet $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @param null $emails
     */
    public function setEmails($emails)
    {
        $this->emails = $emails;
        return $this;
    }

    /**
     * @param null $phones
     */
    public function setPhones($phones)
    {
        $this->phones = $phones;
        return $this;
    }

    /**
     * @param null $deliveryRules
     */
    public function setDeliveryRules($deliveryRules)
    {
        $this->deliveryRules = $deliveryRules;
        return $this;
    }
}
