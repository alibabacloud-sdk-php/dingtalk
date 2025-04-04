<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vyida_1_0\Models\GetProcessDesignByCodeResponseBody\nodes;

use AlibabaCloud\Tea\Model;

class name extends Model
{
    /**
     * @example 张三
     *
     * @var string
     */
    public $enUS;

    /**
     * @example zhangsan
     *
     * @var string
     */
    public $zhCN;
    protected $_name = [
        'enUS' => 'en_US',
        'zhCN' => 'zh_CN',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->enUS) {
            $res['en_US'] = $this->enUS;
        }
        if (null !== $this->zhCN) {
            $res['zh_CN'] = $this->zhCN;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return name
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['en_US'])) {
            $model->enUS = $map['en_US'];
        }
        if (isset($map['zh_CN'])) {
            $model->zhCN = $map['zh_CN'];
        }

        return $model;
    }
}
