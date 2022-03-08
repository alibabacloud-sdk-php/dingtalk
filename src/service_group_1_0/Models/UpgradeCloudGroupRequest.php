<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vservice_group_1_0\Models;

use AlibabaCloud\Tea\Model;

class UpgradeCloudGroupRequest extends Model
{
    /**
     * @description 云客服租户id
     *
     * @var string
     */
    public $ccsInstanceId;

    /**
     * @description 钉钉群id
     *
     * @var string
     */
    public $openConversationId;

    /**
     * @description 升级的目标群组id
     *
     * @var string
     */
    public $openGroupSetId;

    /**
     * @description 升级的目标团队id
     *
     * @var string
     */
    public $openTeamId;

    /**
     * @description 升级的目标模板id
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'ccsInstanceId'      => 'ccsInstanceId',
        'openConversationId' => 'openConversationId',
        'openGroupSetId'     => 'openGroupSetId',
        'openTeamId'         => 'openTeamId',
        'templateId'         => 'templateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ccsInstanceId) {
            $res['ccsInstanceId'] = $this->ccsInstanceId;
        }
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
     * @return UpgradeCloudGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ccsInstanceId'])) {
            $model->ccsInstanceId = $map['ccsInstanceId'];
        }
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
