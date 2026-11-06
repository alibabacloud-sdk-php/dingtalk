<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdvi_1_0\Models\PageKanjianRecordAnalysisResponseBody;

use AlibabaCloud\SDK\Dingtalk\Vdvi_1_0\Models\PageKanjianRecordAnalysisResponseBody\result\details;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var details[]
     */
    public $details;

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
     * @example cGc6bzE
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
    protected $_name = [
        'details' => 'details',
        'executionId' => 'executionId',
        'hasMore' => 'hasMore',
        'nextCursor' => 'nextCursor',
        'recordId' => 'recordId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->details) {
            $res['details'] = [];
            if (null !== $this->details && \is_array($this->details)) {
                $n = 0;
                foreach ($this->details as $item) {
                    $res['details'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['details'])) {
            if (!empty($map['details'])) {
                $model->details = [];
                $n = 0;
                foreach ($map['details'] as $item) {
                    $model->details[$n++] = null !== $item ? details::fromMap($item) : $item;
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

        return $model;
    }
}
