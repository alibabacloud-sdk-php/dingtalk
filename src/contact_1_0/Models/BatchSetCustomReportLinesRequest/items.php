<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcontact_1_0\Models\BatchSetCustomReportLinesRequest;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $managerStaffId;

    /**
     * @var string[]
     */
    public $managerStaffIds;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $staffId;
    protected $_name = [
        'managerStaffId' => 'managerStaffId',
        'managerStaffIds' => 'managerStaffIds',
        'staffId' => 'staffId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->managerStaffId) {
            $res['managerStaffId'] = $this->managerStaffId;
        }
        if (null !== $this->managerStaffIds) {
            $res['managerStaffIds'] = $this->managerStaffIds;
        }
        if (null !== $this->staffId) {
            $res['staffId'] = $this->staffId;
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
        if (isset($map['managerStaffId'])) {
            $model->managerStaffId = $map['managerStaffId'];
        }
        if (isset($map['managerStaffIds'])) {
            if (!empty($map['managerStaffIds'])) {
                $model->managerStaffIds = $map['managerStaffIds'];
            }
        }
        if (isset($map['staffId'])) {
            $model->staffId = $map['staffId'];
        }

        return $model;
    }
}
