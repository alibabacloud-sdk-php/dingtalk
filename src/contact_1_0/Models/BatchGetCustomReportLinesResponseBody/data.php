<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcontact_1_0\Models\BatchGetCustomReportLinesResponseBody;

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
    public $managerStaffId;

    /**
     * @var string[]
     */
    public $managerStaffIds;

    /**
     * @var string
     */
    public $staffId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode' => 'errorCode',
        'errorMsg' => 'errorMsg',
        'managerStaffId' => 'managerStaffId',
        'managerStaffIds' => 'managerStaffIds',
        'staffId' => 'staffId',
        'success' => 'success',
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
        if (null !== $this->managerStaffId) {
            $res['managerStaffId'] = $this->managerStaffId;
        }
        if (null !== $this->managerStaffIds) {
            $res['managerStaffIds'] = $this->managerStaffIds;
        }
        if (null !== $this->staffId) {
            $res['staffId'] = $this->staffId;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
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
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
