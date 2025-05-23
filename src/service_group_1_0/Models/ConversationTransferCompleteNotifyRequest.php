<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vservice_group_1_0\Models;

use AlibabaCloud\Tea\Model;

class ConversationTransferCompleteNotifyRequest extends Model
{
    /**
     * @var string
     */
    public $alipayUserId;

    /**
     * @var string
     */
    public $conversationId;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var string
     */
    public $openTeamId;

    /**
     * @var string
     */
    public $serviceToken;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $visitorToken;
    protected $_name = [
        'alipayUserId' => 'alipayUserId',
        'conversationId' => 'conversationId',
        'nickName' => 'nickName',
        'openTeamId' => 'openTeamId',
        'serviceToken' => 'serviceToken',
        'userId' => 'userId',
        'visitorToken' => 'visitorToken',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alipayUserId) {
            $res['alipayUserId'] = $this->alipayUserId;
        }
        if (null !== $this->conversationId) {
            $res['conversationId'] = $this->conversationId;
        }
        if (null !== $this->nickName) {
            $res['nickName'] = $this->nickName;
        }
        if (null !== $this->openTeamId) {
            $res['openTeamId'] = $this->openTeamId;
        }
        if (null !== $this->serviceToken) {
            $res['serviceToken'] = $this->serviceToken;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        if (null !== $this->visitorToken) {
            $res['visitorToken'] = $this->visitorToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConversationTransferCompleteNotifyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alipayUserId'])) {
            $model->alipayUserId = $map['alipayUserId'];
        }
        if (isset($map['conversationId'])) {
            $model->conversationId = $map['conversationId'];
        }
        if (isset($map['nickName'])) {
            $model->nickName = $map['nickName'];
        }
        if (isset($map['openTeamId'])) {
            $model->openTeamId = $map['openTeamId'];
        }
        if (isset($map['serviceToken'])) {
            $model->serviceToken = $map['serviceToken'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }
        if (isset($map['visitorToken'])) {
            $model->visitorToken = $map['visitorToken'];
        }

        return $model;
    }
}
