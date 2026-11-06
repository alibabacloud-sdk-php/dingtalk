<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdvi_1_0\Models\PageKanjianRecordProcessResponseBody;

use AlibabaCloud\SDK\Dingtalk\Vdvi_1_0\Models\PageKanjianRecordProcessResponseBody\result\events;
use AlibabaCloud\SDK\Dingtalk\Vdvi_1_0\Models\PageKanjianRecordProcessResponseBody\result\segments;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var events[]
     */
    public $events;

    /**
     * @example exec0001
     *
     * @var string
     */
    public $executionId;

    /**
     * @var bool
     */
    public $hasMore;

    /**
     * @example o1
     *
     * @var string
     */
    public $nextCursor;

    /**
     * @example record0001
     *
     * @var string
     */
    public $recordId;

    /**
     * @var segments[]
     */
    public $segments;
    protected $_name = [
        'events' => 'events',
        'executionId' => 'executionId',
        'hasMore' => 'hasMore',
        'nextCursor' => 'nextCursor',
        'recordId' => 'recordId',
        'segments' => 'segments',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->events) {
            $res['events'] = [];
            if (null !== $this->events && \is_array($this->events)) {
                $n = 0;
                foreach ($this->events as $item) {
                    $res['events'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->executionId) {
            $res['executionId'] = $this->executionId;
        }
        if (null !== $this->hasMore) {
            $res['hasMore'] = $this->hasMore;
        }
        if (null !== $this->nextCursor) {
            $res['nextCursor'] = $this->nextCursor;
        }
        if (null !== $this->recordId) {
            $res['recordId'] = $this->recordId;
        }
        if (null !== $this->segments) {
            $res['segments'] = [];
            if (null !== $this->segments && \is_array($this->segments)) {
                $n = 0;
                foreach ($this->segments as $item) {
                    $res['segments'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['events'])) {
            if (!empty($map['events'])) {
                $model->events = [];
                $n = 0;
                foreach ($map['events'] as $item) {
                    $model->events[$n++] = null !== $item ? events::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['executionId'])) {
            $model->executionId = $map['executionId'];
        }
        if (isset($map['hasMore'])) {
            $model->hasMore = $map['hasMore'];
        }
        if (isset($map['nextCursor'])) {
            $model->nextCursor = $map['nextCursor'];
        }
        if (isset($map['recordId'])) {
            $model->recordId = $map['recordId'];
        }
        if (isset($map['segments'])) {
            if (!empty($map['segments'])) {
                $model->segments = [];
                $n = 0;
                foreach ($map['segments'] as $item) {
                    $model->segments[$n++] = null !== $item ? segments::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
