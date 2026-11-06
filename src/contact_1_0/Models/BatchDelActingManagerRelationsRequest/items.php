<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcontact_1_0\Models\BatchDelActingManagerRelationsRequest;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $fromStaffId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $toStaffId;
    protected $_name = [
        'fromStaffId' => 'fromStaffId',
        'toStaffId' => 'toStaffId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fromStaffId) {
            $res['fromStaffId'] = $this->fromStaffId;
        }
        if (null !== $this->toStaffId) {
            $res['toStaffId'] = $this->toStaffId;
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
        if (isset($map['fromStaffId'])) {
            $model->fromStaffId = $map['fromStaffId'];
        }
        if (isset($map['toStaffId'])) {
            $model->toStaffId = $map['toStaffId'];
        }

        return $model;
    }
}
