<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vlink_1_0\Models;

use AlibabaCloud\Tea\Model;

class QueryUserFollowStatusRequest extends Model
{
    /**
     * @description 服务窗帐号ID，此ID可以通过服务窗帐号信息查询接口获取。
     *
     * @var string
     */
    public $accountId;

    /**
     * @description 待查询的服务窗关注者unionId。
     *
     * @var string
     */
    public $unionId;
    protected $_name = [
        'accountId' => 'accountId',
        'unionId'   => 'unionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }
        if (null !== $this->unionId) {
            $res['unionId'] = $this->unionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryUserFollowStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }
        if (isset($map['unionId'])) {
            $model->unionId = $map['unionId'];
        }

        return $model;
    }
}