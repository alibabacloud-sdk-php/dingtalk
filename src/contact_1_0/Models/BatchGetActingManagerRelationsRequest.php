<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcontact_1_0\Models;

use AlibabaCloud\Tea\Model;

class BatchGetActingManagerRelationsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $staffIds;
    protected $_name = [
        'staffIds' => 'staffIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->staffIds) {
            $res['staffIds'] = $this->staffIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchGetActingManagerRelationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['staffIds'])) {
            if (!empty($map['staffIds'])) {
                $model->staffIds = $map['staffIds'];
            }
        }

        return $model;
    }
}
