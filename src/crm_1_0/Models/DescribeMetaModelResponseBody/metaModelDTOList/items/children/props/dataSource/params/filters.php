<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcrm_1_0\Models\DescribeMetaModelResponseBody\metaModelDTOList\items\children\props\dataSource\params;

use AlibabaCloud\Tea\Model;

class filters extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $fieldId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $filterType;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $value;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $valueType;
    protected $_name = [
        'fieldId' => 'fieldId',
        'filterType' => 'filterType',
        'value' => 'value',
        'valueType' => 'valueType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fieldId) {
            $res['fieldId'] = $this->fieldId;
        }
        if (null !== $this->filterType) {
            $res['filterType'] = $this->filterType;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        if (null !== $this->valueType) {
            $res['valueType'] = $this->valueType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fieldId'])) {
            $model->fieldId = $map['fieldId'];
        }
        if (isset($map['filterType'])) {
            $model->filterType = $map['filterType'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }
        if (isset($map['valueType'])) {
            $model->valueType = $map['valueType'];
        }

        return $model;
    }
}
