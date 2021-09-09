<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vvillage_1_0\Models\ListResidentUserInfosResponseBody;

use AlibabaCloud\SDK\Dingtalk\Vvillage_1_0\Models\ListResidentUserInfosResponseBody\userList\roles;
use AlibabaCloud\Tea\Model;

class userList extends Model
{
    /**
     * @description 员工 ID
     *
     * @var string
     */
    public $userId;

    /**
     * @description 员工名字
     *
     * @var string
     */
    public $userName;

    /**
     * @description 标签列表
     *
     * @var roles[]
     */
    public $roles;

    /**
     * @description 员工特征
     *
     * @var string
     */
    public $feature;

    /**
     * @description 钉钉唯一标识
     *
     * @var string
     */
    public $unionId;
    protected $_name = [
        'userId'   => 'userId',
        'userName' => 'userName',
        'roles'    => 'roles',
        'feature'  => 'feature',
        'unionId'  => 'unionId',
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
        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
        }
        if (null !== $this->roles) {
            $res['roles'] = [];
            if (null !== $this->roles && \is_array($this->roles)) {
                $n = 0;
                foreach ($this->roles as $item) {
                    $res['roles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->feature) {
            $res['feature'] = $this->feature;
        }
        if (null !== $this->unionId) {
            $res['unionId'] = $this->unionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }
        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }
        if (isset($map['roles'])) {
            if (!empty($map['roles'])) {
                $model->roles = [];
                $n            = 0;
                foreach ($map['roles'] as $item) {
                    $model->roles[$n++] = null !== $item ? roles::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['feature'])) {
            $model->feature = $map['feature'];
        }
        if (isset($map['unionId'])) {
            $model->unionId = $map['unionId'];
        }

        return $model;
    }
}