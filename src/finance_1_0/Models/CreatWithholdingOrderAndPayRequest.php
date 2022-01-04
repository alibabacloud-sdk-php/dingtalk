<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vfinance_1_0\Models;

use AlibabaCloud\SDK\Dingtalk\Vfinance_1_0\Models\CreatWithholdingOrderAndPayRequest\otherPayChannelDetailInfoList;
use AlibabaCloud\Tea\Model;

class CreatWithholdingOrderAndPayRequest extends Model
{
    /**
     * @description 主机构编号
     *
     * @var string
     */
    public $instId;

    /**
     * @description 子机构编号
     *
     * @var string
     */
    public $subInstId;

    /**
     * @description 付款人staffId
     *
     * @var string
     */
    public $payerUserId;

    /**
     * @description 支付渠道
     *
     * @var string
     */
    public $payChannel;

    /**
     * @description 扣款金额
     *
     * @var string
     */
    public $amount;

    /**
     * @description 外部订单号
     *
     * @var string
     */
    public $outTradeNo;

    /**
     * @description 代扣标题
     *
     * @var string
     */
    public $title;

    /**
     * @description 代扣备注
     *
     * @var string
     */
    public $remark;

    /**
     * @description 代扣过期时间
     *
     * @var string
     */
    public $timeOutExpress;

    /**
     * @description 其他资金渠道付款明细
     *
     * @var otherPayChannelDetailInfoList[]
     */
    public $otherPayChannelDetailInfoList;

    /**
     * @description 组织id
     *
     * @var int
     */
    public $dingOrgId;

    /**
     * @description isv组织id
     *
     * @var int
     */
    public $dingIsvOrgId;

    /**
     * @description 应用id
     *
     * @var string
     */
    public $dingClientId;

    /**
     * @description 应用类型
     *
     * @var int
     */
    public $dingTokenGrantType;
    protected $_name = [
        'instId'                        => 'instId',
        'subInstId'                     => 'subInstId',
        'payerUserId'                   => 'payerUserId',
        'payChannel'                    => 'payChannel',
        'amount'                        => 'amount',
        'outTradeNo'                    => 'outTradeNo',
        'title'                         => 'title',
        'remark'                        => 'remark',
        'timeOutExpress'                => 'timeOutExpress',
        'otherPayChannelDetailInfoList' => 'otherPayChannelDetailInfoList',
        'dingOrgId'                     => 'dingOrgId',
        'dingIsvOrgId'                  => 'dingIsvOrgId',
        'dingClientId'                  => 'dingClientId',
        'dingTokenGrantType'            => 'dingTokenGrantType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instId) {
            $res['instId'] = $this->instId;
        }
        if (null !== $this->subInstId) {
            $res['subInstId'] = $this->subInstId;
        }
        if (null !== $this->payerUserId) {
            $res['payerUserId'] = $this->payerUserId;
        }
        if (null !== $this->payChannel) {
            $res['payChannel'] = $this->payChannel;
        }
        if (null !== $this->amount) {
            $res['amount'] = $this->amount;
        }
        if (null !== $this->outTradeNo) {
            $res['outTradeNo'] = $this->outTradeNo;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->timeOutExpress) {
            $res['timeOutExpress'] = $this->timeOutExpress;
        }
        if (null !== $this->otherPayChannelDetailInfoList) {
            $res['otherPayChannelDetailInfoList'] = [];
            if (null !== $this->otherPayChannelDetailInfoList && \is_array($this->otherPayChannelDetailInfoList)) {
                $n = 0;
                foreach ($this->otherPayChannelDetailInfoList as $item) {
                    $res['otherPayChannelDetailInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dingOrgId) {
            $res['dingOrgId'] = $this->dingOrgId;
        }
        if (null !== $this->dingIsvOrgId) {
            $res['dingIsvOrgId'] = $this->dingIsvOrgId;
        }
        if (null !== $this->dingClientId) {
            $res['dingClientId'] = $this->dingClientId;
        }
        if (null !== $this->dingTokenGrantType) {
            $res['dingTokenGrantType'] = $this->dingTokenGrantType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatWithholdingOrderAndPayRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instId'])) {
            $model->instId = $map['instId'];
        }
        if (isset($map['subInstId'])) {
            $model->subInstId = $map['subInstId'];
        }
        if (isset($map['payerUserId'])) {
            $model->payerUserId = $map['payerUserId'];
        }
        if (isset($map['payChannel'])) {
            $model->payChannel = $map['payChannel'];
        }
        if (isset($map['amount'])) {
            $model->amount = $map['amount'];
        }
        if (isset($map['outTradeNo'])) {
            $model->outTradeNo = $map['outTradeNo'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }
        if (isset($map['timeOutExpress'])) {
            $model->timeOutExpress = $map['timeOutExpress'];
        }
        if (isset($map['otherPayChannelDetailInfoList'])) {
            if (!empty($map['otherPayChannelDetailInfoList'])) {
                $model->otherPayChannelDetailInfoList = [];
                $n                                    = 0;
                foreach ($map['otherPayChannelDetailInfoList'] as $item) {
                    $model->otherPayChannelDetailInfoList[$n++] = null !== $item ? otherPayChannelDetailInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['dingOrgId'])) {
            $model->dingOrgId = $map['dingOrgId'];
        }
        if (isset($map['dingIsvOrgId'])) {
            $model->dingIsvOrgId = $map['dingIsvOrgId'];
        }
        if (isset($map['dingClientId'])) {
            $model->dingClientId = $map['dingClientId'];
        }
        if (isset($map['dingTokenGrantType'])) {
            $model->dingTokenGrantType = $map['dingTokenGrantType'];
        }

        return $model;
    }
}
