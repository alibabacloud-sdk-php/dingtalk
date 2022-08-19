<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdoc_1_0\Models;

use AlibabaCloud\Tea\Model;

class CreateRangeProtectionRequest extends Model
{
    /**
     * @description 其它用户的权限
     *
     * @var string
     */
    public $otherUserPermission;

    /**
     * @description 操作人unionId
     *
     * @var string
     */
    public $operatorId;
    protected $_name = [
        'otherUserPermission' => 'otherUserPermission',
        'operatorId'          => 'operatorId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->otherUserPermission) {
            $res['otherUserPermission'] = $this->otherUserPermission;
        }
        if (null !== $this->operatorId) {
            $res['operatorId'] = $this->operatorId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRangeProtectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['otherUserPermission'])) {
            $model->otherUserPermission = $map['otherUserPermission'];
        }
        if (isset($map['operatorId'])) {
            $model->operatorId = $map['operatorId'];
        }

        return $model;
    }
}
