<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vconference_1_0\Models;

use AlibabaCloud\Tea\Model;

class StartCloudRecordRequest extends Model
{
    /**
     * @description 会议发起人UID
     *
     * @var string
     */
    public $unionId;

    /**
     * @description 小窗位置
     *
     * @var string
     */
    public $smallWindowPosition;

    /**
     * @description 录制模版
     *
     * @var string
     */
    public $mode;
    protected $_name = [
        'unionId'             => 'unionId',
        'smallWindowPosition' => 'smallWindowPosition',
        'mode'                => 'mode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->unionId) {
            $res['unionId'] = $this->unionId;
        }
        if (null !== $this->smallWindowPosition) {
            $res['smallWindowPosition'] = $this->smallWindowPosition;
        }
        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartCloudRecordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['unionId'])) {
            $model->unionId = $map['unionId'];
        }
        if (isset($map['smallWindowPosition'])) {
            $model->smallWindowPosition = $map['smallWindowPosition'];
        }
        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }

        return $model;
    }
}