<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vokr_1_0\Models\DeleteObjectiveResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 58YD
     *
     * @var string
     */
    public $id;
    protected $_name = [
        'id' => 'id',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        return $model;
    }
}
