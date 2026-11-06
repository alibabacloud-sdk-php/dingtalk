<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcontact_1_0\Models\BatchSetVOrgVisibleConfigsRequest;

use AlibabaCloud\SDK\Dingtalk\Vcontact_1_0\Models\BatchSetVOrgVisibleConfigsRequest\items\visibleConfig;
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
    public $staffId;

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
        'fromStaffId' => 'fromStaffId',
        'staffId' => 'staffId',
        'vOrgNo' => 'vOrgNo',
        'visibleConfig' => 'visibleConfig',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fromStaffId) {
            $res['fromStaffId'] = $this->fromStaffId;
        }
        if (null !== $this->staffId) {
            $res['staffId'] = $this->staffId;
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
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fromStaffId'])) {
            $model->fromStaffId = $map['fromStaffId'];
        }
        if (isset($map['staffId'])) {
            $model->staffId = $map['staffId'];
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
