<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdvi_1_0\Models\PageKanjianRecordProcessResponseBody\result\events;

use AlibabaCloud\Tea\Model;

class images extends Model
{
    /**
     * @example 12000
     *
     * @var int
     */
    public $timestamp;

    /**
     * @example https://example.com/frame.jpg
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'timestamp' => 'timestamp',
        'url' => 'url',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return images
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
