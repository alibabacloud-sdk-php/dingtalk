<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vyida_1_0\Models;

use AlibabaCloud\Tea\Model;

class GetActivityButtonListRequest extends Model
{
    /**
     * @example zh_CN
     *
     * @var string
     */
    public $language;

    /**
     * @description This parameter is required.
     *
     * @example hello1234
     *
     * @var string
     */
    public $systemToken;

    /**
     * @description This parameter is required.
     *
     * @example 未知
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'language'    => 'language',
        'systemToken' => 'systemToken',
        'userId'      => 'userId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->language) {
            $res['language'] = $this->language;
        }
        if (null !== $this->systemToken) {
            $res['systemToken'] = $this->systemToken;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetActivityButtonListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['language'])) {
            $model->language = $map['language'];
        }
        if (isset($map['systemToken'])) {
            $model->systemToken = $map['systemToken'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
