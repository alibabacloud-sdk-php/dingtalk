<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcrm_1_0\Models\DescribeRelationMetaResponseBody\relationMetaDTOList\items;

use AlibabaCloud\SDK\Dingtalk\Vcrm_1_0\Models\DescribeRelationMetaResponseBody\relationMetaDTOList\items\props\dataSource;
use AlibabaCloud\SDK\Dingtalk\Vcrm_1_0\Models\DescribeRelationMetaResponseBody\relationMetaDTOList\items\props\fields;
use AlibabaCloud\SDK\Dingtalk\Vcrm_1_0\Models\DescribeRelationMetaResponseBody\relationMetaDTOList\items\props\options;
use AlibabaCloud\SDK\Dingtalk\Vcrm_1_0\Models\DescribeRelationMetaResponseBody\relationMetaDTOList\items\props\relateSource;
use AlibabaCloud\SDK\Dingtalk\Vcrm_1_0\Models\DescribeRelationMetaResponseBody\relationMetaDTOList\items\props\rule;
use AlibabaCloud\SDK\Dingtalk\Vcrm_1_0\Models\DescribeRelationMetaResponseBody\relationMetaDTOList\items\props\statField;
use AlibabaCloud\Tea\Model;

class props extends Model
{
    /**
     * @description 字段id
     *
     * @var string
     */
    public $fieldId;

    /**
     * @description 字段标题
     *
     * @var string
     */
    public $label;

    /**
     * @var bool
     */
    public $sortable;

    /**
     * @description 字段标题是否可修改
     *
     * @var bool
     */
    public $labelEditableFreeze;

    /**
     * @description 字段是否必填
     *
     * @var bool
     */
    public $required;

    /**
     * @description 字段必填是否修改
     *
     * @var bool
     */
    public $requiredEditableFreeze;

    /**
     * @description 是否参与打印
     *
     * @var string
     */
    public $notPrint;

    /**
     * @description 说明文字内容
     *
     * @var string
     */
    public $content;

    /**
     * @description 时间格式
     *
     * @var string
     */
    public $format;

    /**
     * @description 选项内容列表
     *
     * @var options[]
     */
    public $options;

    /**
     * @description 是否需要大写 默认是需要
     *
     * @var string
     */
    public $notUpper;

    /**
     * @description 数字组件/日期区间组件单位属性
     *
     * @var string
     */
    public $unit;

    /**
     * @description 界面空值提示占位符 前后端统一用placeholder
     *
     * @var string
     */
    public $placeholder;

    /**
     * @description 字段别名
     *
     * @var string
     */
    public $bizAlias;

    /**
     * @description 是否自动计算时长
     *
     * @var bool
     */
    public $duration;

    /**
     * @description 内部联系人choice
     *
     * @var int
     */
    public $choice;

    /**
     * @description 是否可编辑
     *
     * @var bool
     */
    public $disabled;

    /**
     * @description textnote的样式
     *
     * @var string
     */
    public $align;

    /**
     * @var relateSource[]
     */
    public $relateSource;

    /**
     * @description 关联表单的关联控件显示
     *
     * @var fields[]
     */
    public $fields;

    /**
     * @description 关联表单的数据源配置
     *
     * @var dataSource
     */
    public $dataSource;

    /**
     * @description 隐藏字段
     *
     * @var bool
     */
    public $invisible;

    /**
     * @description 是否有支付属性
     *
     * @var bool
     */
    public $payEnable;

    /**
     * @description 需要计算总和的明细组件
     *
     * @var statField[]
     */
    public $statField;

    /**
     * @description 说明文案的链接地址
     *
     * @var string
     */
    public $link;

    /**
     * @description 明细打印排版方式
     *
     * @var bool
     */
    public $verticalPrint;

    /**
     * @description 公式
     *
     * @var string
     */
    public $formula;

    /**
     * @var string
     */
    public $needDetail;

    /**
     * @description 1
     *
     * @var int
     */
    public $quote;

    /**
     * @var int
     */
    public $multi;

    /**
     * @description 流水号控件规则
     *
     * @var rule[]
     */
    public $rule;

    /**
     * @description table
     *
     * @var string
     */
    public $tableViewMode;

    /**
     * @var string
     */
    public $actionName;

    /**
     * @description true
     *
     * @var bool
     */
    public $watermark;

    /**
     * @description 5
     *
     * @var int
     */
    public $limit;

    /**
     * @description true
     *
     * @var bool
     */
    public $spread;

    /**
     * @description 50
     *
     * @var int
     */
    public $ratio;

    /**
     * @var string
     */
    public $durationLabel;

    /**
     * @description phone
     *
     * @var string
     */
    public $mode;
    protected $_name = [
        'fieldId'                => 'fieldId',
        'label'                  => 'label',
        'sortable'               => 'sortable',
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
        'relateSource'           => 'relateSource',
        'fields'                 => 'fields',
        'dataSource'             => 'dataSource',
        'invisible'              => 'invisible',
        'payEnable'              => 'payEnable',
        'statField'              => 'statField',
        'link'                   => 'link',
        'verticalPrint'          => 'verticalPrint',
        'formula'                => 'formula',
        'needDetail'             => 'needDetail',
        'quote'                  => 'quote',
        'multi'                  => 'multi',
        'rule'                   => 'rule',
        'tableViewMode'          => 'tableViewMode',
        'actionName'             => 'actionName',
        'watermark'              => 'watermark',
        'limit'                  => 'limit',
        'spread'                 => 'spread',
        'ratio'                  => 'ratio',
        'durationLabel'          => 'durationLabel',
        'mode'                   => 'mode',
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
        if (null !== $this->sortable) {
            $res['sortable'] = $this->sortable;
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
        if (null !== $this->relateSource) {
            $res['relateSource'] = [];
            if (null !== $this->relateSource && \is_array($this->relateSource)) {
                $n = 0;
                foreach ($this->relateSource as $item) {
                    $res['relateSource'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->needDetail) {
            $res['needDetail'] = $this->needDetail;
        }
        if (null !== $this->quote) {
            $res['quote'] = $this->quote;
        }
        if (null !== $this->multi) {
            $res['multi'] = $this->multi;
        }
        if (null !== $this->rule) {
            $res['rule'] = [];
            if (null !== $this->rule && \is_array($this->rule)) {
                $n = 0;
                foreach ($this->rule as $item) {
                    $res['rule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tableViewMode) {
            $res['tableViewMode'] = $this->tableViewMode;
        }
        if (null !== $this->actionName) {
            $res['actionName'] = $this->actionName;
        }
        if (null !== $this->watermark) {
            $res['watermark'] = $this->watermark;
        }
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }
        if (null !== $this->spread) {
            $res['spread'] = $this->spread;
        }
        if (null !== $this->ratio) {
            $res['ratio'] = $this->ratio;
        }
        if (null !== $this->durationLabel) {
            $res['durationLabel'] = $this->durationLabel;
        }
        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
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
        if (isset($map['sortable'])) {
            $model->sortable = $map['sortable'];
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
        if (isset($map['relateSource'])) {
            if (!empty($map['relateSource'])) {
                $model->relateSource = [];
                $n                   = 0;
                foreach ($map['relateSource'] as $item) {
                    $model->relateSource[$n++] = null !== $item ? relateSource::fromMap($item) : $item;
                }
            }
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
        if (isset($map['needDetail'])) {
            $model->needDetail = $map['needDetail'];
        }
        if (isset($map['quote'])) {
            $model->quote = $map['quote'];
        }
        if (isset($map['multi'])) {
            $model->multi = $map['multi'];
        }
        if (isset($map['rule'])) {
            if (!empty($map['rule'])) {
                $model->rule = [];
                $n           = 0;
                foreach ($map['rule'] as $item) {
                    $model->rule[$n++] = null !== $item ? rule::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['tableViewMode'])) {
            $model->tableViewMode = $map['tableViewMode'];
        }
        if (isset($map['actionName'])) {
            $model->actionName = $map['actionName'];
        }
        if (isset($map['watermark'])) {
            $model->watermark = $map['watermark'];
        }
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }
        if (isset($map['spread'])) {
            $model->spread = $map['spread'];
        }
        if (isset($map['ratio'])) {
            $model->ratio = $map['ratio'];
        }
        if (isset($map['durationLabel'])) {
            $model->durationLabel = $map['durationLabel'];
        }
        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }

        return $model;
    }
}