<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vesign_2_0\Models\GetSignDetailResponseBody;

use AlibabaCloud\Tea\Model;

class signers extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var float
     */
    public $signStatus;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $signerName;
    protected $_name = [
        'signStatus' => 'signStatus',
        'signerName' => 'signerName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->signStatus) {
            $res['signStatus'] = $this->signStatus;
        }
        if (null !== $this->signerName) {
            $res['signerName'] = $this->signerName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return signers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['signStatus'])) {
            $model->signStatus = $map['signStatus'];
        }
        if (isset($map['signerName'])) {
            $model->signerName = $map['signerName'];
        }

        return $model;
    }
}
