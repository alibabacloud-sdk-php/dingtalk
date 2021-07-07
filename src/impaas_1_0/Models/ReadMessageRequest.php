<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vimpaas_1_0\Models;

use AlibabaCloud\Tea\Model;

class ReadMessageRequest extends Model
{
    /**
     * @var string
     */
    public $operatorUid;

    /**
     * @var string
     */
    public $messageId;
    protected $_name = [
        'operatorUid' => 'operatorUid',
        'messageId'   => 'messageId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operatorUid) {
            $res['operatorUid'] = $this->operatorUid;
        }
        if (null !== $this->messageId) {
            $res['messageId'] = $this->messageId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReadMessageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['operatorUid'])) {
            $model->operatorUid = $map['operatorUid'];
        }
        if (isset($map['messageId'])) {
            $model->messageId = $map['messageId'];
        }

        return $model;
    }
}
