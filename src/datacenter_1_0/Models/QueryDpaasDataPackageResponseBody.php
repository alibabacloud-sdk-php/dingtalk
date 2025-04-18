<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdatacenter_1_0\Models;

use AlibabaCloud\Tea\Model;

class QueryDpaasDataPackageResponseBody extends Model
{
    /**
     * @var bool
     */
    public $buy;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var int
     */
    public $quota;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $usedNum;

    /**
     * @var bool
     */
    public $whiteCustomer;
    protected $_name = [
        'buy' => 'buy',
        'endDate' => 'endDate',
        'quota' => 'quota',
        'startDate' => 'startDate',
        'success' => 'success',
        'usedNum' => 'usedNum',
        'whiteCustomer' => 'whiteCustomer',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->buy) {
            $res['buy'] = $this->buy;
        }
        if (null !== $this->endDate) {
            $res['endDate'] = $this->endDate;
        }
        if (null !== $this->quota) {
            $res['quota'] = $this->quota;
        }
        if (null !== $this->startDate) {
            $res['startDate'] = $this->startDate;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->usedNum) {
            $res['usedNum'] = $this->usedNum;
        }
        if (null !== $this->whiteCustomer) {
            $res['whiteCustomer'] = $this->whiteCustomer;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDpaasDataPackageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['buy'])) {
            $model->buy = $map['buy'];
        }
        if (isset($map['endDate'])) {
            $model->endDate = $map['endDate'];
        }
        if (isset($map['quota'])) {
            $model->quota = $map['quota'];
        }
        if (isset($map['startDate'])) {
            $model->startDate = $map['startDate'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['usedNum'])) {
            $model->usedNum = $map['usedNum'];
        }
        if (isset($map['whiteCustomer'])) {
            $model->whiteCustomer = $map['whiteCustomer'];
        }

        return $model;
    }
}
