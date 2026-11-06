<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vminutes_1_0\Models;

use AlibabaCloud\SDK\Dingtalk\Vminutes_1_0\Models\QueryMinutesTodoResponseBody\dingtalkTodoList;
use AlibabaCloud\SDK\Dingtalk\Vminutes_1_0\Models\QueryMinutesTodoResponseBody\todoGenerationInfo;
use AlibabaCloud\Tea\Model;

class QueryMinutesTodoResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $actions;

    /**
     * @var dingtalkTodoList[]
     */
    public $dingtalkTodoList;

    /**
     * @var todoGenerationInfo
     */
    public $todoGenerationInfo;
    protected $_name = [
        'actions' => 'actions',
        'dingtalkTodoList' => 'dingtalkTodoList',
        'todoGenerationInfo' => 'todoGenerationInfo',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->actions) {
            $res['actions'] = $this->actions;
        }
        if (null !== $this->dingtalkTodoList) {
            $res['dingtalkTodoList'] = [];
            if (null !== $this->dingtalkTodoList && \is_array($this->dingtalkTodoList)) {
                $n = 0;
                foreach ($this->dingtalkTodoList as $item) {
                    $res['dingtalkTodoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->todoGenerationInfo) {
            $res['todoGenerationInfo'] = null !== $this->todoGenerationInfo ? $this->todoGenerationInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMinutesTodoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['actions'])) {
            if (!empty($map['actions'])) {
                $model->actions = $map['actions'];
            }
        }
        if (isset($map['dingtalkTodoList'])) {
            if (!empty($map['dingtalkTodoList'])) {
                $model->dingtalkTodoList = [];
                $n = 0;
                foreach ($map['dingtalkTodoList'] as $item) {
                    $model->dingtalkTodoList[$n++] = null !== $item ? dingtalkTodoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['todoGenerationInfo'])) {
            $model->todoGenerationInfo = todoGenerationInfo::fromMap($map['todoGenerationInfo']);
        }

        return $model;
    }
}
