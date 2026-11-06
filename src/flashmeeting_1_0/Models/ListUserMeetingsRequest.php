<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vflashmeeting_1_0\Models;

use AlibabaCloud\Tea\Model;

class ListUserMeetingsRequest extends Model
{
    /**
     * @var int
     */
    public $createTimeFrom;

    /**
     * @var int
     */
    public $createTimeTo;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $listType;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $order;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'createTimeFrom' => 'createTimeFrom',
        'createTimeTo' => 'createTimeTo',
        'keyword' => 'keyword',
        'listType' => 'listType',
        'nextToken' => 'nextToken',
        'order' => 'order',
        'pageSize' => 'pageSize',
        'userId' => 'userId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTimeFrom) {
            $res['createTimeFrom'] = $this->createTimeFrom;
        }
        if (null !== $this->createTimeTo) {
            $res['createTimeTo'] = $this->createTimeTo;
        }
        if (null !== $this->keyword) {
            $res['keyword'] = $this->keyword;
        }
        if (null !== $this->listType) {
            $res['listType'] = $this->listType;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->order) {
            $res['order'] = $this->order;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserMeetingsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTimeFrom'])) {
            $model->createTimeFrom = $map['createTimeFrom'];
        }
        if (isset($map['createTimeTo'])) {
            $model->createTimeTo = $map['createTimeTo'];
        }
        if (isset($map['keyword'])) {
            $model->keyword = $map['keyword'];
        }
        if (isset($map['listType'])) {
            $model->listType = $map['listType'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['order'])) {
            $model->order = $map['order'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
