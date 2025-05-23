<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vworkflow_1_0\Models;

use AlibabaCloud\SDK\Dingtalk\Vworkflow_1_0\Models\PremiumSaveIntegratedTaskRequest\featureConfig;
use AlibabaCloud\SDK\Dingtalk\Vworkflow_1_0\Models\PremiumSaveIntegratedTaskRequest\taskConfig;
use AlibabaCloud\SDK\Dingtalk\Vworkflow_1_0\Models\PremiumSaveIntegratedTaskRequest\tasks;
use AlibabaCloud\Tea\Model;

class PremiumSaveIntegratedTaskRequest extends Model
{
    /**
     * @example act_xxxx
     *
     * @var string
     */
    public $activityId;

    /**
     * @var featureConfig
     */
    public $featureConfig;

    /**
     * @description This parameter is required.
     *
     * @example tPr_FB_mT_xxxxxxxxx2hQ05201655306463
     *
     * @var string
     */
    public $processInstanceId;

    /**
     * @var taskConfig
     */
    public $taskConfig;

    /**
     * @description This parameter is required.
     *
     * @var tasks[]
     */
    public $tasks;
    protected $_name = [
        'activityId' => 'activityId',
        'featureConfig' => 'featureConfig',
        'processInstanceId' => 'processInstanceId',
        'taskConfig' => 'taskConfig',
        'tasks' => 'tasks',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityId) {
            $res['activityId'] = $this->activityId;
        }
        if (null !== $this->featureConfig) {
            $res['featureConfig'] = null !== $this->featureConfig ? $this->featureConfig->toMap() : null;
        }
        if (null !== $this->processInstanceId) {
            $res['processInstanceId'] = $this->processInstanceId;
        }
        if (null !== $this->taskConfig) {
            $res['taskConfig'] = null !== $this->taskConfig ? $this->taskConfig->toMap() : null;
        }
        if (null !== $this->tasks) {
            $res['tasks'] = [];
            if (null !== $this->tasks && \is_array($this->tasks)) {
                $n = 0;
                foreach ($this->tasks as $item) {
                    $res['tasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PremiumSaveIntegratedTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['activityId'])) {
            $model->activityId = $map['activityId'];
        }
        if (isset($map['featureConfig'])) {
            $model->featureConfig = featureConfig::fromMap($map['featureConfig']);
        }
        if (isset($map['processInstanceId'])) {
            $model->processInstanceId = $map['processInstanceId'];
        }
        if (isset($map['taskConfig'])) {
            $model->taskConfig = taskConfig::fromMap($map['taskConfig']);
        }
        if (isset($map['tasks'])) {
            if (!empty($map['tasks'])) {
                $model->tasks = [];
                $n = 0;
                foreach ($map['tasks'] as $item) {
                    $model->tasks[$n++] = null !== $item ? tasks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
