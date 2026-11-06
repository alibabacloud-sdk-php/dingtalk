<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vexclusive_1_0\Models\ListPrivateStorageOpenAppsResponseBody;

use AlibabaCloud\Tea\Model;

class apps extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $clientId;
    protected $_name = [
        'appName' => 'appName',
        'clientId' => 'clientId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['appName'] = $this->appName;
        }
        if (null !== $this->clientId) {
            $res['clientId'] = $this->clientId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appName'])) {
            $model->appName = $map['appName'];
        }
        if (isset($map['clientId'])) {
            $model->clientId = $map['clientId'];
        }

        return $model;
    }
}
