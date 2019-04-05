<?php

namespace Yandex\Market\Partner\Models;

use Yandex\Common\Model;

class DeliveryRule extends Model
{
    /**
     * @var float|null
     */
    protected $cost = null;

    /**
     * @var integer|null
     */
    protected $dateSwitchHour = null;

    /**
     * @var integer|null
     */
    protected $minDeliveryDays = null;

    /**
     * @var integer|null
     */
    protected $maxDeliveryDays = null;

    /**
     * @var float|null
     */
    protected $priceFrom = null;

    /**
     * @var float|null
     */
    protected $priceTo = null;

    /**
     * @var string|null
     */
    protected $shipperHumanReadableId = null;

    /**
     * @var integer|null
     */
    protected $shipperId = null;

    /**
     * @var string|null
     */
    protected $shipperName = null;

    /**
     * @var boolean|null
     */
    protected $unspecifiedDeliveryInterval = null;

    /**
     * @var boolean|null
     */
    protected $workInHoliday = null;

    protected $mappingClasses = [
    ];

    protected $propNameMap = [];

    /**
     * @var integer|null
     */
    protected $deliveryServiceId = null;

    /**
     * @var string|null
     */
    protected $orderBefore = null;
    /**
     * @var float|null
     */
    protected $priceFreePickup = null;

    /**
     * @return float|null
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @return int|null
     */
    public function getDateSwitchHour()
    {
        return $this->dateSwitchHour;
    }

    /**
     * @return int|null
     */
    public function getMinDeliveryDays()
    {
        return $this->minDeliveryDays;
    }

    /**
     * @return int|null
     */
    public function getMaxDeliveryDays()
    {
        return $this->maxDeliveryDays;
    }

    /**
     * @return float|null
     */
    public function getPriceFrom()
    {
        return $this->priceFrom;
    }

    /**
     * @return float|null
     */
    public function getPriceTo()
    {
        return $this->priceTo;
    }

    /**
     * @return null|string
     */
    public function getShipperHumanReadableId()
    {
        return $this->shipperHumanReadableId;
    }

    /**
     * @return int|null
     */
    public function getShipperId()
    {
        return $this->shipperId;
    }

    /**
     * @return null|string
     */
    public function getShipperName()
    {
        return $this->shipperName;
    }

    /**
     * @return bool|null
     */
    public function getUnspecifiedDeliveryInterval()
    {
        return $this->unspecifiedDeliveryInterval;
    }

    /**
     * @return bool|null
     */
    public function getWorkInHoliday()
    {
        return $this->workInHoliday;
    }

    /**
     * @param float|null $cost
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
    }

    /**
     * @param int|null $dateSwitchHour
     */
    public function setDateSwitchHour($dateSwitchHour)
    {
        $this->dateSwitchHour = $dateSwitchHour;
    }

    /**
     * @param int|null $minDeliveryDays
     */
    public function setMinDeliveryDays($minDeliveryDays)
    {
        $this->minDeliveryDays = $minDeliveryDays;
    }

    /**
     * @param int|null $maxDeliveryDays
     */
    public function setMaxDeliveryDays($maxDeliveryDays)
    {
        $this->maxDeliveryDays = $maxDeliveryDays;
    }

    /**
     * @param float|null $priceFrom
     */
    public function setPriceFrom($priceFrom)
    {
        $this->priceFrom = $priceFrom;
    }

    /**
     * @param float|null $priceTo
     */
    public function setPriceTo($priceTo)
    {
        $this->priceTo = $priceTo;
    }

    /**
     * @param null|string $shipperHumanReadableId
     */
    public function setShipperHumanReadableId($shipperHumanReadableId)
    {
        $this->shipperHumanReadableId = $shipperHumanReadableId;
    }

    /**
     * @param int|null $shipperId
     */
    public function setShipperId($shipperId)
    {
        $this->shipperId = $shipperId;
    }

    /**
     * @param null|string $shipperName
     */
    public function setShipperName($shipperName)
    {
        $this->shipperName = $shipperName;
    }

    /**
     * @param bool|null $unspecifiedDeliveryInterval
     */
    public function setUnspecifiedDeliveryInterval($unspecifiedDeliveryInterval)
    {
        $this->unspecifiedDeliveryInterval = $unspecifiedDeliveryInterval;
    }

    /**
     * @param bool|null $workInHoliday
     */
    public function setWorkInHoliday($workInHoliday)
    {
        $this->workInHoliday = $workInHoliday;
    }

    /**
     * @param array $mappingClasses
     */
    public function setMappingClasses(array $mappingClasses)
    {
        $this->mappingClasses = $mappingClasses;
    }

    /**
     * @param array $propNameMap
     */
    public function setPropNameMap(array $propNameMap)
    {
        $this->propNameMap = $propNameMap;
    }

    /**
     * @param int|null $deliveryServiceId
     */
    public function setDeliveryServiceId($deliveryServiceId)
    {
        $this->deliveryServiceId = $deliveryServiceId;
    }

    /**
     * @param null|string $orderBefore
     */
    public function setOrderBefore($orderBefore)
    {
        $this->orderBefore = $orderBefore;
    }

    /**
     * @param float|null $priceFreePickup
     */
    public function setPriceFreePickup($priceFreePickup)
    {
        $this->priceFreePickup = $priceFreePickup;
    }
}
