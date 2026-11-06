<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdvi_1_0\Models;

use AlibabaCloud\Tea\Model;

class BindKanjianRecordTaskRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example task0001
     *
     * @var string
     */
    public $mainTaskId;

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
     * @example record0001
     *
     * @var string
     */
    public $recordId;
    protected $_name = [
        'mainTaskId' => 'mainTaskId',
        'operatorUserId' => 'operatorUserId',
        'recordId' => 'recordId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->mainTaskId) {
            $res['mainTaskId'] = $this->mainTaskId;
        }
        if (null !== $this->operatorUserId) {
            $res['operatorUserId'] = $this->operatorUserId;
        }
        if (null !== $this->recordId) {
            $res['recordId'] = $this->recordId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindKanjianRecordTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['mainTaskId'])) {
            $model->mainTaskId = $map['mainTaskId'];
        }
        if (isset($map['operatorUserId'])) {
            $model->operatorUserId = $map['operatorUserId'];
        }
        if (isset($map['recordId'])) {
            $model->recordId = $map['recordId'];
        }

        return $model;
    }
}
