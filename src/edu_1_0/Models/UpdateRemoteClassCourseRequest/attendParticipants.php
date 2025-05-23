<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vedu_1_0\Models\UpdateRemoteClassCourseRequest;

use AlibabaCloud\Tea\Model;

class attendParticipants extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example ding234567
     *
     * @var string
     */
    public $corpId;

    /**
     * @description This parameter is required.
     *
     * @example 234567
     *
     * @var string
     */
    public $participantId;
    protected $_name = [
        'corpId' => 'corpId',
        'participantId' => 'participantId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpId) {
            $res['corpId'] = $this->corpId;
        }
        if (null !== $this->participantId) {
            $res['participantId'] = $this->participantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attendParticipants
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['corpId'])) {
            $model->corpId = $map['corpId'];
        }
        if (isset($map['participantId'])) {
            $model->participantId = $map['participantId'];
        }

        return $model;
    }
}
