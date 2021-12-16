<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcrm_1_0\Models\DescribeRelationMetaResponseBody\relationMetaDTOList\items\children;

use AlibabaCloud\SDK\Dingtalk\Vcrm_1_0\Models\DescribeRelationMetaResponseBody\relationMetaDTOList\items\children\props\dataSource;
use AlibabaCloud\SDK\Dingtalk\Vcrm_1_0\Models\DescribeRelationMetaResponseBody\relationMetaDTOList\items\children\props\fields;
use AlibabaCloud\SDK\Dingtalk\Vcrm_1_0\Models\DescribeRelationMetaResponseBody\relationMetaDTOList\items\children\props\options;
use AlibabaCloud\SDK\Dingtalk\Vcrm_1_0\Models\DescribeRelationMetaResponseBody\relationMetaDTOList\items\children\props\statField;
use AlibabaCloud\Tea\Model;

class props extends Model
{
    /**
     * @var string
     */
    public $fieldId;

    /**
     * @var string
     */
    public $label;

    /**
     * @var bool
     */
    public $labelEditableFreeze;

    /**
     * @var bool
     */
    public $required;

    /**
     * @var bool
     */
    public $requiredEditableFreeze;

    /**
     * @var string
     */
    public $notPrint;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $format;

    /**
     * @var options[]
     */
    public $options;

    /**
     * @var string
     */
    public $notUpper;

    /**
     * @var string
     */
    public $unit;

    /**
     * @var string
     */
    public $placeholder;

    /**
     * @var string
     */
    public $bizAlias;

    /**
     * @var bool
     */
    public $duration;

    /**
     * @var int
     */
    public $choice;

    /**
     * @var bool
     */
    public $disabled;

    /**
     * @var string
     */
    public $align;

    /**
     * @var fields[]
     */
    public $fields;

    /**
     * @var dataSource
     */
    public $dataSource;

    /**
     * @var bool
     */
    public $invisible;

    /**
     * @var bool
     */
    public $payEnable;

    /**
     * @var statField[]
     */
    public $statField;

    /**
     * @var string
     */
    public $link;

    /**
     * @var bool
     */
    public $verticalPrint;

    /**
     * @var string
     */
    public $formula;
    protected $_name = [
        'fieldId'                => 'fieldId',
        'label'                  => 'label',
        'labelEditableFreeze'    => 'labelEditableFreeze',
        'required'               => 'required',
        'requiredEditableFreeze' => 'requiredEditableFreeze',
        'notPrint'               => 'notPrint',
        'content'                => 'content',
        'format'                 => 'format',
        'options'                => 'options',
        'notUpper'               => 'notUpper',
        'unit'                   => 'unit',
        'placeholder'            => 'placeholder',
        'bizAlias'               => 'bizAlias',
        'duration'               => 'duration',
        'choice'                 => 'choice',
        'disabled'               => 'disabled',
        'align'                  => 'align',
        'fields'                 => 'fields',
        'dataSource'             => 'dataSource',
        'invisible'              => 'invisible',
        'payEnable'              => 'payEnable',
        'statField'              => 'statField',
        'link'                   => 'link',
        'verticalPrint'          => 'verticalPrint',
        'formula'                => 'formula',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fieldId) {
            $res['fieldId'] = $this->fieldId;
        }
        if (null !== $this->label) {
            $res['label'] = $this->label;
        }
        if (null !== $this->labelEditableFreeze) {
            $res['labelEditableFreeze'] = $this->labelEditableFreeze;
        }
        if (null !== $this->required) {
            $res['required'] = $this->required;
        }
        if (null !== $this->requiredEditableFreeze) {
            $res['requiredEditableFreeze'] = $this->requiredEditableFreeze;
        }
        if (null !== $this->notPrint) {
            $res['notPrint'] = $this->notPrint;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->format) {
            $res['format'] = $this->format;
        }
        if (null !== $this->options) {
            $res['options'] = [];
            if (null !== $this->options && \is_array($this->options)) {
                $n = 0;
                foreach ($this->options as $item) {
                    $res['options'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->notUpper) {
            $res['notUpper'] = $this->notUpper;
        }
        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
        }
        if (null !== $this->placeholder) {
            $res['placeholder'] = $this->placeholder;
        }
        if (null !== $this->bizAlias) {
            $res['bizAlias'] = $this->bizAlias;
        }
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }
        if (null !== $this->choice) {
            $res['choice'] = $this->choice;
        }
        if (null !== $this->disabled) {
            $res['disabled'] = $this->disabled;
        }
        if (null !== $this->align) {
            $res['align'] = $this->align;
        }
        if (null !== $this->fields) {
            $res['fields'] = [];
            if (null !== $this->fields && \is_array($this->fields)) {
                $n = 0;
                foreach ($this->fields as $item) {
                    $res['fields'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dataSource) {
            $res['dataSource'] = null !== $this->dataSource ? $this->dataSource->toMap() : null;
        }
        if (null !== $this->invisible) {
            $res['invisible'] = $this->invisible;
        }
        if (null !== $this->payEnable) {
            $res['payEnable'] = $this->payEnable;
        }
        if (null !== $this->statField) {
            $res['statField'] = [];
            if (null !== $this->statField && \is_array($this->statField)) {
                $n = 0;
                foreach ($this->statField as $item) {
                    $res['statField'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->link) {
            $res['link'] = $this->link;
        }
        if (null !== $this->verticalPrint) {
            $res['verticalPrint'] = $this->verticalPrint;
        }
        if (null !== $this->formula) {
            $res['formula'] = $this->formula;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return props
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fieldId'])) {
            $model->fieldId = $map['fieldId'];
        }
        if (isset($map['label'])) {
            $model->label = $map['label'];
        }
        if (isset($map['labelEditableFreeze'])) {
            $model->labelEditableFreeze = $map['labelEditableFreeze'];
        }
        if (isset($map['required'])) {
            $model->required = $map['required'];
        }
        if (isset($map['requiredEditableFreeze'])) {
            $model->requiredEditableFreeze = $map['requiredEditableFreeze'];
        }
        if (isset($map['notPrint'])) {
            $model->notPrint = $map['notPrint'];
        }
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['format'])) {
            $model->format = $map['format'];
        }
        if (isset($map['options'])) {
            if (!empty($map['options'])) {
                $model->options = [];
                $n              = 0;
                foreach ($map['options'] as $item) {
                    $model->options[$n++] = null !== $item ? options::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['notUpper'])) {
            $model->notUpper = $map['notUpper'];
        }
        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }
        if (isset($map['placeholder'])) {
            $model->placeholder = $map['placeholder'];
        }
        if (isset($map['bizAlias'])) {
            $model->bizAlias = $map['bizAlias'];
        }
        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }
        if (isset($map['choice'])) {
            $model->choice = $map['choice'];
        }
        if (isset($map['disabled'])) {
            $model->disabled = $map['disabled'];
        }
        if (isset($map['align'])) {
            $model->align = $map['align'];
        }
        if (isset($map['fields'])) {
            if (!empty($map['fields'])) {
                $model->fields = [];
                $n             = 0;
                foreach ($map['fields'] as $item) {
                    $model->fields[$n++] = null !== $item ? fields::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['dataSource'])) {
            $model->dataSource = dataSource::fromMap($map['dataSource']);
        }
        if (isset($map['invisible'])) {
            $model->invisible = $map['invisible'];
        }
        if (isset($map['payEnable'])) {
            $model->payEnable = $map['payEnable'];
        }
        if (isset($map['statField'])) {
            if (!empty($map['statField'])) {
                $model->statField = [];
                $n                = 0;
                foreach ($map['statField'] as $item) {
                    $model->statField[$n++] = null !== $item ? statField::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['link'])) {
            $model->link = $map['link'];
        }
        if (isset($map['verticalPrint'])) {
            $model->verticalPrint = $map['verticalPrint'];
        }
        if (isset($map['formula'])) {
            $model->formula = $map['formula'];
        }

        return $model;
    }
}
