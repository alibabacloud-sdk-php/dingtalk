<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vfinance_1_0\Models;

use AlibabaCloud\Tea\Model;

class QueryAcquireRefundOrderResponseBody extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 10.01
     *
     * @var string
     */
    public $amount;

    /**
     * @description This parameter is required.
     *
     * @example 2021-11-15 10:10:09
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2021-11-15 10:10:10
     *
     * @var string
     */
    public $gmtRefund;

    /**
     * @description This parameter is required.
     *
     * @example 202111010001
     *
     * @var string
     */
    public $instId;

    /**
     * @description This parameter is required.
     *
     * @example 202121241343151
     *
     * @var string
     */
    public $orderNo;

    /**
     * @description This parameter is required.
     *
     * @example 202111020001
     *
     * @var string
     */
    public $originOutTradeNo;

    /**
     * @description This parameter is required.
     *
     * @example r202111020001
     *
     * @var string
     */
    public $outRefundNo;

    /**
     * @description This parameter is required.
     *
     * @example ALIPAY
     *
     * @var string
     */
    public $payChannel;

    /**
     * @description This parameter is required.
     *
     * @example 13****09
     *
     * @var string
     */
    public $payChannelAccountNo;

    /**
     * @description This parameter is required.
     *
     * @example 123124
     *
     * @var string
     */
    public $payerUserId;

    /**
     * @example 备注
     *
     * @var string
     */
    public $remark;

    /**
     * @description This parameter is required.
     *
     * @example SUCCESS
     *
     * @var string
     */
    public $status;

    /**
     * @description This parameter is required.
     *
     * @example 1001
     *
     * @var string
     */
    public $subInstId;

    /**
     * @description This parameter is required.
     *
     * @example 餐费
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'amount' => 'amount',
        'gmtCreate' => 'gmtCreate',
        'gmtRefund' => 'gmtRefund',
        'instId' => 'instId',
        'orderNo' => 'orderNo',
        'originOutTradeNo' => 'originOutTradeNo',
        'outRefundNo' => 'outRefundNo',
        'payChannel' => 'payChannel',
        'payChannelAccountNo' => 'payChannelAccountNo',
        'payerUserId' => 'payerUserId',
        'remark' => 'remark',
        'status' => 'status',
        'subInstId' => 'subInstId',
        'title' => 'title',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['amount'] = $this->amount;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtRefund) {
            $res['gmtRefund'] = $this->gmtRefund;
        }
        if (null !== $this->instId) {
            $res['instId'] = $this->instId;
        }
        if (null !== $this->orderNo) {
            $res['orderNo'] = $this->orderNo;
        }
        if (null !== $this->originOutTradeNo) {
            $res['originOutTradeNo'] = $this->originOutTradeNo;
        }
        if (null !== $this->outRefundNo) {
            $res['outRefundNo'] = $this->outRefundNo;
        }
        if (null !== $this->payChannel) {
            $res['payChannel'] = $this->payChannel;
        }
        if (null !== $this->payChannelAccountNo) {
            $res['payChannelAccountNo'] = $this->payChannelAccountNo;
        }
        if (null !== $this->payerUserId) {
            $res['payerUserId'] = $this->payerUserId;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->subInstId) {
            $res['subInstId'] = $this->subInstId;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAcquireRefundOrderResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['amount'])) {
            $model->amount = $map['amount'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtRefund'])) {
            $model->gmtRefund = $map['gmtRefund'];
        }
        if (isset($map['instId'])) {
            $model->instId = $map['instId'];
        }
        if (isset($map['orderNo'])) {
            $model->orderNo = $map['orderNo'];
        }
        if (isset($map['originOutTradeNo'])) {
            $model->originOutTradeNo = $map['originOutTradeNo'];
        }
        if (isset($map['outRefundNo'])) {
            $model->outRefundNo = $map['outRefundNo'];
        }
        if (isset($map['payChannel'])) {
            $model->payChannel = $map['payChannel'];
        }
        if (isset($map['payChannelAccountNo'])) {
            $model->payChannelAccountNo = $map['payChannelAccountNo'];
        }
        if (isset($map['payerUserId'])) {
            $model->payerUserId = $map['payerUserId'];
        }
        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['subInstId'])) {
            $model->subInstId = $map['subInstId'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
