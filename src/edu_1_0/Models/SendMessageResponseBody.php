<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vedu_1_0\Models;

use AlibabaCloud\Tea\Model;

class SendMessageResponseBody extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example success
     *
     * @var string
     */
    public $successInfo;
    protected $_name = [
        'successInfo' => 'successInfo',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->successInfo) {
            $res['successInfo'] = $this->successInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendMessageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['successInfo'])) {
            $model->successInfo = $map['successInfo'];
        }

        return $model;
    }
}
