<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vbizfinance_2_0\Models\BatchQueryPaymentStatusForLinkResponseBody\result\subOrderList;

use AlibabaCloud\SDK\Dingtalk\Vbizfinance_2_0\Models\BatchQueryPaymentStatusForLinkResponseBody\result\subOrderList\payerAccountInfo\bankOpenDTO;
use AlibabaCloud\Tea\Model;

class payerAccountInfo extends Model
{
    /**
     * @var string
     */
    public $accountType;

    /**
     * @var bankOpenDTO
     */
    public $bankOpenDTO;
    protected $_name = [
        'accountType' => 'accountType',
        'bankOpenDTO' => 'bankOpenDTO',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountType) {
            $res['accountType'] = $this->accountType;
        }
        if (null !== $this->bankOpenDTO) {
            $res['bankOpenDTO'] = null !== $this->bankOpenDTO ? $this->bankOpenDTO->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return payerAccountInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountType'])) {
            $model->accountType = $map['accountType'];
        }
        if (isset($map['bankOpenDTO'])) {
            $model->bankOpenDTO = bankOpenDTO::fromMap($map['bankOpenDTO']);
        }

        return $model;
    }
}
