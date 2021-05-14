<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdingmi_1_0\Models;

use AlibabaCloud\Tea\Model;

class ReplyRobotRequest extends Model
{
    /**
     * @description 企业corpId
     *
     * @var string
     */
    public $dingCorpId;

    /**
     * @description 回复消息内容的json string
     *
     * @var string
     */
    public $proxyMessageStr;
    protected $_name = [
        'dingCorpId'      => 'dingCorpId',
        'proxyMessageStr' => 'proxyMessageStr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dingCorpId) {
            $res['dingCorpId'] = $this->dingCorpId;
        }
        if (null !== $this->proxyMessageStr) {
            $res['proxyMessageStr'] = $this->proxyMessageStr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReplyRobotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['dingCorpId'])) {
            $model->dingCorpId = $map['dingCorpId'];
        }
        if (isset($map['proxyMessageStr'])) {
            $model->proxyMessageStr = $map['proxyMessageStr'];
        }

        return $model;
    }
}
