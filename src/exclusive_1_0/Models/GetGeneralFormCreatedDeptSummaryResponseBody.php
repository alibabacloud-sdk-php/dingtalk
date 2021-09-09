<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vexclusive_1_0\Models;

use AlibabaCloud\SDK\Dingtalk\Vexclusive_1_0\Models\GetGeneralFormCreatedDeptSummaryResponseBody\data;
use AlibabaCloud\Tea\Model;

class GetGeneralFormCreatedDeptSummaryResponseBody extends Model
{
    /**
     * @description 用户版本分布情况列表
     *
     * @var data[]
     */
    public $data;

    /**
     * @description 下一次请 求的分页游标
     *
     * @var int
     */
    public $nextToken;

    /**
     * @description 是否有更多数据
     *
     * @var bool
     */
    public $hasMore;
    protected $_name = [
        'data'      => 'data',
        'nextToken' => 'nextToken',
        'hasMore'   => 'hasMore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->hasMore) {
            $res['hasMore'] = $this->hasMore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetGeneralFormCreatedDeptSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['data'])) {
            if (!empty($map['data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['hasMore'])) {
            $model->hasMore = $map['hasMore'];
        }

        return $model;
    }
}