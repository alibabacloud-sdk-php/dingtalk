<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdvi_1_0\Models;

use AlibabaCloud\SDK\Dingtalk\Vdvi_1_0\Models\CreateKanjianTaskRequest\subTasks;
use AlibabaCloud\Tea\Model;

class CreateKanjianTaskRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $adminUserIds;

    /**
     * @description This parameter is required.
     *
     * @example check shelf and price tags
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $executorUserIds;

    /**
     * @description This parameter is required.
     *
     * @example aily-check
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example manager1234
     *
     * @var string
     */
    public $operatorUserId;

    /**
     * @example summarize issues
     *
     * @var string
     */
    public $reportContent;

    /**
     * @var subTasks[]
     */
    public $subTasks;
    protected $_name = [
        'adminUserIds' => 'adminUserIds',
        'description' => 'description',
        'executorUserIds' => 'executorUserIds',
        'name' => 'name',
        'operatorUserId' => 'operatorUserId',
        'reportContent' => 'reportContent',
        'subTasks' => 'subTasks',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->adminUserIds) {
            $res['adminUserIds'] = $this->adminUserIds;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->executorUserIds) {
            $res['executorUserIds'] = $this->executorUserIds;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->operatorUserId) {
            $res['operatorUserId'] = $this->operatorUserId;
        }
        if (null !== $this->reportContent) {
            $res['reportContent'] = $this->reportContent;
        }
        if (null !== $this->subTasks) {
            $res['subTasks'] = [];
            if (null !== $this->subTasks && \is_array($this->subTasks)) {
                $n = 0;
                foreach ($this->subTasks as $item) {
                    $res['subTasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateKanjianTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['adminUserIds'])) {
            if (!empty($map['adminUserIds'])) {
                $model->adminUserIds = $map['adminUserIds'];
            }
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['executorUserIds'])) {
            if (!empty($map['executorUserIds'])) {
                $model->executorUserIds = $map['executorUserIds'];
            }
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['operatorUserId'])) {
            $model->operatorUserId = $map['operatorUserId'];
        }
        if (isset($map['reportContent'])) {
            $model->reportContent = $map['reportContent'];
        }
        if (isset($map['subTasks'])) {
            if (!empty($map['subTasks'])) {
                $model->subTasks = [];
                $n = 0;
                foreach ($map['subTasks'] as $item) {
                    $model->subTasks[$n++] = null !== $item ? subTasks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
