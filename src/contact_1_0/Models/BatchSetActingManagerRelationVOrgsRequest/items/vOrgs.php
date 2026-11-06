<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcontact_1_0\Models\BatchSetActingManagerRelationVOrgsRequest\items;

use AlibabaCloud\SDK\Dingtalk\Vcontact_1_0\Models\BatchSetActingManagerRelationVOrgsRequest\items\vOrgs\visibleConfig;
use AlibabaCloud\Tea\Model;

class vOrgs extends Model
{
    /**
     * @var bool
     */
    public $fullChain;

    /**
     * @var string
     */
    public $fullDeptName;

    /**
     * @var string[]
     */
    public $managerStaffIds;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $vOrgNo;

    /**
     * @var visibleConfig
     */
    public $visibleConfig;
    protected $_name = [
        'fullChain' => 'fullChain',
        'fullDeptName' => 'fullDeptName',
        'managerStaffIds' => 'managerStaffIds',
        'vOrgNo' => 'vOrgNo',
        'visibleConfig' => 'visibleConfig',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fullChain) {
            $res['fullChain'] = $this->fullChain;
        }
        if (null !== $this->fullDeptName) {
            $res['fullDeptName'] = $this->fullDeptName;
        }
        if (null !== $this->managerStaffIds) {
            $res['managerStaffIds'] = $this->managerStaffIds;
        }
        if (null !== $this->vOrgNo) {
            $res['vOrgNo'] = $this->vOrgNo;
        }
        if (null !== $this->visibleConfig) {
            $res['visibleConfig'] = null !== $this->visibleConfig ? $this->visibleConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vOrgs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fullChain'])) {
            $model->fullChain = $map['fullChain'];
        }
        if (isset($map['fullDeptName'])) {
            $model->fullDeptName = $map['fullDeptName'];
        }
        if (isset($map['managerStaffIds'])) {
            if (!empty($map['managerStaffIds'])) {
                $model->managerStaffIds = $map['managerStaffIds'];
            }
        }
        if (isset($map['vOrgNo'])) {
            $model->vOrgNo = $map['vOrgNo'];
        }
        if (isset($map['visibleConfig'])) {
            $model->visibleConfig = visibleConfig::fromMap($map['visibleConfig']);
        }

        return $model;
    }
}
