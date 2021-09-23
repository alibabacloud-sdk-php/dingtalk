<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vyida_1_0\Models\GetOperationRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description processInstanceId
     *
     * @var string
     */
    public $processInstanceId;

    /**
     * @description showName
     *
     * @var string
     */
    public $showName;

    /**
     * @description operatorNick
     *
     * @var string
     */
    public $operatorNickName;

    /**
     * @description activeTime
     *
     * @var string
     */
    public $activeTimeGMT;

    /**
     * @description operateTime
     *
     * @var string
     */
    public $operateTimeGMT;

    /**
     * @description operateType
     *
     * @var string
     */
    public $operateType;

    /**
     * @description operatorStatus
     *
     * @var string
     */
    public $operatorStatus;

    /**
     * @description remark
     *
     * @var string
     */
    public $remark;

    /**
     * @description taskHoldTime
     *
     * @var int
     */
    public $taskHoldTimeGMT;

    /**
     * @description type
     *
     * @var string
     */
    public $type;

    /**
     * @description operatorName
     *
     * @var string
     */
    public $operatorName;

    /**
     * @description operator
     *
     * @var string
     */
    public $operatorUserId;

    /**
     * @description activityId
     *
     * @var string
     */
    public $activityId;

    /**
     * @description taskType
     *
     * @var string
     */
    public $taskType;

    /**
     * @description taskExecuteType
     *
     * @var string
     */
    public $taskExecuteType;

    /**
     * @description size
     *
     * @var int
     */
    public $size;

    /**
     * @description operatorDisplayName
     *
     * @var string
     */
    public $operatorDisplayName;

    /**
     * @description files
     *
     * @var string
     */
    public $files;

    /**
     * @description action
     *
     * @var string
     */
    public $action;

    /**
     * @description actionExt
     *
     * @var string
     */
    public $actionExit;

    /**
     * @description id
     *
     * @var int
     */
    public $dataId;

    /**
     * @description taskId
     *
     * @var string
     */
    public $taskId;

    /**
     * @description digitalSign
     *
     * @var string
     */
    public $digitalSign;

    /**
     * @description operatorPhotoUrl
     *
     * @var string
     */
    public $operatorPhotoUrl;
    protected $_name = [
        'processInstanceId'   => 'processInstanceId',
        'showName'            => 'showName',
        'operatorNickName'    => 'operatorNickName',
        'activeTimeGMT'       => 'activeTimeGMT',
        'operateTimeGMT'      => 'operateTimeGMT',
        'operateType'         => 'operateType',
        'operatorStatus'      => 'operatorStatus',
        'remark'              => 'remark',
        'taskHoldTimeGMT'     => 'taskHoldTimeGMT',
        'type'                => 'type',
        'operatorName'        => 'operatorName',
        'operatorUserId'      => 'operatorUserId',
        'activityId'          => 'activityId',
        'taskType'            => 'taskType',
        'taskExecuteType'     => 'taskExecuteType',
        'size'                => 'size',
        'operatorDisplayName' => 'operatorDisplayName',
        'files'               => 'files',
        'action'              => 'action',
        'actionExit'          => 'actionExit',
        'dataId'              => 'dataId',
        'taskId'              => 'taskId',
        'digitalSign'         => 'digitalSign',
        'operatorPhotoUrl'    => 'operatorPhotoUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->processInstanceId) {
            $res['processInstanceId'] = $this->processInstanceId;
        }
        if (null !== $this->showName) {
            $res['showName'] = $this->showName;
        }
        if (null !== $this->operatorNickName) {
            $res['operatorNickName'] = $this->operatorNickName;
        }
        if (null !== $this->activeTimeGMT) {
            $res['activeTimeGMT'] = $this->activeTimeGMT;
        }
        if (null !== $this->operateTimeGMT) {
            $res['operateTimeGMT'] = $this->operateTimeGMT;
        }
        if (null !== $this->operateType) {
            $res['operateType'] = $this->operateType;
        }
        if (null !== $this->operatorStatus) {
            $res['operatorStatus'] = $this->operatorStatus;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->taskHoldTimeGMT) {
            $res['taskHoldTimeGMT'] = $this->taskHoldTimeGMT;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->operatorName) {
            $res['operatorName'] = $this->operatorName;
        }
        if (null !== $this->operatorUserId) {
            $res['operatorUserId'] = $this->operatorUserId;
        }
        if (null !== $this->activityId) {
            $res['activityId'] = $this->activityId;
        }
        if (null !== $this->taskType) {
            $res['taskType'] = $this->taskType;
        }
        if (null !== $this->taskExecuteType) {
            $res['taskExecuteType'] = $this->taskExecuteType;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->operatorDisplayName) {
            $res['operatorDisplayName'] = $this->operatorDisplayName;
        }
        if (null !== $this->files) {
            $res['files'] = $this->files;
        }
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }
        if (null !== $this->actionExit) {
            $res['actionExit'] = $this->actionExit;
        }
        if (null !== $this->dataId) {
            $res['dataId'] = $this->dataId;
        }
        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }
        if (null !== $this->digitalSign) {
            $res['digitalSign'] = $this->digitalSign;
        }
        if (null !== $this->operatorPhotoUrl) {
            $res['operatorPhotoUrl'] = $this->operatorPhotoUrl;
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
        if (isset($map['processInstanceId'])) {
            $model->processInstanceId = $map['processInstanceId'];
        }
        if (isset($map['showName'])) {
            $model->showName = $map['showName'];
        }
        if (isset($map['operatorNickName'])) {
            $model->operatorNickName = $map['operatorNickName'];
        }
        if (isset($map['activeTimeGMT'])) {
            $model->activeTimeGMT = $map['activeTimeGMT'];
        }
        if (isset($map['operateTimeGMT'])) {
            $model->operateTimeGMT = $map['operateTimeGMT'];
        }
        if (isset($map['operateType'])) {
            $model->operateType = $map['operateType'];
        }
        if (isset($map['operatorStatus'])) {
            $model->operatorStatus = $map['operatorStatus'];
        }
        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }
        if (isset($map['taskHoldTimeGMT'])) {
            $model->taskHoldTimeGMT = $map['taskHoldTimeGMT'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['operatorName'])) {
            $model->operatorName = $map['operatorName'];
        }
        if (isset($map['operatorUserId'])) {
            $model->operatorUserId = $map['operatorUserId'];
        }
        if (isset($map['activityId'])) {
            $model->activityId = $map['activityId'];
        }
        if (isset($map['taskType'])) {
            $model->taskType = $map['taskType'];
        }
        if (isset($map['taskExecuteType'])) {
            $model->taskExecuteType = $map['taskExecuteType'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['operatorDisplayName'])) {
            $model->operatorDisplayName = $map['operatorDisplayName'];
        }
        if (isset($map['files'])) {
            $model->files = $map['files'];
        }
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }
        if (isset($map['actionExit'])) {
            $model->actionExit = $map['actionExit'];
        }
        if (isset($map['dataId'])) {
            $model->dataId = $map['dataId'];
        }
        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }
        if (isset($map['digitalSign'])) {
            $model->digitalSign = $map['digitalSign'];
        }
        if (isset($map['operatorPhotoUrl'])) {
            $model->operatorPhotoUrl = $map['operatorPhotoUrl'];
        }

        return $model;
    }
}
