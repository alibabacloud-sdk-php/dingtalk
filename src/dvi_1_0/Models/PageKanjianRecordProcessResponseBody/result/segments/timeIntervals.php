<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdvi_1_0\Models\PageKanjianRecordProcessResponseBody\result\segments;

use AlibabaCloud\Tea\Model;

class timeIntervals extends Model
{
    /**
     * @example 60000
     *
     * @var int
     */
    public $endMs;

    /**
     * @example 0
     *
     * @var int
     */
    public $startMs;
    protected $_name = [
        'endMs' => 'endMs',
        'startMs' => 'startMs',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endMs) {
            $res['endMs'] = $this->endMs;
        }
        if (null !== $this->startMs) {
            $res['startMs'] = $this->startMs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timeIntervals
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endMs'])) {
            $model->endMs = $map['endMs'];
        }
        if (isset($map['startMs'])) {
            $model->startMs = $map['startMs'];
        }

        return $model;
    }
}
