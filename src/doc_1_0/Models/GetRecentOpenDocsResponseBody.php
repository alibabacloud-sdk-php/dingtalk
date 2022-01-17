<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdoc_1_0\Models;

use AlibabaCloud\SDK\Dingtalk\Vdoc_1_0\Models\GetRecentOpenDocsResponseBody\recentList;
use AlibabaCloud\Tea\Model;

class GetRecentOpenDocsResponseBody extends Model
{
    /**
     * @description 查询结果
     *
     * @var recentList[]
     */
    public $recentList;

    /**
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'recentList' => 'recentList',
        'nextToken'  => 'nextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recentList) {
            $res['recentList'] = [];
            if (null !== $this->recentList && \is_array($this->recentList)) {
                $n = 0;
                foreach ($this->recentList as $item) {
                    $res['recentList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRecentOpenDocsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['recentList'])) {
            if (!empty($map['recentList'])) {
                $model->recentList = [];
                $n                 = 0;
                foreach ($map['recentList'] as $item) {
                    $model->recentList[$n++] = null !== $item ? recentList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        return $model;
    }
}
