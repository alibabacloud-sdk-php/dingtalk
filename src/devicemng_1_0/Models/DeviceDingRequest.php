<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdevicemng_1_0\Models;

use AlibabaCloud\Tea\Model;

class DeviceDingRequest extends Model
{
    /**
     * @description 钉钉组织id
     *
     * @var string
     */
    public $dingCorpId;

    /**
     * @description 消息体动态参数
     *
     * @var string
     */
    public $paramsJson;

    /**
     * @description 设备标识
     *
     * @var string
     */
    public $deviceKey;

    /**
     * @description staffId列表
     *
     * @var string[]
     */
    public $receiverUserIdList;
    protected $_name = [
        'dingCorpId'         => 'dingCorpId',
        'paramsJson'         => 'paramsJson',
        'deviceKey'          => 'deviceKey',
        'receiverUserIdList' => 'receiverUserIdList',
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
        if (null !== $this->paramsJson) {
            $res['paramsJson'] = $this->paramsJson;
        }
        if (null !== $this->deviceKey) {
            $res['deviceKey'] = $this->deviceKey;
        }
        if (null !== $this->receiverUserIdList) {
            $res['receiverUserIdList'] = $this->receiverUserIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeviceDingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dingCorpId'])) {
            $model->dingCorpId = $map['dingCorpId'];
        }
        if (isset($map['paramsJson'])) {
            $model->paramsJson = $map['paramsJson'];
        }
        if (isset($map['deviceKey'])) {
            $model->deviceKey = $map['deviceKey'];
        }
        if (isset($map['receiverUserIdList'])) {
            if (!empty($map['receiverUserIdList'])) {
                $model->receiverUserIdList = $map['receiverUserIdList'];
            }
        }

        return $model;
    }
}