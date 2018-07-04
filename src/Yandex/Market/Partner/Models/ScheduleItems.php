<?php

namespace Yandex\Market\Partner\Models;

use Yandex\Common\ObjectModel;

class ScheduleItems extends ObjectModel
{

    protected $collection = [];

    protected $mappingClasses = [];

    protected $propNameMap = [];

    /**
     * Add item
     */
    public function add($scheduleItem)
    {
        if (is_array($scheduleItem)) {
            $this->collection[] = new ScheduleItem($scheduleItem);
        } elseif (is_object($scheduleItem) && $scheduleItem instanceof ScheduleItem) {
            $this->collection[] = $scheduleItem;
        }

        return $this;
    }

    /**
     * Get items
     */
    public function getAll()
    {
        return $this->collection;
    }
}
