<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcontact_1_0\Models\ListSimpleByRoleBatchResponseBody\result;

use AlibabaCloud\SDK\Dingtalk\Vcontact_1_0\Models\ListSimpleByRoleBatchResponseBody\result\roleUserList\emp;
use AlibabaCloud\Tea\Model;

class roleUserList extends Model
{
    /**
     * @var emp
     */
    public $emp;

    /**
     * @var int
     */
    public $roleId;
    protected $_name = [
        'emp' => 'emp',
        'roleId' => 'roleId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->emp) {
            $res['emp'] = null !== $this->emp ? $this->emp->toMap() : null;
        }
        if (null !== $this->roleId) {
            $res['roleId'] = $this->roleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return roleUserList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['emp'])) {
            $model->emp = emp::fromMap($map['emp']);
        }
        if (isset($map['roleId'])) {
            $model->roleId = $map['roleId'];
        }

        return $model;
    }
}
