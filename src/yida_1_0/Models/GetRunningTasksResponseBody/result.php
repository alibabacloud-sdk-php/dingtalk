<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vyida_1_0\Models\GetRunningTasksResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description createTime
     *
     * @var string
     */
    public $createTimeGMT;

    /**
     * @description activityId
     *
     * @var string
     */
    public $activityId;

    /**
     * @description processInstanceId
     *
     * @var string
     */
    public $processInstanceId;

    /**
     * @description taskType
     *
     * @var string
     */
    public $taskType;

    /**
     * @description titleEn
     *
     * @var string
     */
    public $titleInEnglish;

    /**
     * @description activeTime
     *
     * @var string
     */
    public $activeTimeGMT;

    /**
     * @description actualActionerId
     *
     * @var string
     */
    public $actualActionerId;

    /**
     * @description originatorId
     *
     * @var string
     */
    public $originatorId;

    /**
     * @description finishTime
     *
     * @var string
     */
    public $finishTimeGMT;

    /**
     * @description title
     *
     * @var string
     */
    public $title;

    /**
     * @description taskId
     *
     * @var string
     */
    public $taskId;

    /**
     * @description status
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'createTimeGMT'     => 'createTimeGMT',
        'activityId'        => 'activityId',
        'processInstanceId' => 'processInstanceId',
        'taskType'          => 'taskType',
        'titleInEnglish'    => 'titleInEnglish',
        'activeTimeGMT'     => 'activeTimeGMT',
        'actualActionerId'  => 'actualActionerId',
        'originatorId'      => 'originatorId',
        'finishTimeGMT'     => 'finishTimeGMT',
        'title'             => 'title',
        'taskId'            => 'taskId',
        'status'            => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTimeGMT) {
            $res['createTimeGMT'] = $this->createTimeGMT;
        }
        if (null !== $this->activityId) {
            $res['activityId'] = $this->activityId;
        }
        if (null !== $this->processInstanceId) {
            $res['processInstanceId'] = $this->processInstanceId;
        }
        if (null !== $this->taskType) {
            $res['taskType'] = $this->taskType;
        }
        if (null !== $this->titleInEnglish) {
            $res['titleInEnglish'] = $this->titleInEnglish;
        }
        if (null !== $this->activeTimeGMT) {
            $res['activeTimeGMT'] = $this->activeTimeGMT;
        }
        if (null !== $this->actualActionerId) {
            $res['actualActionerId'] = $this->actualActionerId;
        }
        if (null !== $this->originatorId) {
            $res['originatorId'] = $this->originatorId;
        }
        if (null !== $this->finishTimeGMT) {
            $res['finishTimeGMT'] = $this->finishTimeGMT;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTimeGMT'])) {
            $model->createTimeGMT = $map['createTimeGMT'];
        }
        if (isset($map['activityId'])) {
            $model->activityId = $map['activityId'];
        }
        if (isset($map['processInstanceId'])) {
            $model->processInstanceId = $map['processInstanceId'];
        }
        if (isset($map['taskType'])) {
            $model->taskType = $map['taskType'];
        }
        if (isset($map['titleInEnglish'])) {
            $model->titleInEnglish = $map['titleInEnglish'];
        }
        if (isset($map['activeTimeGMT'])) {
            $model->activeTimeGMT = $map['activeTimeGMT'];
        }
        if (isset($map['actualActionerId'])) {
            $model->actualActionerId = $map['actualActionerId'];
        }
        if (isset($map['originatorId'])) {
            $model->originatorId = $map['originatorId'];
        }
        if (isset($map['finishTimeGMT'])) {
            $model->finishTimeGMT = $map['finishTimeGMT'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}