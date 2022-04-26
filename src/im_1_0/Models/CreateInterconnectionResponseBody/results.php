<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vim_1_0\Models\CreateInterconnectionResponseBody;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @description 客户业务身份唯一标识
     *
     * @var string
     */
    public $appUserId;

    /**
     * @description 客服钉钉Id
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'appUserId' => 'appUserId',
        'userId'    => 'userId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appUserId) {
            $res['appUserId'] = $this->appUserId;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appUserId'])) {
            $model->appUserId = $map['appUserId'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}