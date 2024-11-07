<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vbizfinance_2_0\Models\QueryPaymentStatusResponseBody;

use AlibabaCloud\SDK\Dingtalk\Vbizfinance_2_0\Models\QueryPaymentStatusResponseBody\payeeAccountInfo\bankOpenDTO;
use AlibabaCloud\Tea\Model;

class payeeAccountInfo extends Model
{
    /**
     * @var bankOpenDTO
     */
    public $bankOpenDTO;
    protected $_name = [
        'bankOpenDTO' => 'bankOpenDTO',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bankOpenDTO) {
            $res['bankOpenDTO'] = null !== $this->bankOpenDTO ? $this->bankOpenDTO->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return payeeAccountInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bankOpenDTO'])) {
            $model->bankOpenDTO = bankOpenDTO::fromMap($map['bankOpenDTO']);
        }

        return $model;
    }
}