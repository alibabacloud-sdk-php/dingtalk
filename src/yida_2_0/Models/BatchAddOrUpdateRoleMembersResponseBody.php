<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vyida_2_0\Models;

use AlibabaCloud\Tea\Model;

class BatchAddOrUpdateRoleMembersResponseBody extends Model
{
    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'success' => 'success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchAddOrUpdateRoleMembersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
