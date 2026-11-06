<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcontact_1_0\Models\BatchGetActingManagerRelationsResponseBody;

use AlibabaCloud\SDK\Dingtalk\Vcontact_1_0\Models\BatchGetActingManagerRelationsResponseBody\data\relations;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var relations[]
     */
    public $relations;

    /**
     * @var string
     */
    public $staffId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode' => 'errorCode',
        'errorMsg' => 'errorMsg',
        'relations' => 'relations',
        'staffId' => 'staffId',
        'success' => 'success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['errorMsg'] = $this->errorMsg;
        }
        if (null !== $this->relations) {
            $res['relations'] = [];
            if (null !== $this->relations && \is_array($this->relations)) {
                $n = 0;
                foreach ($this->relations as $item) {
                    $res['relations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->staffId) {
            $res['staffId'] = $this->staffId;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['errorMsg'])) {
            $model->errorMsg = $map['errorMsg'];
        }
        if (isset($map['relations'])) {
            if (!empty($map['relations'])) {
                $model->relations = [];
                $n = 0;
                foreach ($map['relations'] as $item) {
                    $model->relations[$n++] = null !== $item ? relations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['staffId'])) {
            $model->staffId = $map['staffId'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
