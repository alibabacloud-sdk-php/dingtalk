<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vbizfinance_2_0\Models;

use AlibabaCloud\Tea\Model;

class QueryPaymentBenefitClientIdShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $queryPaymentBenefitRequestShrink;
    protected $_name = [
        'queryPaymentBenefitRequestShrink' => 'queryPaymentBenefitRequest',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->queryPaymentBenefitRequestShrink) {
            $res['queryPaymentBenefitRequest'] = $this->queryPaymentBenefitRequestShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryPaymentBenefitClientIdShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['queryPaymentBenefitRequest'])) {
            $model->queryPaymentBenefitRequestShrink = $map['queryPaymentBenefitRequest'];
        }

        return $model;
    }
}
