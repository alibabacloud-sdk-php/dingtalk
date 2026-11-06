<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vwiki_2_0\Models;

use AlibabaCloud\SDK\Dingtalk\Vwiki_2_0\Models\GetNodesResponseBody\failedNodes;
use AlibabaCloud\SDK\Dingtalk\Vwiki_2_0\Models\GetNodesResponseBody\nodes;
use AlibabaCloud\Tea\Model;

class GetNodesResponseBody extends Model
{
    /**
     * @var failedNodes[]
     */
    public $failedNodes;

    /**
     * @var nodes[]
     */
    public $nodes;
    protected $_name = [
        'failedNodes' => 'failedNodes',
        'nodes' => 'nodes',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->failedNodes) {
            $res['failedNodes'] = [];
            if (null !== $this->failedNodes && \is_array($this->failedNodes)) {
                $n = 0;
                foreach ($this->failedNodes as $item) {
                    $res['failedNodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nodes) {
            $res['nodes'] = [];
            if (null !== $this->nodes && \is_array($this->nodes)) {
                $n = 0;
                foreach ($this->nodes as $item) {
                    $res['nodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetNodesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['failedNodes'])) {
            if (!empty($map['failedNodes'])) {
                $model->failedNodes = [];
                $n = 0;
                foreach ($map['failedNodes'] as $item) {
                    $model->failedNodes[$n++] = null !== $item ? failedNodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['nodes'])) {
            if (!empty($map['nodes'])) {
                $model->nodes = [];
                $n = 0;
                foreach ($map['nodes'] as $item) {
                    $model->nodes[$n++] = null !== $item ? nodes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
