<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vbizfinance_2_0\Models\CreateBatchPaymentWaitPayOrderResponseBody;

use AlibabaCloud\SDK\Dingtalk\Vbizfinance_2_0\Models\CreateBatchPaymentWaitPayOrderResponseBody\result\subOrderList;
use AlibabaCloud\Tea\Model;

class result extends Model
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
    public $outBizNo;

    /**
     * @var string
     */
    public $status;

    /**
     * @var subOrderList
     */
    public $subOrderList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'amount' => 'amount',
        'orderNo' => 'orderNo',
        'outBizNo' => 'outBizNo',
        'status' => 'status',
        'subOrderList' => 'subOrderList',
        'totalCount' => 'totalCount',
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
        if (null !== $this->outBizNo) {
            $res['outBizNo'] = $this->outBizNo;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->subOrderList) {
            $res['subOrderList'] = null !== $this->subOrderList ? $this->subOrderList->toMap() : null;
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
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
        if (isset($map['outBizNo'])) {
            $model->outBizNo = $map['outBizNo'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['subOrderList'])) {
            $model->subOrderList = subOrderList::fromMap($map['subOrderList']);
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
