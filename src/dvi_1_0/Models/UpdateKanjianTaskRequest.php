<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdvi_1_0\Models;

use AlibabaCloud\SDK\Dingtalk\Vdvi_1_0\Models\UpdateKanjianTaskRequest\subTasks;
use AlibabaCloud\Tea\Model;

class UpdateKanjianTaskRequest extends Model
{
    /**
     * @var string[]
     */
    public $adminUserIds;

    /**
     * @example check shelf and price tags
     *
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $executorUserIds;

    /**
     * @example daily-check-v2
     *
     * @var string
     */
    public $name;

    /**
     * @example "operatorUserId": "manager1234",
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

    /**
     * @example task0001
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'adminUserIds' => 'adminUserIds',
        'description' => 'description',
        'executorUserIds' => 'executorUserIds',
        'name' => 'name',
        'operatorUserId' => 'operatorUserId',
        'reportContent' => 'reportContent',
        'subTasks' => 'subTasks',
        'taskId' => 'taskId',
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
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateKanjianTaskRequest
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
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
