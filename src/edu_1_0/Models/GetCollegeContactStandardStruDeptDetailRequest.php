<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vedu_1_0\Models;

use AlibabaCloud\Tea\Model;

class GetCollegeContactStandardStruDeptDetailRequest extends Model
{
    /**
     * @example zh_CN
     *
     * @var string
     */
    public $language;
    protected $_name = [
        'language' => 'language',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->language) {
            $res['language'] = $this->language;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCollegeContactStandardStruDeptDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['language'])) {
            $model->language = $map['language'];
        }

        return $model;
    }
}
