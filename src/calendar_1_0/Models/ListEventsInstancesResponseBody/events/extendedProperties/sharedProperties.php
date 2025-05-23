<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcalendar_1_0\Models\ListEventsInstancesResponseBody\events\extendedProperties;

use AlibabaCloud\Tea\Model;

class sharedProperties extends Model
{
    /**
     * @var string
     */
    public $sourceOpenCid;
    protected $_name = [
        'sourceOpenCid' => 'sourceOpenCid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceOpenCid) {
            $res['sourceOpenCid'] = $this->sourceOpenCid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sharedProperties
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['sourceOpenCid'])) {
            $model->sourceOpenCid = $map['sourceOpenCid'];
        }

        return $model;
    }
}
