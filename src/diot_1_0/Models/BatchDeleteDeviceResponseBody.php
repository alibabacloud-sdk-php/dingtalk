<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdiot_1_0\Models;

use AlibabaCloud\Tea\Model;

class BatchDeleteDeviceResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $deviceIds;
    protected $_name = [
        'deviceIds' => 'deviceIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceIds) {
            $res['deviceIds'] = $this->deviceIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchDeleteDeviceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['deviceIds'])) {
            if (!empty($map['deviceIds'])) {
                $model->deviceIds = $map['deviceIds'];
            }
        }

        return $model;
    }
}
