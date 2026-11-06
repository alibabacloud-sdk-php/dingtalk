<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdvi_1_0\Models\ListKanjianRecordsResponseBody\result;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example zhangsan
     *
     * @var string
     */
    public $creatorName;

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
     * @example 1760000000000
     *
     * @var int
     */
    public $gmtCreate;

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
     * @example dingtalk_bv
     *
     * @var string
     */
    public $source;

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
    protected $_name = [
        'creatorName' => 'creatorName',
        'deviceSn' => 'deviceSn',
        'duration' => 'duration',
        'endTime' => 'endTime',
        'gmtCreate' => 'gmtCreate',
        'mainTaskId' => 'mainTaskId',
        'mainTaskTitle' => 'mainTaskTitle',
        'mediaUrl' => 'mediaUrl',
        'recordId' => 'recordId',
        'source' => 'source',
        'startTime' => 'startTime',
        'status' => 'status',
        'thumbnailUrl' => 'thumbnailUrl',
        'title' => 'title',
        'uploadProgress' => 'uploadProgress',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->creatorName) {
            $res['creatorName'] = $this->creatorName;
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
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
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
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['creatorName'])) {
            $model->creatorName = $map['creatorName'];
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
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
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
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
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

        return $model;
    }
}
