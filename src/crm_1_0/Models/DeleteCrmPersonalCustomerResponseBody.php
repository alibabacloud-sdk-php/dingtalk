<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcrm_1_0\Models;

use AlibabaCloud\Tea\Model;

class DeleteCrmPersonalCustomerResponseBody extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'instanceId' => 'instanceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCrmPersonalCustomerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        return $model;
    }
}
