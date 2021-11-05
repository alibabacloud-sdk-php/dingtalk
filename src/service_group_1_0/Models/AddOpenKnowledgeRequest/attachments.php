<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vservice_group_1_0\Models\AddOpenKnowledgeRequest;

use AlibabaCloud\Tea\Model;

class attachments extends Model
{
    /**
     * @description 附件名称
     *
     * @var string
     */
    public $title;

    /**
     * @description 这个是附件URL
     *
     * @var string
     */
    public $path;

    /**
     * @description 附件大小
     *
     * @var float
     */
    public $size;

    /**
     * @description 附件扩展名
     *
     * @var string
     */
    public $suffix;

    /**
     * @description 媒体类型
     *
     * @var string
     */
    public $mimeType;
    protected $_name = [
        'title'    => 'title',
        'path'     => 'path',
        'size'     => 'size',
        'suffix'   => 'suffix',
        'mimeType' => 'mimeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->path) {
            $res['path'] = $this->path;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->suffix) {
            $res['suffix'] = $this->suffix;
        }
        if (null !== $this->mimeType) {
            $res['mimeType'] = $this->mimeType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attachments
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['path'])) {
            $model->path = $map['path'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['suffix'])) {
            $model->suffix = $map['suffix'];
        }
        if (isset($map['mimeType'])) {
            $model->mimeType = $map['mimeType'];
        }

        return $model;
    }
}