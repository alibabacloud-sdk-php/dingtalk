<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vstorage_1_0\Models\MoveDentriesResponseBody;

use AlibabaCloud\Tea\Model;

class resultItems extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $async;

    /**
     * @example dentry_id
     *
     * @var string
     */
    public $dentryId;

    /**
     * @example permissionDenied
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example space_id
     *
     * @var string
     */
    public $spaceId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @example target_dentry_id
     *
     * @var string
     */
    public $targetDentryId;

    /**
     * @example target_space_id
     *
     * @var string
     */
    public $targetSpaceId;

    /**
     * @example task_id
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'async' => 'async',
        'dentryId' => 'dentryId',
        'errorCode' => 'errorCode',
        'spaceId' => 'spaceId',
        'success' => 'success',
        'targetDentryId' => 'targetDentryId',
        'targetSpaceId' => 'targetSpaceId',
        'taskId' => 'taskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->async) {
            $res['async'] = $this->async;
        }
        if (null !== $this->dentryId) {
            $res['dentryId'] = $this->dentryId;
        }
        if (null !== $this->errorCode) {
            $res['errorCode'] = $this->errorCode;
        }
        if (null !== $this->spaceId) {
            $res['spaceId'] = $this->spaceId;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }
        if (null !== $this->targetDentryId) {
            $res['targetDentryId'] = $this->targetDentryId;
        }
        if (null !== $this->targetSpaceId) {
            $res['targetSpaceId'] = $this->targetSpaceId;
        }
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['async'])) {
            $model->async = $map['async'];
        }
        if (isset($map['dentryId'])) {
            $model->dentryId = $map['dentryId'];
        }
        if (isset($map['errorCode'])) {
            $model->errorCode = $map['errorCode'];
        }
        if (isset($map['spaceId'])) {
            $model->spaceId = $map['spaceId'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }
        if (isset($map['targetDentryId'])) {
            $model->targetDentryId = $map['targetDentryId'];
        }
        if (isset($map['targetSpaceId'])) {
            $model->targetSpaceId = $map['targetSpaceId'];
        }
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
