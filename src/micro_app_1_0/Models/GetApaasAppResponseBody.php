<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vmicro_app_1_0\Models;

use AlibabaCloud\Tea\Model;

class GetApaasAppResponseBody extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $agentId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $bizAppId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $publishStatus;
    protected $_name = [
        'agentId' => 'agentId',
        'bizAppId' => 'bizAppId',
        'publishStatus' => 'publishStatus',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['agentId'] = $this->agentId;
        }
        if (null !== $this->bizAppId) {
            $res['bizAppId'] = $this->bizAppId;
        }
        if (null !== $this->publishStatus) {
            $res['publishStatus'] = $this->publishStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetApaasAppResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['agentId'])) {
            $model->agentId = $map['agentId'];
        }
        if (isset($map['bizAppId'])) {
            $model->bizAppId = $map['bizAppId'];
        }
        if (isset($map['publishStatus'])) {
            $model->publishStatus = $map['publishStatus'];
        }

        return $model;
    }
}
