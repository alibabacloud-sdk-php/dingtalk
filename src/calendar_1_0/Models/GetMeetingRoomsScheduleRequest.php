<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcalendar_1_0\Models;

use AlibabaCloud\Tea\Model;

class GetMeetingRoomsScheduleRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * Use the UTC time format: yyyy-MM-ddTHH:mmZ
     *
     * @var string
     */
    public $endTime;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $roomIds;

    /**
     * @description This parameter is required.
     *
     * Use the UTC time format: yyyy-MM-ddTHH:mmZ
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'endTime',
        'roomIds' => 'roomIds',
        'startTime' => 'startTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->roomIds) {
            $res['roomIds'] = $this->roomIds;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMeetingRoomsScheduleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['roomIds'])) {
            if (!empty($map['roomIds'])) {
                $model->roomIds = $map['roomIds'];
            }
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
