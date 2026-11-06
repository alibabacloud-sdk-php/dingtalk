<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdvi_1_0\Models;

use AlibabaCloud\Tea\Model;

class ListKanjianRecordsRequest extends Model
{
    /**
     * @example aWQ6MTAw
     *
     * @var string
     */
    public $cursor;

    /**
     * @example BV0000000001
     *
     * @var string
     */
    public $deviceSn;

    /**
     * @example 1760086400000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example task0001
     *
     * @var string
     */
    public $mainTaskId;

    /**
     * @var string
     */
    public $operatorUserId;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 1760000000000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'cursor' => 'cursor',
        'deviceSn' => 'deviceSn',
        'endTime' => 'endTime',
        'mainTaskId' => 'mainTaskId',
        'operatorUserId' => 'operatorUserId',
        'pageSize' => 'pageSize',
        'startTime' => 'startTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cursor) {
            $res['cursor'] = $this->cursor;
        }
        if (null !== $this->deviceSn) {
            $res['deviceSn'] = $this->deviceSn;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->mainTaskId) {
            $res['mainTaskId'] = $this->mainTaskId;
        }
        if (null !== $this->operatorUserId) {
            $res['operatorUserId'] = $this->operatorUserId;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListKanjianRecordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cursor'])) {
            $model->cursor = $map['cursor'];
        }
        if (isset($map['deviceSn'])) {
            $model->deviceSn = $map['deviceSn'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['mainTaskId'])) {
            $model->mainTaskId = $map['mainTaskId'];
        }
        if (isset($map['operatorUserId'])) {
            $model->operatorUserId = $map['operatorUserId'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
