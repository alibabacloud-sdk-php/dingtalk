<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdvi_1_0\Models\UpdateKanjianTaskRequest;

use AlibabaCloud\Tea\Model;

class subTasks extends Model
{
    /**
     * @example is the shelf tidy
     *
     * @var string
     */
    public $instruction;

    /**
     * @example shelf-check
     *
     * @var string
     */
    public $name;

    /**
     * @example item0001
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'instruction' => 'instruction',
        'name' => 'name',
        'taskId' => 'taskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instruction) {
            $res['instruction'] = $this->instruction;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subTasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instruction'])) {
            $model->instruction = $map['instruction'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
