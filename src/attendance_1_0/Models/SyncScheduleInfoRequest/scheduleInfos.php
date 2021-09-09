<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vattendance_1_0\Models\SyncScheduleInfoRequest;

use AlibabaCloud\Tea\Model;

class scheduleInfos extends Model
{
    /**
     * @var int
     */
    public $planId;

    /**
     * @var string[]
     */
    public $wifiKeys;

    /**
     * @var string[]
     */
    public $positionKeys;
    protected $_name = [
        'planId'       => 'planId',
        'wifiKeys'     => 'wifiKeys',
        'positionKeys' => 'positionKeys',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->planId) {
            $res['planId'] = $this->planId;
        }
        if (null !== $this->wifiKeys) {
            $res['wifiKeys'] = $this->wifiKeys;
        }
        if (null !== $this->positionKeys) {
            $res['positionKeys'] = $this->positionKeys;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scheduleInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['planId'])) {
            $model->planId = $map['planId'];
        }
        if (isset($map['wifiKeys'])) {
            if (!empty($map['wifiKeys'])) {
                $model->wifiKeys = $map['wifiKeys'];
            }
        }
        if (isset($map['positionKeys'])) {
            if (!empty($map['positionKeys'])) {
                $model->positionKeys = $map['positionKeys'];
            }
        }

        return $model;
    }
}