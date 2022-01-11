<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vedu_1_0\Models\QuerySchoolUserFaceResponseBody;

use AlibabaCloud\Tea\Model;

class userFaceList extends Model
{
    /**
     * @description 人脸id
     *
     * @var string
     */
    public $faceId;

    /**
     * @description 员工id
     *
     * @var string
     */
    public $userId;

    /**
     * @description 员工名字
     *
     * @var string
     */
    public $name;

    /**
     * @description 员工状态
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'faceId' => 'faceId',
        'userId' => 'userId',
        'name'   => 'name',
        'status' => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faceId) {
            $res['faceId'] = $this->faceId;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userFaceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['faceId'])) {
            $model->faceId = $map['faceId'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}