<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcrm_1_0\Models;

use AlibabaCloud\Tea\Model;

class ListCrmPersonalCustomersRequest extends Model
{
    /**
     * @description 操作人用户ID
     *
     * @var string
     */
    public $currentOperatorUserId;

    /**
     * @description 数据客户列表
     *
     * @var string[]
     */
    public $body;
    protected $_name = [
        'currentOperatorUserId' => 'currentOperatorUserId',
        'body'                  => 'body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentOperatorUserId) {
            $res['currentOperatorUserId'] = $this->currentOperatorUserId;
        }
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCrmPersonalCustomersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['currentOperatorUserId'])) {
            $model->currentOperatorUserId = $map['currentOperatorUserId'];
        }
        if (isset($map['body'])) {
            if (!empty($map['body'])) {
                $model->body = $map['body'];
            }
        }

        return $model;
    }
}
