<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vservice_group_1_0\Models;

use AlibabaCloud\Tea\Model;

class UpgradeNormalGroupRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $openConversationId;

    /**
     * @var string
     */
    public $openGroupSetId;

    /**
     * @var string
     */
    public $openTeamId;

    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'openConversationId' => 'openConversationId',
        'openGroupSetId' => 'openGroupSetId',
        'openTeamId' => 'openTeamId',
        'templateId' => 'templateId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->openConversationId) {
            $res['openConversationId'] = $this->openConversationId;
        }
        if (null !== $this->openGroupSetId) {
            $res['openGroupSetId'] = $this->openGroupSetId;
        }
        if (null !== $this->openTeamId) {
            $res['openTeamId'] = $this->openTeamId;
        }
        if (null !== $this->templateId) {
            $res['templateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeNormalGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['openConversationId'])) {
            $model->openConversationId = $map['openConversationId'];
        }
        if (isset($map['openGroupSetId'])) {
            $model->openGroupSetId = $map['openGroupSetId'];
        }
        if (isset($map['openTeamId'])) {
            $model->openTeamId = $map['openTeamId'];
        }
        if (isset($map['templateId'])) {
            $model->templateId = $map['templateId'];
        }

        return $model;
    }
}
