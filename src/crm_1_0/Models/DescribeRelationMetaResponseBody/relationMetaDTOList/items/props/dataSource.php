<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcrm_1_0\Models\DescribeRelationMetaResponseBody\relationMetaDTOList\items\props;

use AlibabaCloud\SDK\Dingtalk\Vcrm_1_0\Models\DescribeRelationMetaResponseBody\relationMetaDTOList\items\props\dataSource\params;
use AlibabaCloud\SDK\Dingtalk\Vcrm_1_0\Models\DescribeRelationMetaResponseBody\relationMetaDTOList\items\props\dataSource\target;
use AlibabaCloud\Tea\Model;

class dataSource extends Model
{
    /**
     * @description 关联类型{ "form": 关联表单 }
     *
     * @var string
     */
    public $type;

    /**
     * @var params
     */
    public $params;

    /**
     * @description 关联表单的业务标识
     *
     * @var target
     */
    public $target;
    protected $_name = [
        'type'   => 'type',
        'params' => 'params',
        'target' => 'target',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->params) {
            $res['params'] = null !== $this->params ? $this->params->toMap() : null;
        }
        if (null !== $this->target) {
            $res['target'] = null !== $this->target ? $this->target->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataSource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['params'])) {
            $model->params = params::fromMap($map['params']);
        }
        if (isset($map['target'])) {
            $model->target = target::fromMap($map['target']);
        }

        return $model;
    }
}