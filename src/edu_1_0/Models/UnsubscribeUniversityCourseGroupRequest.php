<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vedu_1_0\Models;

use AlibabaCloud\Tea\Model;

class UnsubscribeUniversityCourseGroupRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example GSS10023
     *
     * @var string
     */
    public $courseGroupCode;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $studentUserIds;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $opUserId;
    protected $_name = [
        'courseGroupCode' => 'courseGroupCode',
        'studentUserIds' => 'studentUserIds',
        'opUserId' => 'opUserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->courseGroupCode) {
            $res['courseGroupCode'] = $this->courseGroupCode;
        }
        if (null !== $this->studentUserIds) {
            $res['studentUserIds'] = $this->studentUserIds;
        }
        if (null !== $this->opUserId) {
            $res['opUserId'] = $this->opUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnsubscribeUniversityCourseGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['courseGroupCode'])) {
            $model->courseGroupCode = $map['courseGroupCode'];
        }
        if (isset($map['studentUserIds'])) {
            if (!empty($map['studentUserIds'])) {
                $model->studentUserIds = $map['studentUserIds'];
            }
        }
        if (isset($map['opUserId'])) {
            $model->opUserId = $map['opUserId'];
        }

        return $model;
    }
}
