<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcontract_1_0\Models\EsignSyncEventResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 外部服务异常
     *
     * @var string
     */
    public $message;
    protected $_name = [
        'message' => 'message',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['message'] = $this->message;
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
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        return $model;
    }
}
