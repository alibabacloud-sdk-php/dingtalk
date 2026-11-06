<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdvi_1_0\Models;

use AlibabaCloud\Tea\Model;

class GetKanjianDeviceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example BV0000000001
     *
     * @var string
     */
    public $deviceSn;
    protected $_name = [
        'deviceSn' => 'deviceSn',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceSn) {
            $res['deviceSn'] = $this->deviceSn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetKanjianDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['deviceSn'])) {
            $model->deviceSn = $map['deviceSn'];
        }

        return $model;
    }
}
