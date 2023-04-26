<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vproject_1_0\Models;

use AlibabaCloud\Tea\Model;

class UpdateTaskTaskflowstatusRequest extends Model
{
    /**
     * @example 60a2187eb72xxxxxxx
     *
     * @var string
     */
    public $taskflowStatusId;

    /**
     * @example 说明。
     *
     * @var string
     */
    public $tfsUpdateNote;
    protected $_name = [
        'taskflowStatusId' => 'taskflowStatusId',
        'tfsUpdateNote'    => 'tfsUpdateNote',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskflowStatusId) {
            $res['taskflowStatusId'] = $this->taskflowStatusId;
        }
        if (null !== $this->tfsUpdateNote) {
            $res['tfsUpdateNote'] = $this->tfsUpdateNote;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTaskTaskflowstatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['taskflowStatusId'])) {
            $model->taskflowStatusId = $map['taskflowStatusId'];
        }
        if (isset($map['tfsUpdateNote'])) {
            $model->tfsUpdateNote = $map['tfsUpdateNote'];
        }

        return $model;
    }
}
