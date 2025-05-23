<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vvillage_1_0\Models;

use AlibabaCloud\Tea\Model;

class ListSubDeptIdsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $subCorpId;
    protected $_name = [
        'subCorpId' => 'subCorpId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->subCorpId) {
            $res['subCorpId'] = $this->subCorpId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSubDeptIdsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['subCorpId'])) {
            $model->subCorpId = $map['subCorpId'];
        }

        return $model;
    }
}
