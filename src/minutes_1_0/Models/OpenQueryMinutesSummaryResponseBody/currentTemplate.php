<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vminutes_1_0\Models\OpenQueryMinutesSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class currentTemplate extends Model
{
    /**
     * @var string
     */
    public $summaryTemplateId;

    /**
     * @var string
     */
    public $summaryTemplateType;
    protected $_name = [
        'summaryTemplateId' => 'summaryTemplateId',
        'summaryTemplateType' => 'summaryTemplateType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->summaryTemplateId) {
            $res['summaryTemplateId'] = $this->summaryTemplateId;
        }
        if (null !== $this->summaryTemplateType) {
            $res['summaryTemplateType'] = $this->summaryTemplateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return currentTemplate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['summaryTemplateId'])) {
            $model->summaryTemplateId = $map['summaryTemplateId'];
        }
        if (isset($map['summaryTemplateType'])) {
            $model->summaryTemplateType = $map['summaryTemplateType'];
        }

        return $model;
    }
}
