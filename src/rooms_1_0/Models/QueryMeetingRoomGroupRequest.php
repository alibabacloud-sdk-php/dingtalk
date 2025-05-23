<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vrooms_1_0\Models;

use AlibabaCloud\Tea\Model;

class QueryMeetingRoomGroupRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 2iPOLbpUNMLzB5LuwggiiqiPwiEiE
     *
     * @var string
     */
    public $unionId;
    protected $_name = [
        'unionId' => 'unionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->unionId) {
            $res['unionId'] = $this->unionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMeetingRoomGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['unionId'])) {
            $model->unionId = $map['unionId'];
        }

        return $model;
    }
}
