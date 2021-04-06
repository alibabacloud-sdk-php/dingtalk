<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vlive_1_0\Models;

use AlibabaCloud\Tea\Model;

class EditFeedReplayRequest extends Model
{
    /**
     * @description 用户id(剪辑者的组织内id)
     *
     * @var string
     */
    public $userId;

    /**
     * @description 剪辑的起始位置的时间戳（在原开始结束的时间戳之内）
     *
     * @var int
     */
    public $editStartTime;

    /**
     * @description 剪辑的结束位置的时间戳（在原开始结束的时间戳之内）
     *
     * @var int
     */
    public $editEndTime;
    protected $_name = [
        'userId'        => 'userId',
        'editStartTime' => 'editStartTime',
        'editEndTime'   => 'editEndTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        if (null !== $this->editStartTime) {
            $res['editStartTime'] = $this->editStartTime;
        }
        if (null !== $this->editEndTime) {
            $res['editEndTime'] = $this->editEndTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EditFeedReplayRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }
        if (isset($map['editStartTime'])) {
            $model->editStartTime = $map['editStartTime'];
        }
        if (isset($map['editEndTime'])) {
            $model->editEndTime = $map['editEndTime'];
        }

        return $model;
    }
}
