<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdvi_1_0\Models\ListKanjianDevicesResponseBody\result;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example manager1234
     *
     * @var string
     */
    public $bindUserId;

    /**
     * @example store-front
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example BV0000000001
     *
     * @var string
     */
    public $deviceSn;
    protected $_name = [
        'bindUserId' => 'bindUserId',
        'deviceName' => 'deviceName',
        'deviceSn' => 'deviceSn',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindUserId) {
            $res['bindUserId'] = $this->bindUserId;
        }
        if (null !== $this->deviceName) {
            $res['deviceName'] = $this->deviceName;
        }
        if (null !== $this->deviceSn) {
            $res['deviceSn'] = $this->deviceSn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bindUserId'])) {
            $model->bindUserId = $map['bindUserId'];
        }
        if (isset($map['deviceName'])) {
            $model->deviceName = $map['deviceName'];
        }
        if (isset($map['deviceSn'])) {
            $model->deviceSn = $map['deviceSn'];
        }

        return $model;
    }
}
