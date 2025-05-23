<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcrm_1_0\Models\DescribeMetaModelResponseBody\metaModelDTOList\items\children\props;

use AlibabaCloud\SDK\Dingtalk\Vcrm_1_0\Models\DescribeMetaModelResponseBody\metaModelDTOList\items\children\props\fields\relateProps;
use AlibabaCloud\Tea\Model;

class fields extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $componentName;

    /**
     * @description This parameter is required.
     *
     * @var relateProps
     */
    public $relateProps;
    protected $_name = [
        'componentName' => 'componentName',
        'relateProps' => 'relateProps',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentName) {
            $res['componentName'] = $this->componentName;
        }
        if (null !== $this->relateProps) {
            $res['relateProps'] = null !== $this->relateProps ? $this->relateProps->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fields
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['componentName'])) {
            $model->componentName = $map['componentName'];
        }
        if (isset($map['relateProps'])) {
            $model->relateProps = relateProps::fromMap($map['relateProps']);
        }

        return $model;
    }
}
