<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vexclusive_1_0\Models;

use AlibabaCloud\SDK\Dingtalk\Vexclusive_1_0\Models\ListPrivateStorageOpenAppsResponseBody\apps;
use AlibabaCloud\Tea\Model;

class ListPrivateStorageOpenAppsResponseBody extends Model
{
    /**
     * @var apps[]
     */
    public $apps;

    /**
     * @var bool
     */
    public $hasMore;

    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'apps' => 'apps',
        'hasMore' => 'hasMore',
        'nextToken' => 'nextToken',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apps) {
            $res['apps'] = [];
            if (null !== $this->apps && \is_array($this->apps)) {
                $n = 0;
                foreach ($this->apps as $item) {
                    $res['apps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hasMore) {
            $res['hasMore'] = $this->hasMore;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPrivateStorageOpenAppsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apps'])) {
            if (!empty($map['apps'])) {
                $model->apps = [];
                $n = 0;
                foreach ($map['apps'] as $item) {
                    $model->apps[$n++] = null !== $item ? apps::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['hasMore'])) {
            $model->hasMore = $map['hasMore'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        return $model;
    }
}
