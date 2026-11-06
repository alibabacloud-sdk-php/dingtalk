<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdvi_1_0\Models\ListKanjianTasksResponseBody\result;

use AlibabaCloud\SDK\Dingtalk\Vdvi_1_0\Models\ListKanjianTasksResponseBody\result\items\subTasks;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string[]
     */
    public $adminUserIds;

    /**
     * @example manager1234
     *
     * @var string
     */
    public $creatorUserId;

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
     * @example 1760000000000
     *
     * @var int
     */
    public $gmtCreation;

    /**
     * @example 1760000060000
     *
     * @var int
     */
    public $gmtModification;

    /**
     * @example daily-check
     *
     * @var string
     */
    public $name;

    /**
     * @example summarize issues
     *
     * @var string
     */
    public $reportContent;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;

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
        'creatorUserId' => 'creatorUserId',
        'description' => 'description',
        'executorUserIds' => 'executorUserIds',
        'gmtCreation' => 'gmtCreation',
        'gmtModification' => 'gmtModification',
        'name' => 'name',
        'reportContent' => 'reportContent',
        'status' => 'status',
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
        if (null !== $this->creatorUserId) {
            $res['creatorUserId'] = $this->creatorUserId;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->executorUserIds) {
            $res['executorUserIds'] = $this->executorUserIds;
        }
        if (null !== $this->gmtCreation) {
            $res['gmtCreation'] = $this->gmtCreation;
        }
        if (null !== $this->gmtModification) {
            $res['gmtModification'] = $this->gmtModification;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->reportContent) {
            $res['reportContent'] = $this->reportContent;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
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
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['adminUserIds'])) {
            if (!empty($map['adminUserIds'])) {
                $model->adminUserIds = $map['adminUserIds'];
            }
        }
        if (isset($map['creatorUserId'])) {
            $model->creatorUserId = $map['creatorUserId'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['executorUserIds'])) {
            if (!empty($map['executorUserIds'])) {
                $model->executorUserIds = $map['executorUserIds'];
            }
        }
        if (isset($map['gmtCreation'])) {
            $model->gmtCreation = $map['gmtCreation'];
        }
        if (isset($map['gmtModification'])) {
            $model->gmtModification = $map['gmtModification'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['reportContent'])) {
            $model->reportContent = $map['reportContent'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
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
