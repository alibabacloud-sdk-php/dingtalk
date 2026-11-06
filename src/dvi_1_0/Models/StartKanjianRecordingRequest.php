<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdvi_1_0\Models;

use AlibabaCloud\Tea\Model;

class StartKanjianRecordingRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example BV0000000001
     *
     * @var string
     */
    public $deviceSn;

    /**
     * @example task0001
     *
     * @var string
     */
    public $mainTaskId;

    /**
     * @description This parameter is required.
     *
     * @example manager1234
     *
     * @var string
     */
    public $operatorUserId;

    /**
     * @example morning-check
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'deviceSn' => 'deviceSn',
        'mainTaskId' => 'mainTaskId',
        'operatorUserId' => 'operatorUserId',
        'title' => 'title',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceSn) {
            $res['deviceSn'] = $this->deviceSn;
        }
        if (null !== $this->mainTaskId) {
            $res['mainTaskId'] = $this->mainTaskId;
        }
        if (null !== $this->operatorUserId) {
            $res['operatorUserId'] = $this->operatorUserId;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartKanjianRecordingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['deviceSn'])) {
            $model->deviceSn = $map['deviceSn'];
        }
        if (isset($map['mainTaskId'])) {
            $model->mainTaskId = $map['mainTaskId'];
        }
        if (isset($map['operatorUserId'])) {
            $model->operatorUserId = $map['operatorUserId'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
