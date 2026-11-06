<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdvi_1_0\Models;

use AlibabaCloud\Tea\Model;

class StopKanjianRecordingRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example manager1234
     *
     * @var string
     */
    public $operatorUserId;

    /**
     * @description This parameter is required.
     *
     * @example session0001
     *
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'operatorUserId' => 'operatorUserId',
        'sessionId' => 'sessionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->operatorUserId) {
            $res['operatorUserId'] = $this->operatorUserId;
        }
        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopKanjianRecordingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['operatorUserId'])) {
            $model->operatorUserId = $map['operatorUserId'];
        }
        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        return $model;
    }
}
