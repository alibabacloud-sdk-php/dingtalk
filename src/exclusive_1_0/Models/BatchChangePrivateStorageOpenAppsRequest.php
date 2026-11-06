<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vexclusive_1_0\Models;

use AlibabaCloud\Tea\Model;

class BatchChangePrivateStorageOpenAppsRequest extends Model
{
    /**
     * @var string[]
     */
    public $deleteClientIds;

    /**
     * @var string[]
     */
    public $saveClientIds;
    protected $_name = [
        'deleteClientIds' => 'deleteClientIds',
        'saveClientIds' => 'saveClientIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->deleteClientIds) {
            $res['deleteClientIds'] = $this->deleteClientIds;
        }
        if (null !== $this->saveClientIds) {
            $res['saveClientIds'] = $this->saveClientIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchChangePrivateStorageOpenAppsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['deleteClientIds'])) {
            if (!empty($map['deleteClientIds'])) {
                $model->deleteClientIds = $map['deleteClientIds'];
            }
        }
        if (isset($map['saveClientIds'])) {
            if (!empty($map['saveClientIds'])) {
                $model->saveClientIds = $map['saveClientIds'];
            }
        }

        return $model;
    }
}
