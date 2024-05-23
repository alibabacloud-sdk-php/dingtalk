<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcalendar_1_0\Models;

use AlibabaCloud\SDK\Dingtalk\Vcalendar_1_0\Models\CreateEventRequest\attendees;
use AlibabaCloud\SDK\Dingtalk\Vcalendar_1_0\Models\CreateEventRequest\cardInstances;
use AlibabaCloud\SDK\Dingtalk\Vcalendar_1_0\Models\CreateEventRequest\end;
use AlibabaCloud\SDK\Dingtalk\Vcalendar_1_0\Models\CreateEventRequest\location;
use AlibabaCloud\SDK\Dingtalk\Vcalendar_1_0\Models\CreateEventRequest\onlineMeetingInfo;
use AlibabaCloud\SDK\Dingtalk\Vcalendar_1_0\Models\CreateEventRequest\recurrence;
use AlibabaCloud\SDK\Dingtalk\Vcalendar_1_0\Models\CreateEventRequest\reminders;
use AlibabaCloud\SDK\Dingtalk\Vcalendar_1_0\Models\CreateEventRequest\richTextDescription;
use AlibabaCloud\SDK\Dingtalk\Vcalendar_1_0\Models\CreateEventRequest\start;
use AlibabaCloud\SDK\Dingtalk\Vcalendar_1_0\Models\CreateEventRequest\uiConfigs;
use AlibabaCloud\Tea\Model;

class CreateEventRequest extends Model
{
    /**
     * @var attendees[]
     */
    public $attendees;

    /**
     * @var cardInstances[]
     */
    public $cardInstances;

    /**
     * @var string
     */
    public $description;

    /**
     * @var end
     */
    public $end;

    /**
     * @var string[]
     */
    public $extra;

    /**
     * @var bool
     */
    public $isAllDay;

    /**
     * @var location
     */
    public $location;

    /**
     * @var onlineMeetingInfo
     */
    public $onlineMeetingInfo;

    /**
     * @var recurrence
     */
    public $recurrence;

    /**
     * @var reminders[]
     */
    public $reminders;

    /**
     * @var richTextDescription
     */
    public $richTextDescription;

    /**
     * @description This parameter is required.
     *
     * @var start
     */
    public $start;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $summary;

    /**
     * @var uiConfigs[]
     */
    public $uiConfigs;
    protected $_name = [
        'attendees'           => 'attendees',
        'cardInstances'       => 'cardInstances',
        'description'         => 'description',
        'end'                 => 'end',
        'extra'               => 'extra',
        'isAllDay'            => 'isAllDay',
        'location'            => 'location',
        'onlineMeetingInfo'   => 'onlineMeetingInfo',
        'recurrence'          => 'recurrence',
        'reminders'           => 'reminders',
        'richTextDescription' => 'richTextDescription',
        'start'               => 'start',
        'summary'             => 'summary',
        'uiConfigs'           => 'uiConfigs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attendees) {
            $res['attendees'] = [];
            if (null !== $this->attendees && \is_array($this->attendees)) {
                $n = 0;
                foreach ($this->attendees as $item) {
                    $res['attendees'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->cardInstances) {
            $res['cardInstances'] = [];
            if (null !== $this->cardInstances && \is_array($this->cardInstances)) {
                $n = 0;
                foreach ($this->cardInstances as $item) {
                    $res['cardInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->end) {
            $res['end'] = null !== $this->end ? $this->end->toMap() : null;
        }
        if (null !== $this->extra) {
            $res['extra'] = $this->extra;
        }
        if (null !== $this->isAllDay) {
            $res['isAllDay'] = $this->isAllDay;
        }
        if (null !== $this->location) {
            $res['location'] = null !== $this->location ? $this->location->toMap() : null;
        }
        if (null !== $this->onlineMeetingInfo) {
            $res['onlineMeetingInfo'] = null !== $this->onlineMeetingInfo ? $this->onlineMeetingInfo->toMap() : null;
        }
        if (null !== $this->recurrence) {
            $res['recurrence'] = null !== $this->recurrence ? $this->recurrence->toMap() : null;
        }
        if (null !== $this->reminders) {
            $res['reminders'] = [];
            if (null !== $this->reminders && \is_array($this->reminders)) {
                $n = 0;
                foreach ($this->reminders as $item) {
                    $res['reminders'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->richTextDescription) {
            $res['richTextDescription'] = null !== $this->richTextDescription ? $this->richTextDescription->toMap() : null;
        }
        if (null !== $this->start) {
            $res['start'] = null !== $this->start ? $this->start->toMap() : null;
        }
        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
        }
        if (null !== $this->uiConfigs) {
            $res['uiConfigs'] = [];
            if (null !== $this->uiConfigs && \is_array($this->uiConfigs)) {
                $n = 0;
                foreach ($this->uiConfigs as $item) {
                    $res['uiConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEventRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['attendees'])) {
            if (!empty($map['attendees'])) {
                $model->attendees = [];
                $n                = 0;
                foreach ($map['attendees'] as $item) {
                    $model->attendees[$n++] = null !== $item ? attendees::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['cardInstances'])) {
            if (!empty($map['cardInstances'])) {
                $model->cardInstances = [];
                $n                    = 0;
                foreach ($map['cardInstances'] as $item) {
                    $model->cardInstances[$n++] = null !== $item ? cardInstances::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['end'])) {
            $model->end = end::fromMap($map['end']);
        }
        if (isset($map['extra'])) {
            $model->extra = $map['extra'];
        }
        if (isset($map['isAllDay'])) {
            $model->isAllDay = $map['isAllDay'];
        }
        if (isset($map['location'])) {
            $model->location = location::fromMap($map['location']);
        }
        if (isset($map['onlineMeetingInfo'])) {
            $model->onlineMeetingInfo = onlineMeetingInfo::fromMap($map['onlineMeetingInfo']);
        }
        if (isset($map['recurrence'])) {
            $model->recurrence = recurrence::fromMap($map['recurrence']);
        }
        if (isset($map['reminders'])) {
            if (!empty($map['reminders'])) {
                $model->reminders = [];
                $n                = 0;
                foreach ($map['reminders'] as $item) {
                    $model->reminders[$n++] = null !== $item ? reminders::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['richTextDescription'])) {
            $model->richTextDescription = richTextDescription::fromMap($map['richTextDescription']);
        }
        if (isset($map['start'])) {
            $model->start = start::fromMap($map['start']);
        }
        if (isset($map['summary'])) {
            $model->summary = $map['summary'];
        }
        if (isset($map['uiConfigs'])) {
            if (!empty($map['uiConfigs'])) {
                $model->uiConfigs = [];
                $n                = 0;
                foreach ($map['uiConfigs'] as $item) {
                    $model->uiConfigs[$n++] = null !== $item ? uiConfigs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
