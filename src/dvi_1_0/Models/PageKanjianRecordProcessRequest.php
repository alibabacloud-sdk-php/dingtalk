<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdvi_1_0\Models;

use AlibabaCloud\Tea\Model;

class PageKanjianRecordProcessRequest extends Model
{
    /**
     * @example o1
     *
     * @var string
     */
    public $cursor;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @description This parameter is required.
     *
     * @example record0001
     *
     * @var string
     */
    public $recordId;
    protected $_name = [
        'cursor' => 'cursor',
        'pageSize' => 'pageSize',
        'recordId' => 'recordId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cursor) {
            $res['cursor'] = $this->cursor;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->recordId) {
            $res['recordId'] = $this->recordId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PageKanjianRecordProcessRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cursor'])) {
            $model->cursor = $map['cursor'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['recordId'])) {
            $model->recordId = $map['recordId'];
        }

        return $model;
    }
}
