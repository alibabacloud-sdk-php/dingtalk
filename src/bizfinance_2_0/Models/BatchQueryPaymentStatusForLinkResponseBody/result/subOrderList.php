<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vbizfinance_2_0\Models\BatchQueryPaymentStatusForLinkResponseBody\result;

use AlibabaCloud\SDK\Dingtalk\Vbizfinance_2_0\Models\BatchQueryPaymentStatusForLinkResponseBody\result\subOrderList\payeeAccountInfo;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_2_0\Models\BatchQueryPaymentStatusForLinkResponseBody\result\subOrderList\payerAccountInfo;
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
    public $corpId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $orderNo;

    /**
     * @var payeeAccountInfo
     */
    public $payeeAccountInfo;

    /**
     * @var payerAccountInfo
     */
    public $payerAccountInfo;

    /**
     * @var string
     */
    public $paymentStatus;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $subOutBizNo;
    protected $_name = [
        'amount' => 'amount',
        'corpId' => 'corpId',
        'instanceId' => 'instanceId',
        'orderNo' => 'orderNo',
        'payeeAccountInfo' => 'payeeAccountInfo',
        'payerAccountInfo' => 'payerAccountInfo',
        'paymentStatus' => 'paymentStatus',
        'remark' => 'remark',
        'source' => 'source',
        'subOutBizNo' => 'subOutBizNo',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['amount'] = $this->amount;
        }
        if (null !== $this->corpId) {
            $res['corpId'] = $this->corpId;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->orderNo) {
            $res['orderNo'] = $this->orderNo;
        }
        if (null !== $this->payeeAccountInfo) {
            $res['payeeAccountInfo'] = null !== $this->payeeAccountInfo ? $this->payeeAccountInfo->toMap() : null;
        }
        if (null !== $this->payerAccountInfo) {
            $res['payerAccountInfo'] = null !== $this->payerAccountInfo ? $this->payerAccountInfo->toMap() : null;
        }
        if (null !== $this->paymentStatus) {
            $res['paymentStatus'] = $this->paymentStatus;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
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
        if (isset($map['corpId'])) {
            $model->corpId = $map['corpId'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['orderNo'])) {
            $model->orderNo = $map['orderNo'];
        }
        if (isset($map['payeeAccountInfo'])) {
            $model->payeeAccountInfo = payeeAccountInfo::fromMap($map['payeeAccountInfo']);
        }
        if (isset($map['payerAccountInfo'])) {
            $model->payerAccountInfo = payerAccountInfo::fromMap($map['payerAccountInfo']);
        }
        if (isset($map['paymentStatus'])) {
            $model->paymentStatus = $map['paymentStatus'];
        }
        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }
        if (isset($map['subOutBizNo'])) {
            $model->subOutBizNo = $map['subOutBizNo'];
        }

        return $model;
    }
}
