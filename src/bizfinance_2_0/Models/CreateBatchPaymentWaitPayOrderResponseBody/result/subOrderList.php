<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vbizfinance_2_0\Models\CreateBatchPaymentWaitPayOrderResponseBody\result;

use AlibabaCloud\Tea\Model;

class subOrderList extends Model
{
    /**
     * @var string
     */
    public $amount;

    /**
     * @var string
     */
    public $orderNo;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subOutBizNo;
    protected $_name = [
        'amount' => 'amount',
        'orderNo' => 'orderNo',
        'status' => 'status',
        'subOutBizNo' => 'subOutBizNo',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['amount'] = $this->amount;
        }
        if (null !== $this->orderNo) {
            $res['orderNo'] = $this->orderNo;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->subOutBizNo) {
            $res['subOutBizNo'] = $this->subOutBizNo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subOrderList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['amount'])) {
            $model->amount = $map['amount'];
        }
        if (isset($map['orderNo'])) {
            $model->orderNo = $map['orderNo'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['subOutBizNo'])) {
            $model->subOutBizNo = $map['subOutBizNo'];
        }

        return $model;
    }
}
