<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vedu_1_0\Models;

use AlibabaCloud\Tea\Model;

class OrderInfoRequest extends Model
{
    /**
     * @example 80930501630545566xx
     *
     * @var string
     */
    public $orderNo;
    protected $_name = [
        'orderNo' => 'orderNo',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderNo) {
            $res['orderNo'] = $this->orderNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OrderInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['orderNo'])) {
            $model->orderNo = $map['orderNo'];
        }

        return $model;
    }
}
