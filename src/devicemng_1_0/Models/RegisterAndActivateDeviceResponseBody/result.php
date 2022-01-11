<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdevicemng_1_0\Models\RegisterAndActivateDeviceResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $deviceCode;

    /**
     * @var string
     */
    public $deviceUuid;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $introduction;

    /**
     * @var string
     */
    public $typeUuid;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $roleUuid;

    /**
     * @var string
     */
    public $deviceDetailUrl;

    /**
     * @var string[]
     */
    public $userIds;
    protected $_name = [
        'deviceCode'      => 'deviceCode',
        'deviceUuid'      => 'deviceUuid',
        'deviceName'      => 'deviceName',
        'introduction'    => 'introduction',
        'typeUuid'        => 'typeUuid',
        'corpId'          => 'corpId',
        'roleUuid'        => 'roleUuid',
        'deviceDetailUrl' => 'deviceDetailUrl',
        'userIds'         => 'userIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceCode) {
            $res['deviceCode'] = $this->deviceCode;
        }
        if (null !== $this->deviceUuid) {
            $res['deviceUuid'] = $this->deviceUuid;
        }
        if (null !== $this->deviceName) {
            $res['deviceName'] = $this->deviceName;
        }
        if (null !== $this->introduction) {
            $res['introduction'] = $this->introduction;
        }
        if (null !== $this->typeUuid) {
            $res['typeUuid'] = $this->typeUuid;
        }
        if (null !== $this->corpId) {
            $res['corpId'] = $this->corpId;
        }
        if (null !== $this->roleUuid) {
            $res['roleUuid'] = $this->roleUuid;
        }
        if (null !== $this->deviceDetailUrl) {
            $res['deviceDetailUrl'] = $this->deviceDetailUrl;
        }
        if (null !== $this->userIds) {
            $res['userIds'] = $this->userIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['deviceCode'])) {
            $model->deviceCode = $map['deviceCode'];
        }
        if (isset($map['deviceUuid'])) {
            $model->deviceUuid = $map['deviceUuid'];
        }
        if (isset($map['deviceName'])) {
            $model->deviceName = $map['deviceName'];
        }
        if (isset($map['introduction'])) {
            $model->introduction = $map['introduction'];
        }
        if (isset($map['typeUuid'])) {
            $model->typeUuid = $map['typeUuid'];
        }
        if (isset($map['corpId'])) {
            $model->corpId = $map['corpId'];
        }
        if (isset($map['roleUuid'])) {
            $model->roleUuid = $map['roleUuid'];
        }
        if (isset($map['deviceDetailUrl'])) {
            $model->deviceDetailUrl = $map['deviceDetailUrl'];
        }
        if (isset($map['userIds'])) {
            if (!empty($map['userIds'])) {
                $model->userIds = $map['userIds'];
            }
        }

        return $model;
    }
}