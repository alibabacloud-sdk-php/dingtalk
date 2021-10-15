<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vconference_1_0\Models\QueryCloudRecordVideoResponseBody;

use AlibabaCloud\Tea\Model;

class videoList extends Model
{
    /**
     * @description 音视频云录制Id，多份视频recordId一样
     *
     * @var string
     */
    public $recordId;

    /**
     * @description 录制人UnionId
     *
     * @var string
     */
    public $unionId;

    /**
     * @description 录制开始时间
     *
     * @var int
     */
    public $startTime;

    /**
     * @description 记录类型,0-普通录制，1-合成的文件
     *
     * @var int
     */
    public $recordType;

    /**
     * @description 录制持续时间
     *
     * @var int
     */
    public $duration;

    /**
     * @description 文件大小
     *
     * @var int
     */
    public $fileSize;

    /**
     * @description 录制结束时间
     *
     * @var int
     */
    public $endTime;

    /**
     * @description 媒体文件id，唯一
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description 媒体文件所在集群id
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'recordId'   => 'recordId',
        'unionId'    => 'unionId',
        'startTime'  => 'startTime',
        'recordType' => 'recordType',
        'duration'   => 'duration',
        'fileSize'   => 'fileSize',
        'endTime'    => 'endTime',
        'mediaId'    => 'mediaId',
        'regionId'   => 'regionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordId) {
            $res['recordId'] = $this->recordId;
        }
        if (null !== $this->unionId) {
            $res['unionId'] = $this->unionId;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->recordType) {
            $res['recordType'] = $this->recordType;
        }
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }
        if (null !== $this->fileSize) {
            $res['fileSize'] = $this->fileSize;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->mediaId) {
            $res['mediaId'] = $this->mediaId;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['recordId'])) {
            $model->recordId = $map['recordId'];
        }
        if (isset($map['unionId'])) {
            $model->unionId = $map['unionId'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['recordType'])) {
            $model->recordType = $map['recordType'];
        }
        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }
        if (isset($map['fileSize'])) {
            $model->fileSize = $map['fileSize'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['mediaId'])) {
            $model->mediaId = $map['mediaId'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}