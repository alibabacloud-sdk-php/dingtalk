<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcalendar_1_0\Models;

use AlibabaCloud\SDK\Dingtalk\Vcalendar_1_0\Models\PatchEventRequest\attendees;
use AlibabaCloud\SDK\Dingtalk\Vcalendar_1_0\Models\PatchEventRequest\end;
use AlibabaCloud\SDK\Dingtalk\Vcalendar_1_0\Models\PatchEventRequest\location;
use AlibabaCloud\SDK\Dingtalk\Vcalendar_1_0\Models\PatchEventRequest\recurrence;
use AlibabaCloud\SDK\Dingtalk\Vcalendar_1_0\Models\PatchEventRequest\start;
use AlibabaCloud\Tea\Model;

class PatchEventRequest extends Model
{
    /**
     * @description 日程标题
     *
     * @var string
     */
    public $summary;

    /**
     * @description 日程id
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $description;

    /**
     * @description 日程开始时间
     *
     * @var start
     */
    public $start;

    /**
     * @var end
     */
    public $end;

    /**
     * @var bool
     */
    public $isAllDay;

    /**
     * @var recurrence
     */
    public $recurrence;

    /**
     * @var attendees[]
     */
    public $attendees;

    /**
     * @var location
     */
    public $location;

    /**
     * @description 扩展信息
     *
     * @var string[]
     */
    public $extra;
    protected $_name = [
        'summary'     => 'summary',
        'id'          => 'id',
        'description' => 'description',
        'start'       => 'start',
        'end'         => 'end',
        'isAllDay'    => 'isAllDay',
        'recurrence'  => 'recurrence',
        'attendees'   => 'attendees',
        'location'    => 'location',
        'extra'       => 'extra',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->start) {
            $res['start'] = null !== $this->start ? $this->start->toMap() : null;
        }
        if (null !== $this->end) {
            $res['end'] = null !== $this->end ? $this->end->toMap() : null;
        }
        if (null !== $this->isAllDay) {
            $res['isAllDay'] = $this->isAllDay;
        }
        if (null !== $this->recurrence) {
            $res['recurrence'] = null !== $this->recurrence ? $this->recurrence->toMap() : null;
        }
        if (null !== $this->attendees) {
            $res['attendees'] = [];
            if (null !== $this->attendees && \is_array($this->attendees)) {
                $n = 0;
                foreach ($this->attendees as $item) {
                    $res['attendees'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->location) {
            $res['location'] = null !== $this->location ? $this->location->toMap() : null;
        }
        if (null !== $this->extra) {
            $res['extra'] = $this->extra;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PatchEventRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['summary'])) {
            $model->summary = $map['summary'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['start'])) {
            $model->start = start::fromMap($map['start']);
        }
        if (isset($map['end'])) {
            $model->end = end::fromMap($map['end']);
        }
        if (isset($map['isAllDay'])) {
            $model->isAllDay = $map['isAllDay'];
        }
        if (isset($map['recurrence'])) {
            $model->recurrence = recurrence::fromMap($map['recurrence']);
        }
        if (isset($map['attendees'])) {
            if (!empty($map['attendees'])) {
                $model->attendees = [];
                $n                = 0;
                foreach ($map['attendees'] as $item) {
                    $model->attendees[$n++] = null !== $item ? attendees::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['location'])) {
            $model->location = location::fromMap($map['location']);
        }
        if (isset($map['extra'])) {
            $model->extra = $map['extra'];
        }

        return $model;
    }
}
