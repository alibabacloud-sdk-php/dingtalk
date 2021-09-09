<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vrobot_1_0\Models\BatchOTOQueryResponseBody;

use AlibabaCloud\Tea\Model;

class messageReadInfoList extends Model
{
    /**
     * @description 姓名
     *
     * @var string
     */
    public $name;

    /**
     * @description 工号
     *
     * @var string
     */
    public $userId;

    /**
     * @description 已读状态
     *
     * @var string
     */
    public $readStatus;

    /**
     * @description 已读时间
     *
     * @var int
     */
    public $readTimestamp;
    protected $_name = [
        'name'          => 'name',
        'userId'        => 'userId',
        'readStatus'    => 'readStatus',
        'readTimestamp' => 'readTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        if (null !== $this->readStatus) {
            $res['readStatus'] = $this->readStatus;
        }
        if (null !== $this->readTimestamp) {
            $res['readTimestamp'] = $this->readTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return messageReadInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }
        if (isset($map['readStatus'])) {
            $model->readStatus = $map['readStatus'];
        }
        if (isset($map['readTimestamp'])) {
            $model->readTimestamp = $map['readTimestamp'];
        }

        return $model;
    }
}