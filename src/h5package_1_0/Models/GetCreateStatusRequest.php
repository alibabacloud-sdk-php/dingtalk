<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vh5package_1_0\Models;

use AlibabaCloud\Tea\Model;

class GetCreateStatusRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1663748308644pjpF
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'taskId' => 'taskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCreateStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
