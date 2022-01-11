<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vworkflow_1_0\Models;

use AlibabaCloud\Tea\Model;

class QuerySchemaByProcessCodeRequest extends Model
{
    /**
     * @description 表单的唯一码
     *
     * @var string
     */
    public $processCode;
    protected $_name = [
        'processCode' => 'processCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->processCode) {
            $res['processCode'] = $this->processCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySchemaByProcessCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['processCode'])) {
            $model->processCode = $map['processCode'];
        }

        return $model;
    }
}