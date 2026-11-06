<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vminutes_1_0\Models;

use AlibabaCloud\SDK\Dingtalk\Vminutes_1_0\Models\OpenQueryMinutesSummaryResponseBody\currentTemplate;
use AlibabaCloud\SDK\Dingtalk\Vminutes_1_0\Models\OpenQueryMinutesSummaryResponseBody\textGenerationInfo;
use AlibabaCloud\SDK\Dingtalk\Vminutes_1_0\Models\OpenQueryMinutesSummaryResponseBody\visualGenerationInfo;
use AlibabaCloud\Tea\Model;

class OpenQueryMinutesSummaryResponseBody extends Model
{
    /**
     * @var currentTemplate
     */
    public $currentTemplate;

    /**
     * @var string
     */
    public $fullSummary;

    /**
     * @var string
     */
    public $generatingStatus;

    /**
     * @var textGenerationInfo
     */
    public $textGenerationInfo;

    /**
     * @var visualGenerationInfo
     */
    public $visualGenerationInfo;
    protected $_name = [
        'currentTemplate' => 'currentTemplate',
        'fullSummary' => 'fullSummary',
        'generatingStatus' => 'generatingStatus',
        'textGenerationInfo' => 'textGenerationInfo',
        'visualGenerationInfo' => 'visualGenerationInfo',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentTemplate) {
            $res['currentTemplate'] = null !== $this->currentTemplate ? $this->currentTemplate->toMap() : null;
        }
        if (null !== $this->fullSummary) {
            $res['fullSummary'] = $this->fullSummary;
        }
        if (null !== $this->generatingStatus) {
            $res['generatingStatus'] = $this->generatingStatus;
        }
        if (null !== $this->textGenerationInfo) {
            $res['textGenerationInfo'] = null !== $this->textGenerationInfo ? $this->textGenerationInfo->toMap() : null;
        }
        if (null !== $this->visualGenerationInfo) {
            $res['visualGenerationInfo'] = null !== $this->visualGenerationInfo ? $this->visualGenerationInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OpenQueryMinutesSummaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['currentTemplate'])) {
            $model->currentTemplate = currentTemplate::fromMap($map['currentTemplate']);
        }
        if (isset($map['fullSummary'])) {
            $model->fullSummary = $map['fullSummary'];
        }
        if (isset($map['generatingStatus'])) {
            $model->generatingStatus = $map['generatingStatus'];
        }
        if (isset($map['textGenerationInfo'])) {
            $model->textGenerationInfo = textGenerationInfo::fromMap($map['textGenerationInfo']);
        }
        if (isset($map['visualGenerationInfo'])) {
            $model->visualGenerationInfo = visualGenerationInfo::fromMap($map['visualGenerationInfo']);
        }

        return $model;
    }
}
