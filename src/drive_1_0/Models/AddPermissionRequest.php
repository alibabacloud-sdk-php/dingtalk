<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdrive_1_0\Models;

use AlibabaCloud\SDK\Dingtalk\Vdrive_1_0\Models\AddPermissionRequest\members;
use AlibabaCloud\Tea\Model;

class AddPermissionRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var members[]
     */
    public $members;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $role;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $unionId;
    protected $_name = [
        'members' => 'members',
        'role' => 'role',
        'unionId' => 'unionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->members) {
            $res['members'] = [];
            if (null !== $this->members && \is_array($this->members)) {
                $n = 0;
                foreach ($this->members as $item) {
                    $res['members'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->role) {
            $res['role'] = $this->role;
        }
        if (null !== $this->unionId) {
            $res['unionId'] = $this->unionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddPermissionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['members'])) {
            if (!empty($map['members'])) {
                $model->members = [];
                $n = 0;
                foreach ($map['members'] as $item) {
                    $model->members[$n++] = null !== $item ? members::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['role'])) {
            $model->role = $map['role'];
        }
        if (isset($map['unionId'])) {
            $model->unionId = $map['unionId'];
        }

        return $model;
    }
}
