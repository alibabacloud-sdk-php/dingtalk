<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models;

use AlibabaCloud\Tea\Model;

class DeleteAssistantRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $assistantId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $operatorUnionId;
    protected $_name = [
        'assistantId' => 'assistantId',
        'operatorUnionId' => 'operatorUnionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->assistantId) {
            $res['assistantId'] = $this->assistantId;
        }
        if (null !== $this->operatorUnionId) {
            $res['operatorUnionId'] = $this->operatorUnionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAssistantRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['assistantId'])) {
            $model->assistantId = $map['assistantId'];
        }
        if (isset($map['operatorUnionId'])) {
            $model->operatorUnionId = $map['operatorUnionId'];
        }

        return $model;
    }
}
