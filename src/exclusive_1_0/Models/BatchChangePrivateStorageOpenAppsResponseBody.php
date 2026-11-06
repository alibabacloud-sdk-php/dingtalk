<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vexclusive_1_0\Models;

use AlibabaCloud\SDK\Dingtalk\Vexclusive_1_0\Models\BatchChangePrivateStorageOpenAppsResponseBody\failures;
use AlibabaCloud\Tea\Model;

class BatchChangePrivateStorageOpenAppsResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $deletedClientIds;

    /**
     * @var failures[]
     */
    public $failures;

    /**
     * @var string[]
     */
    public $savedClientIds;
    protected $_name = [
        'deletedClientIds' => 'deletedClientIds',
        'failures' => 'failures',
        'savedClientIds' => 'savedClientIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->deletedClientIds) {
            $res['deletedClientIds'] = $this->deletedClientIds;
        }
        if (null !== $this->failures) {
            $res['failures'] = [];
            if (null !== $this->failures && \is_array($this->failures)) {
                $n = 0;
                foreach ($this->failures as $item) {
                    $res['failures'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->savedClientIds) {
            $res['savedClientIds'] = $this->savedClientIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchChangePrivateStorageOpenAppsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['deletedClientIds'])) {
            if (!empty($map['deletedClientIds'])) {
                $model->deletedClientIds = $map['deletedClientIds'];
            }
        }
        if (isset($map['failures'])) {
            if (!empty($map['failures'])) {
                $model->failures = [];
                $n = 0;
                foreach ($map['failures'] as $item) {
                    $model->failures[$n++] = null !== $item ? failures::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['savedClientIds'])) {
            if (!empty($map['savedClientIds'])) {
                $model->savedClientIds = $map['savedClientIds'];
            }
        }

        return $model;
    }
}
