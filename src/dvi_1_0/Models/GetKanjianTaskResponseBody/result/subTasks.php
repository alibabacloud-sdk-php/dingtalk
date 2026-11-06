<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdvi_1_0\Models\GetKanjianTaskResponseBody\result;

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
     * @var string[]
     */
    public $options;

    /**
     * @example item0001
     *
     * @var string
     */
    public $taskId;

    /**
     * @example judge
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'instruction' => 'instruction',
        'name' => 'name',
        'options' => 'options',
        'taskId' => 'taskId',
        'type' => 'type',
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
        if (null !== $this->options) {
            $res['options'] = $this->options;
        }
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['options'])) {
            if (!empty($map['options'])) {
                $model->options = $map['options'];
            }
        }
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
