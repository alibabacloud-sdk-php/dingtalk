<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcontact_1_0\Models\ListContactHideSettingsResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description 设置名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 设置描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 要隐藏的员工列表
     *
     * @var string[]
     */
    public $objectStaffIds;

    /**
     * @description 要隐藏的部门列表
     *
     * @var int[]
     */
    public $objectDeptIds;

    /**
     * @description 要影藏的角色列表
     *
     * @var int[]
     */
    public $objectTagIds;

    /**
     * @description 白名单用户列表
     *
     * @var string[]
     */
    public $excludeStaffIds;

    /**
     * @description 白名单部门列表
     *
     * @var int[]
     */
    public $excludeDeptIds;

    /**
     * @description 白名单角色列表
     *
     * @var int[]
     */
    public $excludeTagIds;

    /**
     * @description 规则是否生效
     *
     * @var bool
     */
    public $active;

    /**
     * @description settingId
     *
     * @var int
     */
    public $id;
    protected $_name = [
        'name'            => 'name',
        'description'     => 'description',
        'objectStaffIds'  => 'objectStaffIds',
        'objectDeptIds'   => 'objectDeptIds',
        'objectTagIds'    => 'objectTagIds',
        'excludeStaffIds' => 'excludeStaffIds',
        'excludeDeptIds'  => 'excludeDeptIds',
        'excludeTagIds'   => 'excludeTagIds',
        'active'          => 'active',
        'id'              => 'id',
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
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->objectStaffIds) {
            $res['objectStaffIds'] = $this->objectStaffIds;
        }
        if (null !== $this->objectDeptIds) {
            $res['objectDeptIds'] = $this->objectDeptIds;
        }
        if (null !== $this->objectTagIds) {
            $res['objectTagIds'] = $this->objectTagIds;
        }
        if (null !== $this->excludeStaffIds) {
            $res['excludeStaffIds'] = $this->excludeStaffIds;
        }
        if (null !== $this->excludeDeptIds) {
            $res['excludeDeptIds'] = $this->excludeDeptIds;
        }
        if (null !== $this->excludeTagIds) {
            $res['excludeTagIds'] = $this->excludeTagIds;
        }
        if (null !== $this->active) {
            $res['active'] = $this->active;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['objectStaffIds'])) {
            if (!empty($map['objectStaffIds'])) {
                $model->objectStaffIds = $map['objectStaffIds'];
            }
        }
        if (isset($map['objectDeptIds'])) {
            if (!empty($map['objectDeptIds'])) {
                $model->objectDeptIds = $map['objectDeptIds'];
            }
        }
        if (isset($map['objectTagIds'])) {
            if (!empty($map['objectTagIds'])) {
                $model->objectTagIds = $map['objectTagIds'];
            }
        }
        if (isset($map['excludeStaffIds'])) {
            if (!empty($map['excludeStaffIds'])) {
                $model->excludeStaffIds = $map['excludeStaffIds'];
            }
        }
        if (isset($map['excludeDeptIds'])) {
            if (!empty($map['excludeDeptIds'])) {
                $model->excludeDeptIds = $map['excludeDeptIds'];
            }
        }
        if (isset($map['excludeTagIds'])) {
            if (!empty($map['excludeTagIds'])) {
                $model->excludeTagIds = $map['excludeTagIds'];
            }
        }
        if (isset($map['active'])) {
            $model->active = $map['active'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        return $model;
    }
}