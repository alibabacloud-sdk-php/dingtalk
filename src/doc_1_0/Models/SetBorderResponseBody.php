<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdoc_1_0\Models;

use AlibabaCloud\Tea\Model;

class SetBorderResponseBody extends Model
{
    /**
     * @var mixed
     */
    public $data;
    protected $_name = [
        'data' => 'data',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetBorderResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['data'])) {
            $model->data = $map['data'];
        }

        return $model;
    }
}
