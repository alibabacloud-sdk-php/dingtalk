<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vmicro_app_1_0\Models\ListAllInnerAppsResponseBody;

use AlibabaCloud\SDK\Dingtalk\Vmicro_app_1_0\Models\ListAllInnerAppsResponseBody\appList\coolAppInfo;
use AlibabaCloud\SDK\Dingtalk\Vmicro_app_1_0\Models\ListAllInnerAppsResponseBody\appList\robotInfo;
use AlibabaCloud\Tea\Model;

class appList extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $agentId;

    /**
     * @description This parameter is required.
     *
     * @example 111
     *
     * @var int
     */
    public $appId;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $appStatus;

    /**
     * @var coolAppInfo[]
     */
    public $coolAppInfo;

    /**
     * @example desc
     *
     * @var string
     */
    public $desc;

    /**
     * @description This parameter is required.
     *
     * @example 0
     *
     * @var int
     */
    public $developType;

    /**
     * @example https://www.dingtalk.com
     *
     * @var string
     */
    public $homepageLink;

    /**
     * @example icon
     *
     * @var string
     */
    public $icon;

    /**
     * @example name
     *
     * @var string
     */
    public $name;

    /**
     * @example https://www.dingtalk.com
     *
     * @var string
     */
    public $ompLink;

    /**
     * @example https://www.dingtalk.com
     *
     * @var string
     */
    public $pcHomepageLink;

    /**
     * @var robotInfo
     */
    public $robotInfo;
    protected $_name = [
        'agentId' => 'agentId',
        'appId' => 'appId',
        'appStatus' => 'appStatus',
        'coolAppInfo' => 'coolAppInfo',
        'desc' => 'desc',
        'developType' => 'developType',
        'homepageLink' => 'homepageLink',
        'icon' => 'icon',
        'name' => 'name',
        'ompLink' => 'ompLink',
        'pcHomepageLink' => 'pcHomepageLink',
        'robotInfo' => 'robotInfo',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }
        if (null !== $this->appStatus) {
            $res['appStatus'] = $this->appStatus;
        }
        if (null !== $this->coolAppInfo) {
            $res['coolAppInfo'] = [];
            if (null !== $this->coolAppInfo && \is_array($this->coolAppInfo)) {
                $n = 0;
                foreach ($this->coolAppInfo as $item) {
                    $res['coolAppInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }
        if (null !== $this->developType) {
            $res['developType'] = $this->developType;
        }
        if (null !== $this->homepageLink) {
            $res['homepageLink'] = $this->homepageLink;
        }
        if (null !== $this->icon) {
            $res['icon'] = $this->icon;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->ompLink) {
            $res['ompLink'] = $this->ompLink;
        }
        if (null !== $this->pcHomepageLink) {
            $res['pcHomepageLink'] = $this->pcHomepageLink;
        }
        if (null !== $this->robotInfo) {
            $res['robotInfo'] = null !== $this->robotInfo ? $this->robotInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['agentId'])) {
            $model->agentId = $map['agentId'];
        }
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }
        if (isset($map['appStatus'])) {
            $model->appStatus = $map['appStatus'];
        }
        if (isset($map['coolAppInfo'])) {
            if (!empty($map['coolAppInfo'])) {
                $model->coolAppInfo = [];
                $n = 0;
                foreach ($map['coolAppInfo'] as $item) {
                    $model->coolAppInfo[$n++] = null !== $item ? coolAppInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }
        if (isset($map['developType'])) {
            $model->developType = $map['developType'];
        }
        if (isset($map['homepageLink'])) {
            $model->homepageLink = $map['homepageLink'];
        }
        if (isset($map['icon'])) {
            $model->icon = $map['icon'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['ompLink'])) {
            $model->ompLink = $map['ompLink'];
        }
        if (isset($map['pcHomepageLink'])) {
            $model->pcHomepageLink = $map['pcHomepageLink'];
        }
        if (isset($map['robotInfo'])) {
            $model->robotInfo = robotInfo::fromMap($map['robotInfo']);
        }

        return $model;
    }
}
