<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vedu_1_0\Models;

use AlibabaCloud\Tea\Model;

class QueryPurchaseInfoResponseBody extends Model
{
    /**
     * @description 组织id
     *
     * @var string
     */
    public $corpId;

    /**
     * @description 员工id
     *
     * @var string
     */
    public $userId;

    /**
     * @description 商户id
     *
     * @var string
     */
    public $merchantId;

    /**
     * @description 场景id
     *
     * @var int
     */
    public $scene;

    /**
     * @description 状态
     *
     * @var int
     */
    public $status;

    /**
     * @description 名字
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'corpId'     => 'corpId',
        'userId'     => 'userId',
        'merchantId' => 'merchantId',
        'scene'      => 'scene',
        'status'     => 'status',
        'name'       => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['corpId'] = $this->corpId;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        if (null !== $this->merchantId) {
            $res['merchantId'] = $this->merchantId;
        }
        if (null !== $this->scene) {
            $res['scene'] = $this->scene;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryPurchaseInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['corpId'])) {
            $model->corpId = $map['corpId'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }
        if (isset($map['merchantId'])) {
            $model->merchantId = $map['merchantId'];
        }
        if (isset($map['scene'])) {
            $model->scene = $map['scene'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}