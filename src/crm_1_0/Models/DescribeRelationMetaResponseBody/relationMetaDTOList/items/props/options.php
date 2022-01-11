<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcrm_1_0\Models\DescribeRelationMetaResponseBody\relationMetaDTOList\items\props;

use AlibabaCloud\SDK\Dingtalk\Vcrm_1_0\Models\DescribeRelationMetaResponseBody\relationMetaDTOList\items\props\options\extension;
use AlibabaCloud\Tea\Model;

class options extends Model
{
    /**
     * @description 选项数据主键
     *
     * @var string
     */
    public $key;

    /**
     * @description 选项显示内容
     *
     * @var string
     */
    public $value;

    /**
     * @description false
     *
     * @var bool
     */
    public $warn;

    /**
     * @var extension
     */
    public $extension;
    protected $_name = [
        'key'       => 'key',
        'value'     => 'value',
        'warn'      => 'warn',
        'extension' => 'extension',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        if (null !== $this->warn) {
            $res['warn'] = $this->warn;
        }
        if (null !== $this->extension) {
            $res['extension'] = null !== $this->extension ? $this->extension->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return options
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }
        if (isset($map['warn'])) {
            $model->warn = $map['warn'];
        }
        if (isset($map['extension'])) {
            $model->extension = extension::fromMap($map['extension']);
        }

        return $model;
    }
}