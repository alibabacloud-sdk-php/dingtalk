<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vbizfinance_2_0\Models\CreateBatchPaymentWaitPayOrderRequest;

use AlibabaCloud\SDK\Dingtalk\Vbizfinance_2_0\Models\CreateBatchPaymentWaitPayOrderRequest\paymentDetailList\payeeAccountDTO;
use AlibabaCloud\Tea\Model;

class paymentDetailList extends Model
{
    /**
     * @var string
     */
    public $amount;

    /**
     * @var payeeAccountDTO
     */
    public $payeeAccountDTO;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $subOutBizNo;

    /**
     * @var string
     */
    public $usage;
    protected $_name = [
        'amount' => 'amount',
        'payeeAccountDTO' => 'payeeAccountDTO',
        'remark' => 'remark',
        'subOutBizNo' => 'subOutBizNo',
        'usage' => 'usage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['amount'] = $this->amount;
        }
        if (null !== $this->payeeAccountDTO) {
            $res['payeeAccountDTO'] = null !== $this->payeeAccountDTO ? $this->payeeAccountDTO->toMap() : null;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->subOutBizNo) {
            $res['subOutBizNo'] = $this->subOutBizNo;
        }
        if (null !== $this->usage) {
            $res['usage'] = $this->usage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return paymentDetailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['amount'])) {
            $model->amount = $map['amount'];
        }
        if (isset($map['payeeAccountDTO'])) {
            $model->payeeAccountDTO = payeeAccountDTO::fromMap($map['payeeAccountDTO']);
        }
        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }
        if (isset($map['subOutBizNo'])) {
            $model->subOutBizNo = $map['subOutBizNo'];
        }
        if (isset($map['usage'])) {
            $model->usage = $map['usage'];
        }

        return $model;
    }
}
