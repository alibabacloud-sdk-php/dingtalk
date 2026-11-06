<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vbizfinance_2_0\Models;

use AlibabaCloud\SDK\Dingtalk\Vbizfinance_2_0\Models\QueryPaymentBenefitClientIdRequest\queryPaymentBenefitRequest;
use AlibabaCloud\Tea\Model;

class QueryPaymentBenefitClientIdRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var queryPaymentBenefitRequest
     */
    public $queryPaymentBenefitRequest;
    protected $_name = [
        'queryPaymentBenefitRequest' => 'queryPaymentBenefitRequest',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->queryPaymentBenefitRequest) {
            $res['queryPaymentBenefitRequest'] = null !== $this->queryPaymentBenefitRequest ? $this->queryPaymentBenefitRequest->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryPaymentBenefitClientIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['queryPaymentBenefitRequest'])) {
            $model->queryPaymentBenefitRequest = queryPaymentBenefitRequest::fromMap($map['queryPaymentBenefitRequest']);
        }

        return $model;
    }
}
