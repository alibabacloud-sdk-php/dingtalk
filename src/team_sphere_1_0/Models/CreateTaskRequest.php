<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vteam_sphere_1_0\Models;

use AlibabaCloud\SDK\Dingtalk\Vteam_sphere_1_0\Models\CreateTaskRequest\customfields;
use AlibabaCloud\Tea\Model;

class CreateTaskRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 任务标题
     *
     * @var string
     */
    public $content;

    /**
     * @var customfields[]
     */
    public $customfields;

    /**
     * @example 2022-06-13T07:36:50.318Z
     *
     * @var string
     */
    public $dueDate;

    /**
     * @example 173xxxx
     *
     * @var string
     */
    public $executorId;

    /**
     * @example 我是一条任务备注
     *
     * @var string
     */
    public $note;

    /**
     * @description This parameter is required.
     *
     * @example 62c25e3b376exxxxxx
     *
     * @var string
     */
    public $projectId;
    protected $_name = [
        'content'      => 'content',
        'customfields' => 'customfields',
        'dueDate'      => 'dueDate',
        'executorId'   => 'executorId',
        'note'         => 'note',
        'projectId'    => 'projectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->customfields) {
            $res['customfields'] = [];
            if (null !== $this->customfields && \is_array($this->customfields)) {
                $n = 0;
                foreach ($this->customfields as $item) {
                    $res['customfields'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dueDate) {
            $res['dueDate'] = $this->dueDate;
        }
        if (null !== $this->executorId) {
            $res['executorId'] = $this->executorId;
        }
        if (null !== $this->note) {
            $res['note'] = $this->note;
        }
        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['customfields'])) {
            if (!empty($map['customfields'])) {
                $model->customfields = [];
                $n                   = 0;
                foreach ($map['customfields'] as $item) {
                    $model->customfields[$n++] = null !== $item ? customfields::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['dueDate'])) {
            $model->dueDate = $map['dueDate'];
        }
        if (isset($map['executorId'])) {
            $model->executorId = $map['executorId'];
        }
        if (isset($map['note'])) {
            $model->note = $map['note'];
        }
        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }

        return $model;
    }
}
