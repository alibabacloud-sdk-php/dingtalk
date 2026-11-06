<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdvi_1_0\Models\PageKanjianRecordProcessResponseBody\result;

use AlibabaCloud\SDK\Dingtalk\Vdvi_1_0\Models\PageKanjianRecordProcessResponseBody\result\segments\timeIntervals;
use AlibabaCloud\Tea\Model;

class segments extends Model
{
    /**
     * @var string[]
     */
    public $childEventIds;

    /**
     * @example check the shelf
     *
     * @var string
     */
    public $description;

    /**
     * @example shelf-area
     *
     * @var string
     */
    public $segmentArea;

    /**
     * @example seg0001
     *
     * @var string
     */
    public $segmentId;

    /**
     * @var timeIntervals[]
     */
    public $timeIntervals;
    protected $_name = [
        'childEventIds' => 'childEventIds',
        'description' => 'description',
        'segmentArea' => 'segmentArea',
        'segmentId' => 'segmentId',
        'timeIntervals' => 'timeIntervals',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->childEventIds) {
            $res['childEventIds'] = $this->childEventIds;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->segmentArea) {
            $res['segmentArea'] = $this->segmentArea;
        }
        if (null !== $this->segmentId) {
            $res['segmentId'] = $this->segmentId;
        }
        if (null !== $this->timeIntervals) {
            $res['timeIntervals'] = [];
            if (null !== $this->timeIntervals && \is_array($this->timeIntervals)) {
                $n = 0;
                foreach ($this->timeIntervals as $item) {
                    $res['timeIntervals'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return segments
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['childEventIds'])) {
            if (!empty($map['childEventIds'])) {
                $model->childEventIds = $map['childEventIds'];
            }
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['segmentArea'])) {
            $model->segmentArea = $map['segmentArea'];
        }
        if (isset($map['segmentId'])) {
            $model->segmentId = $map['segmentId'];
        }
        if (isset($map['timeIntervals'])) {
            if (!empty($map['timeIntervals'])) {
                $model->timeIntervals = [];
                $n = 0;
                foreach ($map['timeIntervals'] as $item) {
                    $model->timeIntervals[$n++] = null !== $item ? timeIntervals::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
