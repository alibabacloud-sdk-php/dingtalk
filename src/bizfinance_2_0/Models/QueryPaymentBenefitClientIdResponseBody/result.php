<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vbizfinance_2_0\Models\QueryPaymentBenefitClientIdResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $companyEnableCount;

    /**
     * @var int
     */
    public $companyPayEnableCount;

    /**
     * @var int
     */
    public $companyPayUsedCount;

    /**
     * @var int
     */
    public $companyUsedCount;

    /**
     * @var int
     */
    public $personEnableCount;

    /**
     * @var int
     */
    public $personUsedCount;

    /**
     * @var int
     */
    public $personalPayEnableCount;

    /**
     * @var int
     */
    public $personalPayUsedCount;
    protected $_name = [
        'companyEnableCount' => 'companyEnableCount',
        'companyPayEnableCount' => 'companyPayEnableCount',
        'companyPayUsedCount' => 'companyPayUsedCount',
        'companyUsedCount' => 'companyUsedCount',
        'personEnableCount' => 'personEnableCount',
        'personUsedCount' => 'personUsedCount',
        'personalPayEnableCount' => 'personalPayEnableCount',
        'personalPayUsedCount' => 'personalPayUsedCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->companyEnableCount) {
            $res['companyEnableCount'] = $this->companyEnableCount;
        }
        if (null !== $this->companyPayEnableCount) {
            $res['companyPayEnableCount'] = $this->companyPayEnableCount;
        }
        if (null !== $this->companyPayUsedCount) {
            $res['companyPayUsedCount'] = $this->companyPayUsedCount;
        }
        if (null !== $this->companyUsedCount) {
            $res['companyUsedCount'] = $this->companyUsedCount;
        }
        if (null !== $this->personEnableCount) {
            $res['personEnableCount'] = $this->personEnableCount;
        }
        if (null !== $this->personUsedCount) {
            $res['personUsedCount'] = $this->personUsedCount;
        }
        if (null !== $this->personalPayEnableCount) {
            $res['personalPayEnableCount'] = $this->personalPayEnableCount;
        }
        if (null !== $this->personalPayUsedCount) {
            $res['personalPayUsedCount'] = $this->personalPayUsedCount;
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
        if (isset($map['companyEnableCount'])) {
            $model->companyEnableCount = $map['companyEnableCount'];
        }
        if (isset($map['companyPayEnableCount'])) {
            $model->companyPayEnableCount = $map['companyPayEnableCount'];
        }
        if (isset($map['companyPayUsedCount'])) {
            $model->companyPayUsedCount = $map['companyPayUsedCount'];
        }
        if (isset($map['companyUsedCount'])) {
            $model->companyUsedCount = $map['companyUsedCount'];
        }
        if (isset($map['personEnableCount'])) {
            $model->personEnableCount = $map['personEnableCount'];
        }
        if (isset($map['personUsedCount'])) {
            $model->personUsedCount = $map['personUsedCount'];
        }
        if (isset($map['personalPayEnableCount'])) {
            $model->personalPayEnableCount = $map['personalPayEnableCount'];
        }
        if (isset($map['personalPayUsedCount'])) {
            $model->personalPayUsedCount = $map['personalPayUsedCount'];
        }

        return $model;
    }
}
