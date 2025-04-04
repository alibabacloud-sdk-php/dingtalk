<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vservice_group_1_0\Models\CustomerSendMsgTaskRequest\sendConfig;

use AlibabaCloud\Tea\Model;

class urlTrackConfig extends Model
{
    /**
     * @example 百度
     *
     * @var string
     */
    public $title;

    /**
     * @example 88888
     *
     * @var string
     */
    public $trackId;

    /**
     * @example http://www.baidu.com
     *
     * @var string
     */
    public $trackUrl;
    protected $_name = [
        'title' => 'title',
        'trackId' => 'trackId',
        'trackUrl' => 'trackUrl',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->trackId) {
            $res['trackId'] = $this->trackId;
        }
        if (null !== $this->trackUrl) {
            $res['trackUrl'] = $this->trackUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return urlTrackConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['trackId'])) {
            $model->trackId = $map['trackId'];
        }
        if (isset($map['trackUrl'])) {
            $model->trackUrl = $map['trackUrl'];
        }

        return $model;
    }
}
