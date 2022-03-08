<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcrm_1_0\Models;

use AlibabaCloud\Tea\Model;

class ListCrmPersonalCustomersRequest extends Model
{
    /**
     * @description 数据客户列表
     *
     * @var string[]
     */
    public $body;

    /**
     * @description 操作人用户ID
     *
     * @var string
     */
    public $currentOperatorUserId;
    protected $_name = [
        'body'                  => 'body',
        'currentOperatorUserId' => 'currentOperatorUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }
        if (null !== $this->currentOperatorUserId) {
            $res['currentOperatorUserId'] = $this->currentOperatorUserId;
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
        if (isset($map['body'])) {
            if (!empty($map['body'])) {
                $model->body = $map['body'];
            }
        }
        if (isset($map['currentOperatorUserId'])) {
            $model->currentOperatorUserId = $map['currentOperatorUserId'];
        }

        return $model;
    }
}
