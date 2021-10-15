<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdevicemng_1_0\Models;

use AlibabaCloud\Tea\Model;

class RegisterDeviceRequest extends Model
{
    /**
     * @description 组织id
     *
     * @var string
     */
    public $dingCorpId;

    /**
     * @description 设备标识
     *
     * @var string
     */
    public $deviceKey;

    /**
     * @description 设备名称
     *
     * @var string
     */
    public $deviceName;

    /**
     * @description 部门id
     *
     * @var int
     */
    public $departmentId;

    /**
     * @description 管理员userId列表
     *
     * @var string
     */
    public $managers;

    /**
     * @description 协助者userId列表
     *
     * @var string
     */
    public $collaborators;

    /**
     * @description 设备描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 创建者userId
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'dingCorpId'    => 'dingCorpId',
        'deviceKey'     => 'deviceKey',
        'deviceName'    => 'deviceName',
        'departmentId'  => 'departmentId',
        'managers'      => 'managers',
        'collaborators' => 'collaborators',
        'description'   => 'description',
        'userId'        => 'userId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dingCorpId) {
            $res['dingCorpId'] = $this->dingCorpId;
        }
        if (null !== $this->deviceKey) {
            $res['deviceKey'] = $this->deviceKey;
        }
        if (null !== $this->deviceName) {
            $res['deviceName'] = $this->deviceName;
        }
        if (null !== $this->departmentId) {
            $res['departmentId'] = $this->departmentId;
        }
        if (null !== $this->managers) {
            $res['managers'] = $this->managers;
        }
        if (null !== $this->collaborators) {
            $res['collaborators'] = $this->collaborators;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dingCorpId'])) {
            $model->dingCorpId = $map['dingCorpId'];
        }
        if (isset($map['deviceKey'])) {
            $model->deviceKey = $map['deviceKey'];
        }
        if (isset($map['deviceName'])) {
            $model->deviceName = $map['deviceName'];
        }
        if (isset($map['departmentId'])) {
            $model->departmentId = $map['departmentId'];
        }
        if (isset($map['managers'])) {
            $model->managers = $map['managers'];
        }
        if (isset($map['collaborators'])) {
            $model->collaborators = $map['collaborators'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}