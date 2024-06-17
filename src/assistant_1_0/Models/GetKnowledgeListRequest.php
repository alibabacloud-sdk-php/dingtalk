<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vassistant_1_0\Models;

use AlibabaCloud\Tea\Model;

class GetKnowledgeListRequest extends Model
{
    /**
     * @var string
     */
    public $assistantId;
    protected $_name = [
        'assistantId' => 'assistantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assistantId) {
            $res['assistantId'] = $this->assistantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetKnowledgeListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['assistantId'])) {
            $model->assistantId = $map['assistantId'];
        }

        return $model;
    }
}
