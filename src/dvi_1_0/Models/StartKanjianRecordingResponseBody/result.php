<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdvi_1_0\Models\StartKanjianRecordingResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example record0001
     *
     * @var string
     */
    public $recordId;

    /**
     * @example session0001
     *
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'recordId' => 'recordId',
        'sessionId' => 'sessionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordId) {
            $res['recordId'] = $this->recordId;
        }
        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
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
        if (isset($map['recordId'])) {
            $model->recordId = $map['recordId'];
        }
        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        return $model;
    }
}
