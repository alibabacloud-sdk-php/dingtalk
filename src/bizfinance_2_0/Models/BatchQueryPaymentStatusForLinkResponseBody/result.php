<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vbizfinance_2_0\Models\BatchQueryPaymentStatusForLinkResponseBody;

use AlibabaCloud\SDK\Dingtalk\Vbizfinance_2_0\Models\BatchQueryPaymentStatusForLinkResponseBody\result\subOrderList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
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
    public $mainOrderNo;

    /**
     * @var string
     */
    public $mainOrderStatus;

    /**
     * @var subOrderList[]
     */
    public $subOrderList;
    protected $_name = [
        'corpId' => 'corpId',
        'instanceId' => 'instanceId',
        'mainOrderNo' => 'mainOrderNo',
        'mainOrderStatus' => 'mainOrderStatus',
        'subOrderList' => 'subOrderList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['corpId'] = $this->corpId;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->mainOrderNo) {
            $res['mainOrderNo'] = $this->mainOrderNo;
        }
        if (null !== $this->mainOrderStatus) {
            $res['mainOrderStatus'] = $this->mainOrderStatus;
        }
        if (null !== $this->subOrderList) {
            $res['subOrderList'] = [];
            if (null !== $this->subOrderList && \is_array($this->subOrderList)) {
                $n = 0;
                foreach ($this->subOrderList as $item) {
                    $res['subOrderList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['corpId'])) {
            $model->corpId = $map['corpId'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['mainOrderNo'])) {
            $model->mainOrderNo = $map['mainOrderNo'];
        }
        if (isset($map['mainOrderStatus'])) {
            $model->mainOrderStatus = $map['mainOrderStatus'];
        }
        if (isset($map['subOrderList'])) {
            if (!empty($map['subOrderList'])) {
                $model->subOrderList = [];
                $n = 0;
                foreach ($map['subOrderList'] as $item) {
                    $model->subOrderList[$n++] = null !== $item ? subOrderList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
