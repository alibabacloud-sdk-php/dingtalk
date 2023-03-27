<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vchengfeng_1_0\Models\GetStaffInfoByWorkNoResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description 部门编码
     *
     * @var string
     */
    public $deptCode;

    /**
     * @description 部门名称
     *
     * @var string
     */
    public $deptName;

    /**
     * @description 邮箱
     *
     * @var string
     */
    public $email;

    /**
     * @description 员工类型
     *
     * @var string
     */
    public $employType;

    /**
     * @description 员工状态
     *
     * @var string
     */
    public $employeeStatus;

    /**
     * @description 职级
     *
     * @var string
     */
    public $jobLevelName;

    /**
     * @description 职位编码
     *
     * @var string
     */
    public $jobPositionCode;

    /**
     * @description 职位名称
     *
     * @var string
     */
    public $jobPositionName;

    /**
     * @description 职务编码
     *
     * @var string
     */
    public $jobPostCode;

    /**
     * @description 职务名称
     *
     * @var string
     */
    public $jobPostName;

    /**
     * @description 手机号
     *
     * @var string
     */
    public $mobile;

    /**
     * @description 姓名
     *
     * @var string
     */
    public $name;

    /**
     * @description 花名
     *
     * @var string
     */
    public $nickName;

    /**
     * @description 工号
     *
     * @var string
     */
    public $workNumbers;
    protected $_name = [
        'deptCode'        => 'deptCode',
        'deptName'        => 'deptName',
        'email'           => 'email',
        'employType'      => 'employType',
        'employeeStatus'  => 'employeeStatus',
        'jobLevelName'    => 'jobLevelName',
        'jobPositionCode' => 'jobPositionCode',
        'jobPositionName' => 'jobPositionName',
        'jobPostCode'     => 'jobPostCode',
        'jobPostName'     => 'jobPostName',
        'mobile'          => 'mobile',
        'name'            => 'name',
        'nickName'        => 'nickName',
        'workNumbers'     => 'workNumbers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deptCode) {
            $res['deptCode'] = $this->deptCode;
        }
        if (null !== $this->deptName) {
            $res['deptName'] = $this->deptName;
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->employType) {
            $res['employType'] = $this->employType;
        }
        if (null !== $this->employeeStatus) {
            $res['employeeStatus'] = $this->employeeStatus;
        }
        if (null !== $this->jobLevelName) {
            $res['jobLevelName'] = $this->jobLevelName;
        }
        if (null !== $this->jobPositionCode) {
            $res['jobPositionCode'] = $this->jobPositionCode;
        }
        if (null !== $this->jobPositionName) {
            $res['jobPositionName'] = $this->jobPositionName;
        }
        if (null !== $this->jobPostCode) {
            $res['jobPostCode'] = $this->jobPostCode;
        }
        if (null !== $this->jobPostName) {
            $res['jobPostName'] = $this->jobPostName;
        }
        if (null !== $this->mobile) {
            $res['mobile'] = $this->mobile;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->nickName) {
            $res['nickName'] = $this->nickName;
        }
        if (null !== $this->workNumbers) {
            $res['workNumbers'] = $this->workNumbers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['deptCode'])) {
            $model->deptCode = $map['deptCode'];
        }
        if (isset($map['deptName'])) {
            $model->deptName = $map['deptName'];
        }
        if (isset($map['email'])) {
            $model->email = $map['email'];
        }
        if (isset($map['employType'])) {
            $model->employType = $map['employType'];
        }
        if (isset($map['employeeStatus'])) {
            $model->employeeStatus = $map['employeeStatus'];
        }
        if (isset($map['jobLevelName'])) {
            $model->jobLevelName = $map['jobLevelName'];
        }
        if (isset($map['jobPositionCode'])) {
            $model->jobPositionCode = $map['jobPositionCode'];
        }
        if (isset($map['jobPositionName'])) {
            $model->jobPositionName = $map['jobPositionName'];
        }
        if (isset($map['jobPostCode'])) {
            $model->jobPostCode = $map['jobPostCode'];
        }
        if (isset($map['jobPostName'])) {
            $model->jobPostName = $map['jobPostName'];
        }
        if (isset($map['mobile'])) {
            $model->mobile = $map['mobile'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['nickName'])) {
            $model->nickName = $map['nickName'];
        }
        if (isset($map['workNumbers'])) {
            $model->workNumbers = $map['workNumbers'];
        }

        return $model;
    }
}
