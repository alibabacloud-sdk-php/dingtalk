<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vim_2_0\Models;

use AlibabaCloud\Tea\Model;

class UserIdPrivateDataMapValue extends Model
{
    /**
     * @var string[]
     */
    public $cardParamMap;
    protected $_name = [
        'cardParamMap' => 'cardParamMap',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cardParamMap) {
            $res['cardParamMap'] = $this->cardParamMap;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UserIdPrivateDataMapValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cardParamMap'])) {
            $model->cardParamMap = $map['cardParamMap'];
        }

        return $model;
    }
}
