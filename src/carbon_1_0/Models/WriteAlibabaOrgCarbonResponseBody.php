<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcarbon_1_0\Models;

use AlibabaCloud\Tea\Model;

class WriteAlibabaOrgCarbonResponseBody extends Model
{
    /**
     * @description 请求是否成功
     *
     * @var bool
     */
    public $success;

    /**
     * @description 返回请求成功的数量
     *
     * @var int
     */
    public $result;
    protected $_name = [
        'success' => 'success',
        'result'  => 'result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WriteAlibabaOrgCarbonResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['result'])) {
            $model->result = $map['result'];
        }

        return $model;
    }
}