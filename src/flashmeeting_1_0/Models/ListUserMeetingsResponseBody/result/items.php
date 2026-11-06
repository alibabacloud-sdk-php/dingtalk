<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vflashmeeting_1_0\Models\ListUserMeetingsResponseBody\result;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $flashmeetingKey;

    /**
     * @var string
     */
    public $hasSummary;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $title;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'createTime' => 'createTime',
        'creator' => 'creator',
        'endTime' => 'endTime',
        'flashmeetingKey' => 'flashmeetingKey',
        'hasSummary' => 'hasSummary',
        'startTime' => 'startTime',
        'title' => 'title',
        'url' => 'url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->flashmeetingKey) {
            $res['flashmeetingKey'] = $this->flashmeetingKey;
        }
        if (null !== $this->hasSummary) {
            $res['hasSummary'] = $this->hasSummary;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['flashmeetingKey'])) {
            $model->flashmeetingKey = $map['flashmeetingKey'];
        }
        if (isset($map['hasSummary'])) {
            $model->hasSummary = $map['hasSummary'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
