<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdvi_1_0\Models\PageKanjianRecordProcessResponseBody\result;

use AlibabaCloud\SDK\Dingtalk\Vdvi_1_0\Models\PageKanjianRecordProcessResponseBody\result\events\images;
use AlibabaCloud\Tea\Model;

class events extends Model
{
    /**
     * @example normal
     *
     * @var string
     */
    public $attentionPriority;

    /**
     * @example entrance
     *
     * @var string
     */
    public $chapterTitle;

    /**
     * @example shelf is tidy
     *
     * @var string
     */
    public $description;

    /**
     * @example event0001
     *
     * @var string
     */
    public $eventId;

    /**
     * @var images[]
     */
    public $images;

    /**
     * @example 12000
     *
     * @var int
     */
    public $keyFrameMs;

    /**
     * @example segment0001
     *
     * @var string
     */
    public $parentSegmentId;

    /**
     * @example shelf
     *
     * @var string
     */
    public $subjectLabel;

    /**
     * @example 15000
     *
     * @var int
     */
    public $timestampEndMs;

    /**
     * @example 10000
     *
     * @var int
     */
    public $timestampStartMs;
    protected $_name = [
        'attentionPriority' => 'attentionPriority',
        'chapterTitle' => 'chapterTitle',
        'description' => 'description',
        'eventId' => 'eventId',
        'images' => 'images',
        'keyFrameMs' => 'keyFrameMs',
        'parentSegmentId' => 'parentSegmentId',
        'subjectLabel' => 'subjectLabel',
        'timestampEndMs' => 'timestampEndMs',
        'timestampStartMs' => 'timestampStartMs',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->attentionPriority) {
            $res['attentionPriority'] = $this->attentionPriority;
        }
        if (null !== $this->chapterTitle) {
            $res['chapterTitle'] = $this->chapterTitle;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->eventId) {
            $res['eventId'] = $this->eventId;
        }
        if (null !== $this->images) {
            $res['images'] = [];
            if (null !== $this->images && \is_array($this->images)) {
                $n = 0;
                foreach ($this->images as $item) {
                    $res['images'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->keyFrameMs) {
            $res['keyFrameMs'] = $this->keyFrameMs;
        }
        if (null !== $this->parentSegmentId) {
            $res['parentSegmentId'] = $this->parentSegmentId;
        }
        if (null !== $this->subjectLabel) {
            $res['subjectLabel'] = $this->subjectLabel;
        }
        if (null !== $this->timestampEndMs) {
            $res['timestampEndMs'] = $this->timestampEndMs;
        }
        if (null !== $this->timestampStartMs) {
            $res['timestampStartMs'] = $this->timestampStartMs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return events
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['attentionPriority'])) {
            $model->attentionPriority = $map['attentionPriority'];
        }
        if (isset($map['chapterTitle'])) {
            $model->chapterTitle = $map['chapterTitle'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['eventId'])) {
            $model->eventId = $map['eventId'];
        }
        if (isset($map['images'])) {
            if (!empty($map['images'])) {
                $model->images = [];
                $n = 0;
                foreach ($map['images'] as $item) {
                    $model->images[$n++] = null !== $item ? images::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['keyFrameMs'])) {
            $model->keyFrameMs = $map['keyFrameMs'];
        }
        if (isset($map['parentSegmentId'])) {
            $model->parentSegmentId = $map['parentSegmentId'];
        }
        if (isset($map['subjectLabel'])) {
            $model->subjectLabel = $map['subjectLabel'];
        }
        if (isset($map['timestampEndMs'])) {
            $model->timestampEndMs = $map['timestampEndMs'];
        }
        if (isset($map['timestampStartMs'])) {
            $model->timestampStartMs = $map['timestampStartMs'];
        }

        return $model;
    }
}
