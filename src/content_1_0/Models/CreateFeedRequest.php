<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcontent_1_0\Models;

use AlibabaCloud\SDK\Dingtalk\Vcontent_1_0\Models\CreateFeedRequest\courseInfo;
use AlibabaCloud\SDK\Dingtalk\Vcontent_1_0\Models\CreateFeedRequest\feedInfo;
use AlibabaCloud\Tea\Model;

class CreateFeedRequest extends Model
{
    /**
     * @description 课程相关信息
     *
     * @var courseInfo
     */
    public $courseInfo;

    /**
     * @description 内容相关信息
     *
     * @var feedInfo
     */
    public $feedInfo;

    /**
     * @description 发布者的用户Id
     *
     * @var string
     */
    public $createUserId;
    protected $_name = [
        'courseInfo'   => 'courseInfo',
        'feedInfo'     => 'feedInfo',
        'createUserId' => 'createUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->courseInfo) {
            $res['courseInfo'] = null !== $this->courseInfo ? $this->courseInfo->toMap() : null;
        }
        if (null !== $this->feedInfo) {
            $res['feedInfo'] = null !== $this->feedInfo ? $this->feedInfo->toMap() : null;
        }
        if (null !== $this->createUserId) {
            $res['createUserId'] = $this->createUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFeedRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['courseInfo'])) {
            $model->courseInfo = courseInfo::fromMap($map['courseInfo']);
        }
        if (isset($map['feedInfo'])) {
            $model->feedInfo = feedInfo::fromMap($map['feedInfo']);
        }
        if (isset($map['createUserId'])) {
            $model->createUserId = $map['createUserId'];
        }

        return $model;
    }
}
