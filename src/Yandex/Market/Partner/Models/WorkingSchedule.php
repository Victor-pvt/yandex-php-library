<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 04.07.18
 * Time: 2:20
 */

namespace Yandex\Market\Partner\Models;


use Yandex\Common\Model;

class WorkingSchedule extends Model
{

    protected $mappingClasses = [
        'scheduleItems' => 'Yandex\Market\Partner\Models\ScheduleItems',
    ];

    protected $scheduleItems;

    protected $workInHoliday;

    /**
     * @return mixed
     */
    public function getScheduleItems()
    {
        return $this->scheduleItems;
    }

    /**
     * @param mixed $scheduleItems
     */
    public function setScheduleItems($scheduleItems)
    {
        $this->scheduleItems = $scheduleItems;
    }

    /**
     * @return mixed
     */
    public function getWorkInHoliday()
    {
        return $this->workInHoliday;
    }

    /**
     * @param mixed $workInHoliday
     */
    public function setWorkInHoliday($workInHoliday)
    {
        $this->workInHoliday = $workInHoliday;
    }

}