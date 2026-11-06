<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcontact_1_0\Models;

use AlibabaCloud\Tea\Model;

class ListSimpleByRoleBatchRequest extends Model
{
    /**
     * @var int
     */
    public $offset;

    /**
     * @var string
     */
    public $permissionCode;

    /**
     * @description This parameter is required.
     *
     * @var int[]
     */
    public $roleIds;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'offset' => 'offset',
        'permissionCode' => 'permissionCode',
        'roleIds' => 'roleIds',
        'size' => 'size',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->offset) {
            $res['offset'] = $this->offset;
        }
        if (null !== $this->permissionCode) {
            $res['permissionCode'] = $this->permissionCode;
        }
        if (null !== $this->roleIds) {
            $res['roleIds'] = $this->roleIds;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSimpleByRoleBatchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['offset'])) {
            $model->offset = $map['offset'];
        }
        if (isset($map['permissionCode'])) {
            $model->permissionCode = $map['permissionCode'];
        }
        if (isset($map['roleIds'])) {
            if (!empty($map['roleIds'])) {
                $model->roleIds = $map['roleIds'];
            }
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
