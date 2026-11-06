<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcontact_1_0\Models\BatchSetVOrgVisibleConfigsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var string
     */
    public $fromStaffId;

    /**
     * @var string
     */
    public $staffId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $vOrgNo;
    protected $_name = [
        'errorCode' => 'errorCode',
        'errorMsg' => 'errorMsg',
        'fromStaffId' => 'fromStaffId',
        'staffId' => 'staffId',
        'success' => 'success',
        'vOrgNo' => 'vOrgNo',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
        }
        if (null !== $this->fromStaffId) {
            $res['fromStaffId'] = $this->fromStaffId;
        }
        if (null !== $this->staffId) {
            $res['staffId'] = $this->staffId;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->vOrgNo) {
            $res['vOrgNo'] = $this->vOrgNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }
        if (isset($map['fromStaffId'])) {
            $model->fromStaffId = $map['fromStaffId'];
        }
        if (isset($map['staffId'])) {
            $model->staffId = $map['staffId'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['vOrgNo'])) {
            $model->vOrgNo = $map['vOrgNo'];
        }

        return $model;
    }
}
