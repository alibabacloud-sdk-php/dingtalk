<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vedu_1_0\Models;

use AlibabaCloud\Tea\Model;

class EduFindUserRolesByUserIdResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $result;
    protected $_name = [
        'result' => 'result',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EduFindUserRolesByUserIdResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['result'])) {
            if (!empty($map['result'])) {
                $model->result = $map['result'];
            }
        }

        return $model;
    }
}
