<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vbizfinance_2_0\Models;

use AlibabaCloud\SDK\Dingtalk\Vbizfinance_2_0\Models\CreateBatchPaymentWaitPayOrderRequest\payerAccountDTO;
use AlibabaCloud\SDK\Dingtalk\Vbizfinance_2_0\Models\CreateBatchPaymentWaitPayOrderRequest\paymentDetailList;
use AlibabaCloud\Tea\Model;

class CreateBatchPaymentWaitPayOrderRequest extends Model
{
    /**
     * @example dingxxx
     *
     * @var string
     */
    public $orgId;

    /**
     * @example xxabc
     *
     * @var string
     */
    public $outBizNo;

    /**
     * @var payerAccountDTO
     */
    public $payerAccountDTO;

    /**
     * @description This parameter is required.
     *
     * @var paymentDetailList
     */
    public $paymentDetailList;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $paymentOrderTitle;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $paymentUserId;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $usage;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'orgId' => 'orgId',
        'outBizNo' => 'outBizNo',
        'payerAccountDTO' => 'payerAccountDTO',
        'paymentDetailList' => 'paymentDetailList',
        'paymentOrderTitle' => 'paymentOrderTitle',
        'paymentUserId' => 'paymentUserId',
        'remark' => 'remark',
        'usage' => 'usage',
        'userId' => 'userId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->orgId) {
            $res['orgId'] = $this->orgId;
        }
        if (null !== $this->outBizNo) {
            $res['outBizNo'] = $this->outBizNo;
        }
        if (null !== $this->payerAccountDTO) {
            $res['payerAccountDTO'] = null !== $this->payerAccountDTO ? $this->payerAccountDTO->toMap() : null;
        }
        if (null !== $this->paymentDetailList) {
            $res['paymentDetailList'] = null !== $this->paymentDetailList ? $this->paymentDetailList->toMap() : null;
        }
        if (null !== $this->paymentOrderTitle) {
            $res['paymentOrderTitle'] = $this->paymentOrderTitle;
        }
        if (null !== $this->paymentUserId) {
            $res['paymentUserId'] = $this->paymentUserId;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->usage) {
            $res['usage'] = $this->usage;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBatchPaymentWaitPayOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['orgId'])) {
            $model->orgId = $map['orgId'];
        }
        if (isset($map['outBizNo'])) {
            $model->outBizNo = $map['outBizNo'];
        }
        if (isset($map['payerAccountDTO'])) {
            $model->payerAccountDTO = payerAccountDTO::fromMap($map['payerAccountDTO']);
        }
        if (isset($map['paymentDetailList'])) {
            $model->paymentDetailList = paymentDetailList::fromMap($map['paymentDetailList']);
        }
        if (isset($map['paymentOrderTitle'])) {
            $model->paymentOrderTitle = $map['paymentOrderTitle'];
        }
        if (isset($map['paymentUserId'])) {
            $model->paymentUserId = $map['paymentUserId'];
        }
        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }
        if (isset($map['usage'])) {
            $model->usage = $map['usage'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
