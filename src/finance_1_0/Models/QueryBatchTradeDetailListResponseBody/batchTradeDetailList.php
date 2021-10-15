<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vfinance_1_0\Models\QueryBatchTradeDetailListResponseBody;

use AlibabaCloud\Tea\Model;

class batchTradeDetailList extends Model
{
    /**
     * @description 序号
     *
     * @var int
     */
    public $serialNo;

    /**
     * @description 明细单号
     *
     * @var string
     */
    public $detailNo;

    /**
     * @description 收款人账号
     *
     * @var string
     */
    public $payeeAccountNo;

    /**
     * @description 收款账号类型
     *
     * @var string
     */
    public $payeeAccountType;

    /**
     * @description 状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 收款方电子钱包持有者姓名
     *
     * @var string
     */
    public $payeeAccountName;

    /**
     * @description 金额
     *
     * @var string
     */
    public $amount;

    /**
     * @description 备注
     *
     * @var string
     */
    public $memo;

    /**
     * @description 订单时间时间
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description 支付完成时间
     *
     * @var string
     */
    public $gmtFinish;
    protected $_name = [
        'serialNo'         => 'serialNo',
        'detailNo'         => 'detailNo',
        'payeeAccountNo'   => 'payeeAccountNo',
        'payeeAccountType' => 'payeeAccountType',
        'status'           => 'status',
        'payeeAccountName' => 'payeeAccountName',
        'amount'           => 'amount',
        'memo'             => 'memo',
        'gmtCreate'        => 'gmtCreate',
        'gmtFinish'        => 'gmtFinish',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serialNo) {
            $res['serialNo'] = $this->serialNo;
        }
        if (null !== $this->detailNo) {
            $res['detailNo'] = $this->detailNo;
        }
        if (null !== $this->payeeAccountNo) {
            $res['payeeAccountNo'] = $this->payeeAccountNo;
        }
        if (null !== $this->payeeAccountType) {
            $res['payeeAccountType'] = $this->payeeAccountType;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->payeeAccountName) {
            $res['payeeAccountName'] = $this->payeeAccountName;
        }
        if (null !== $this->amount) {
            $res['amount'] = $this->amount;
        }
        if (null !== $this->memo) {
            $res['memo'] = $this->memo;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtFinish) {
            $res['gmtFinish'] = $this->gmtFinish;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return batchTradeDetailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['serialNo'])) {
            $model->serialNo = $map['serialNo'];
        }
        if (isset($map['detailNo'])) {
            $model->detailNo = $map['detailNo'];
        }
        if (isset($map['payeeAccountNo'])) {
            $model->payeeAccountNo = $map['payeeAccountNo'];
        }
        if (isset($map['payeeAccountType'])) {
            $model->payeeAccountType = $map['payeeAccountType'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['payeeAccountName'])) {
            $model->payeeAccountName = $map['payeeAccountName'];
        }
        if (isset($map['amount'])) {
            $model->amount = $map['amount'];
        }
        if (isset($map['memo'])) {
            $model->memo = $map['memo'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtFinish'])) {
            $model->gmtFinish = $map['gmtFinish'];
        }

        return $model;
    }
}