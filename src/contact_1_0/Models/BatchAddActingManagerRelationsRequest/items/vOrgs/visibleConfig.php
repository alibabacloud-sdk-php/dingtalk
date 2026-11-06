<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcontact_1_0\Models\BatchAddActingManagerRelationsRequest\items\vOrgs;

use AlibabaCloud\Tea\Model;

class visibleConfig extends Model
{
    /**
     * @var int[]
     */
    public $allowDeptIds;

    /**
     * @var string[]
     */
    public $allowStaffIds;

    /**
     * @var bool
     */
    public $selfVisible;
    protected $_name = [
        'allowDeptIds' => 'allowDeptIds',
        'allowStaffIds' => 'allowStaffIds',
        'selfVisible' => 'selfVisible',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowDeptIds) {
            $res['allowDeptIds'] = $this->allowDeptIds;
        }
        if (null !== $this->allowStaffIds) {
            $res['allowStaffIds'] = $this->allowStaffIds;
        }
        if (null !== $this->selfVisible) {
            $res['selfVisible'] = $this->selfVisible;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return visibleConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['allowDeptIds'])) {
            if (!empty($map['allowDeptIds'])) {
                $model->allowDeptIds = $map['allowDeptIds'];
            }
        }
        if (isset($map['allowStaffIds'])) {
            if (!empty($map['allowStaffIds'])) {
                $model->allowStaffIds = $map['allowStaffIds'];
            }
        }
        if (isset($map['selfVisible'])) {
            $model->selfVisible = $map['selfVisible'];
        }

        return $model;
    }
}
