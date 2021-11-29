<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcontact_1_0\Models\UpdateBranchAttributesInCooperateRequest;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @description 分支的企业ID
     *
     * @var string
     */
    public $branchCorpId;

    /**
     * @description （分支/合作伙伴）在（集团/合作空间）的别名
     *
     * @var string
     */
    public $unionRootName;

    /**
     * @description 挂载节点部门ID
     *
     * @var int
     */
    public $linkDeptId;
    protected $_name = [
        'branchCorpId'  => 'branchCorpId',
        'unionRootName' => 'unionRootName',
        'linkDeptId'    => 'linkDeptId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->branchCorpId) {
            $res['branchCorpId'] = $this->branchCorpId;
        }
        if (null !== $this->unionRootName) {
            $res['unionRootName'] = $this->unionRootName;
        }
        if (null !== $this->linkDeptId) {
            $res['linkDeptId'] = $this->linkDeptId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['branchCorpId'])) {
            $model->branchCorpId = $map['branchCorpId'];
        }
        if (isset($map['unionRootName'])) {
            $model->unionRootName = $map['unionRootName'];
        }
        if (isset($map['linkDeptId'])) {
            $model->linkDeptId = $map['linkDeptId'];
        }

        return $model;
    }
}