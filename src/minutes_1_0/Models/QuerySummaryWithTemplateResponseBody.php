<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vminutes_1_0\Models;

use AlibabaCloud\SDK\Dingtalk\Vminutes_1_0\Models\QuerySummaryWithTemplateResponseBody\textGenerationInfo;
use AlibabaCloud\SDK\Dingtalk\Vminutes_1_0\Models\QuerySummaryWithTemplateResponseBody\visualGenerationInfo;
use AlibabaCloud\Tea\Model;

class QuerySummaryWithTemplateResponseBody extends Model
{
    /**
     * @var string
     */
    public $generatingStatus;

    /**
     * @var string
     */
    public $summaryText;

    /**
     * @var textGenerationInfo
     */
    public $textGenerationInfo;

    /**
     * @var string
     */
    public $visualGeneratingStatus;

    /**
     * @var visualGenerationInfo
     */
    public $visualGenerationInfo;
    protected $_name = [
        'generatingStatus' => 'generatingStatus',
        'summaryText' => 'summaryText',
        'textGenerationInfo' => 'textGenerationInfo',
        'visualGeneratingStatus' => 'visualGeneratingStatus',
        'visualGenerationInfo' => 'visualGenerationInfo',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->generatingStatus) {
            $res['generatingStatus'] = $this->generatingStatus;
        }
        if (null !== $this->summaryText) {
            $res['summaryText'] = $this->summaryText;
        }
        if (null !== $this->textGenerationInfo) {
            $res['textGenerationInfo'] = null !== $this->textGenerationInfo ? $this->textGenerationInfo->toMap() : null;
        }
        if (null !== $this->visualGeneratingStatus) {
            $res['visualGeneratingStatus'] = $this->visualGeneratingStatus;
        }
        if (null !== $this->visualGenerationInfo) {
            $res['visualGenerationInfo'] = null !== $this->visualGenerationInfo ? $this->visualGenerationInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySummaryWithTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['generatingStatus'])) {
            $model->generatingStatus = $map['generatingStatus'];
        }
        if (isset($map['summaryText'])) {
            $model->summaryText = $map['summaryText'];
        }
        if (isset($map['textGenerationInfo'])) {
            $model->textGenerationInfo = textGenerationInfo::fromMap($map['textGenerationInfo']);
        }
        if (isset($map['visualGeneratingStatus'])) {
            $model->visualGeneratingStatus = $map['visualGeneratingStatus'];
        }
        if (isset($map['visualGenerationInfo'])) {
            $model->visualGenerationInfo = visualGenerationInfo::fromMap($map['visualGenerationInfo']);
        }

        return $model;
    }
}
