<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdvi_1_0\Models\GetKanjianRecordResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example store is clean
     *
     * @var string
     */
    public $aiDescription;

    /**
     * @example BV0000000001
     *
     * @var string
     */
    public $deviceSn;

    /**
     * @example 600000
     *
     * @var int
     */
    public $duration;

    /**
     * @example 1760000600000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example exec0001
     *
     * @var string
     */
    public $executionId;

    /**
     * @example task0001
     *
     * @var string
     */
    public $mainTaskId;

    /**
     * @example daily-check
     *
     * @var string
     */
    public $mainTaskTitle;

    /**
     * @example https://example.com/media.mp4
     *
     * @var string
     */
    public $mediaUrl;

    /**
     * @example record0001
     *
     * @var string
     */
    public $recordId;

    /**
     * @example summarize issues
     *
     * @var string
     */
    public $reportContent;

    /**
     * @example 1760000000000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example aiSummaried
     *
     * @var string
     */
    public $status;

    /**
     * @example store check passed
     *
     * @var string
     */
    public $summary;

    /**
     * @example https://example.com/thumb.jpg
     *
     * @var string
     */
    public $thumbnailUrl;

    /**
     * @example store-check
     *
     * @var string
     */
    public $title;

    /**
     * @example 100
     *
     * @var int
     */
    public $uploadProgress;

    /**
     * @example 1
     *
     * @var int
     */
    public $versionNo;
    protected $_name = [
        'aiDescription' => 'aiDescription',
        'deviceSn' => 'deviceSn',
        'duration' => 'duration',
        'endTime' => 'endTime',
        'executionId' => 'executionId',
        'mainTaskId' => 'mainTaskId',
        'mainTaskTitle' => 'mainTaskTitle',
        'mediaUrl' => 'mediaUrl',
        'recordId' => 'recordId',
        'reportContent' => 'reportContent',
        'startTime' => 'startTime',
        'status' => 'status',
        'summary' => 'summary',
        'thumbnailUrl' => 'thumbnailUrl',
        'title' => 'title',
        'uploadProgress' => 'uploadProgress',
        'versionNo' => 'versionNo',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aiDescription) {
            $res['aiDescription'] = $this->aiDescription;
        }
        if (null !== $this->deviceSn) {
            $res['deviceSn'] = $this->deviceSn;
        }
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->executionId) {
            $res['executionId'] = $this->executionId;
        }
        if (null !== $this->mainTaskId) {
            $res['mainTaskId'] = $this->mainTaskId;
        }
        if (null !== $this->mainTaskTitle) {
            $res['mainTaskTitle'] = $this->mainTaskTitle;
        }
        if (null !== $this->mediaUrl) {
            $res['mediaUrl'] = $this->mediaUrl;
        }
        if (null !== $this->recordId) {
            $res['recordId'] = $this->recordId;
        }
        if (null !== $this->reportContent) {
            $res['reportContent'] = $this->reportContent;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
        }
        if (null !== $this->thumbnailUrl) {
            $res['thumbnailUrl'] = $this->thumbnailUrl;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->uploadProgress) {
            $res['uploadProgress'] = $this->uploadProgress;
        }
        if (null !== $this->versionNo) {
            $res['versionNo'] = $this->versionNo;
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
        if (isset($map['aiDescription'])) {
            $model->aiDescription = $map['aiDescription'];
        }
        if (isset($map['deviceSn'])) {
            $model->deviceSn = $map['deviceSn'];
        }
        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['executionId'])) {
            $model->executionId = $map['executionId'];
        }
        if (isset($map['mainTaskId'])) {
            $model->mainTaskId = $map['mainTaskId'];
        }
        if (isset($map['mainTaskTitle'])) {
            $model->mainTaskTitle = $map['mainTaskTitle'];
        }
        if (isset($map['mediaUrl'])) {
            $model->mediaUrl = $map['mediaUrl'];
        }
        if (isset($map['recordId'])) {
            $model->recordId = $map['recordId'];
        }
        if (isset($map['reportContent'])) {
            $model->reportContent = $map['reportContent'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['summary'])) {
            $model->summary = $map['summary'];
        }
        if (isset($map['thumbnailUrl'])) {
            $model->thumbnailUrl = $map['thumbnailUrl'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['uploadProgress'])) {
            $model->uploadProgress = $map['uploadProgress'];
        }
        if (isset($map['versionNo'])) {
            $model->versionNo = $map['versionNo'];
        }

        return $model;
    }
}
