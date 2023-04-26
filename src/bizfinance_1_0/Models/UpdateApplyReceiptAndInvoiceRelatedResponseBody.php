<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models;

use AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models\UpdateApplyReceiptAndInvoiceRelatedResponseBody\batchUpdateInvoiceResponse;
use AlibabaCloud\Tea\Model;

class UpdateApplyReceiptAndInvoiceRelatedResponseBody extends Model
{
    /**
     * @var batchUpdateInvoiceResponse
     */
    public $batchUpdateInvoiceResponse;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'batchUpdateInvoiceResponse' => 'batchUpdateInvoiceResponse',
        'success'                    => 'success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchUpdateInvoiceResponse) {
            $res['batchUpdateInvoiceResponse'] = null !== $this->batchUpdateInvoiceResponse ? $this->batchUpdateInvoiceResponse->toMap() : null;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateApplyReceiptAndInvoiceRelatedResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['batchUpdateInvoiceResponse'])) {
            $model->batchUpdateInvoiceResponse = batchUpdateInvoiceResponse::fromMap($map['batchUpdateInvoiceResponse']);
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
