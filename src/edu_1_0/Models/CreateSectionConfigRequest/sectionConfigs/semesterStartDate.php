<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vedu_1_0\Models\CreateSectionConfigRequest\sectionConfigs;

use AlibabaCloud\Tea\Model;

class semesterStartDate extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 31
     *
     * @var int
     */
    public $dayOfMonth;

    /**
     * @description This parameter is required.
     *
     * @example 8
     *
     * @var int
     */
    public $month;

    /**
     * @description This parameter is required.
     *
     * @example 2021
     *
     * @var int
     */
    public $year;
    protected $_name = [
        'dayOfMonth' => 'dayOfMonth',
        'month' => 'month',
        'year' => 'year',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dayOfMonth) {
            $res['dayOfMonth'] = $this->dayOfMonth;
        }
        if (null !== $this->month) {
            $res['month'] = $this->month;
        }
        if (null !== $this->year) {
            $res['year'] = $this->year;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return semesterStartDate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dayOfMonth'])) {
            $model->dayOfMonth = $map['dayOfMonth'];
        }
        if (isset($map['month'])) {
            $model->month = $map['month'];
        }
        if (isset($map['year'])) {
            $model->year = $map['year'];
        }

        return $model;
    }
}
