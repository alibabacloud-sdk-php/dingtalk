<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdvi_1_0\Models;

use AlibabaCloud\Tea\Model;

class GetKanjianRecordRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example record0001
     *
     * @var string
     */
    public $recordId;
    protected $_name = [
        'recordId' => 'recordId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordId) {
            $res['recordId'] = $this->recordId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetKanjianRecordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['recordId'])) {
            $model->recordId = $map['recordId'];
        }

        return $model;
    }
}
