<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vai_paa_s_1_0\Models;

use AlibabaCloud\SDK\Dingtalk\Vai_paa_s_1_0\Models\LiandanluTextToImageModelResponseBody\result;
use AlibabaCloud\Tea\Model;

class LiandanluTextToImageModelResponseBody extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var result
     */
    public $result;

    /**
     * @description This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'result' => 'result',
        'success' => 'success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->result) {
            $res['result'] = null !== $this->result ? $this->result->toMap() : null;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LiandanluTextToImageModelResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['result'])) {
            $model->result = result::fromMap($map['result']);
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
