<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdoc_2_0\Models;

use AlibabaCloud\SDK\Dingtalk\Vdoc_2_0\Models\SpaceOpenVOResult\owner;
use AlibabaCloud\SDK\Dingtalk\Vdoc_2_0\Models\SpaceOpenVOResult\visitorInfo;
use AlibabaCloud\Tea\Model;

class SpaceOpenVOResult extends Model
{
    /**
     * @description 知识库id。
     *
     * @var string
     */
    public $id;

    /**
     * @description 知识库名称。
     *
     * @var string
     */
    public $name;

    /**
     * @description 知识库所有者。
     *
     * @var owner
     */
    public $owner;

    /**
     * @description 访问者对当前知识库的权限等信息。
     *
     * @var visitorInfo
     */
    public $visitorInfo;
    protected $_name = [
        'id'          => 'id',
        'name'        => 'name',
        'owner'       => 'owner',
        'visitorInfo' => 'visitorInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['owner'] = null !== $this->owner ? $this->owner->toMap() : null;
        }
        if (null !== $this->visitorInfo) {
            $res['visitorInfo'] = null !== $this->visitorInfo ? $this->visitorInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SpaceOpenVOResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['owner'])) {
            $model->owner = owner::fromMap($map['owner']);
        }
        if (isset($map['visitorInfo'])) {
            $model->visitorInfo = visitorInfo::fromMap($map['visitorInfo']);
        }

        return $model;
    }
}
