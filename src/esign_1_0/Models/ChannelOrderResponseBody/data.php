<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vesign_1_0\Models\ChannelOrderResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $esignOrderId;
    protected $_name = [
        'esignOrderId' => 'esignOrderId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->esignOrderId) {
            $res['esignOrderId'] = $this->esignOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['esignOrderId'])) {
            $model->esignOrderId = $map['esignOrderId'];
        }

        return $model;
    }
}
