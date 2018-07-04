<?php

namespace Yandex\Market\Partner\Models;

use Yandex\Common\Model;

class ScheduleItem extends Model
{
    /**
     * @var string|null
     */
    protected $startDay = null;
    /**
     * @var string|null
     */
    protected $endDay = null;

    /**
     * @var string|null
     */
    protected $startTime = null;
    /**
     * @var string|null
     */
    protected $endTime = null;
    /**
     * @var boolean|null
     */
    protected $workInHoliday = null;

    protected $mappingClasses = [];

    protected $propNameMap = [];

    /**
     * @return null|string
     */
    public function getStartDay()
    {
        return $this->startDay;
    }

    /**
     * @param null|string $startDay
     */
    public function setStartDay($startDay)
    {
        $this->startDay = $startDay;
    }

    /**
     * @return null|string
     */
    public function getEndDay()
    {
        return $this->endDay;
    }

    /**
     * @param null|string $endDay
     */
    public function setEndDay($endDay)
    {
        $this->endDay = $endDay;
    }

    /**
     * @return null|string
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param null|string $startTime
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }

    /**
     * @return null|string
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param null|string $endTime
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }

    /**
     * @return bool|null
     */
    public function getWorkInHoliday()
    {
        return $this->workInHoliday;
    }

    /**
     * @param bool|null $workInHoliday
     */
    public function setWorkInHoliday($workInHoliday)
    {
        $this->workInHoliday = $workInHoliday;
    }
}
