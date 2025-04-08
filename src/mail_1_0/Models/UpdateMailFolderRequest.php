<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vmail_1_0\Models;

use AlibabaCloud\Tea\Model;

class UpdateMailFolderRequest extends Model
{
    /**
     * @var string
     */
    public $displayName;
    protected $_name = [
        'displayName' => 'displayName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMailFolderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        return $model;
    }
}
