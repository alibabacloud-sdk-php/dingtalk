<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdoc_2_0\Models\SearchRequest;

use AlibabaCloud\Tea\Model;

class spaceRequest extends Model
{
    /**
     * @description 每页最大条目数，最大值50。
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description 分页游标。如果是首次调用，可不传；如果非首次调用，该参数传上次调用时返回的nextToken。
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description 同时请求知识小组信息
     *
     * @var bool
     */
    public $withTeamInfo;
    protected $_name = [
        'maxResults'   => 'maxResults',
        'nextToken'    => 'nextToken',
        'withTeamInfo' => 'withTeamInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->withTeamInfo) {
            $res['withTeamInfo'] = $this->withTeamInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return spaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['withTeamInfo'])) {
            $model->withTeamInfo = $map['withTeamInfo'];
        }

        return $model;
    }
}
