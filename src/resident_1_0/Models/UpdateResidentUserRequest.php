<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vresident_1_0\Models;

use AlibabaCloud\SDK\Dingtalk\Vresident_1_0\Models\UpdateResidentUserRequest\extField;
use AlibabaCloud\Tea\Model;

class UpdateResidentUserRequest extends Model
{
    /**
     * @description 家庭住址
     *
     * @var string
     */
    public $address;

    /**
     * @description 是否保留原部门
     *
     * @var bool
     */
    public $isRetainOldDept;

    /**
     * @description 居民名字
     *
     * @var string
     */
    public $userName;

    /**
     * @description 手机号码
     *
     * @var string
     */
    public $mobile;

    /**
     * @description 所在新的户/租户部门id
     *
     * @var int
     */
    public $departmentId;

    /**
     * @description 扩展字段（包括身份证/性别/民族）
     *
     * @var extField[]
     */
    public $extField;

    /**
     * @description 与户主的关系
     *
     * @var string
     */
    public $relateType;

    /**
     * @description 人员userId
     *
     * @var string
     */
    public $userId;

    /**
     * @description 原所在部门id
     *
     * @var int
     */
    public $oldDepartmentId;
    protected $_name = [
        'address'         => 'address',
        'isRetainOldDept' => 'isRetainOldDept',
        'userName'        => 'userName',
        'mobile'          => 'mobile',
        'departmentId'    => 'departmentId',
        'extField'        => 'extField',
        'relateType'      => 'relateType',
        'userId'          => 'userId',
        'oldDepartmentId' => 'oldDepartmentId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['address'] = $this->address;
        }
        if (null !== $this->isRetainOldDept) {
            $res['isRetainOldDept'] = $this->isRetainOldDept;
        }
        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
        }
        if (null !== $this->mobile) {
            $res['mobile'] = $this->mobile;
        }
        if (null !== $this->departmentId) {
            $res['departmentId'] = $this->departmentId;
        }
        if (null !== $this->extField) {
            $res['extField'] = [];
            if (null !== $this->extField && \is_array($this->extField)) {
                $n = 0;
                foreach ($this->extField as $item) {
                    $res['extField'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->relateType) {
            $res['relateType'] = $this->relateType;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        if (null !== $this->oldDepartmentId) {
            $res['oldDepartmentId'] = $this->oldDepartmentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateResidentUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['address'])) {
            $model->address = $map['address'];
        }
        if (isset($map['isRetainOldDept'])) {
            $model->isRetainOldDept = $map['isRetainOldDept'];
        }
        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }
        if (isset($map['mobile'])) {
            $model->mobile = $map['mobile'];
        }
        if (isset($map['departmentId'])) {
            $model->departmentId = $map['departmentId'];
        }
        if (isset($map['extField'])) {
            if (!empty($map['extField'])) {
                $model->extField = [];
                $n               = 0;
                foreach ($map['extField'] as $item) {
                    $model->extField[$n++] = null !== $item ? extField::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['relateType'])) {
            $model->relateType = $map['relateType'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }
        if (isset($map['oldDepartmentId'])) {
            $model->oldDepartmentId = $map['oldDepartmentId'];
        }

        return $model;
    }
}