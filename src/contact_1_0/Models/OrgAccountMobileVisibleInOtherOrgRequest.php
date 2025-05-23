<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcontact_1_0\Models;

use AlibabaCloud\Tea\Model;

class OrgAccountMobileVisibleInOtherOrgRequest extends Model
{
    /**
     * @var string[]
     */
    public $fields;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $optUserId;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $toCorpIds;
    protected $_name = [
        'fields' => 'fields',
        'optUserId' => 'optUserId',
        'toCorpIds' => 'toCorpIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fields) {
            $res['fields'] = $this->fields;
        }
        if (null !== $this->optUserId) {
            $res['optUserId'] = $this->optUserId;
        }
        if (null !== $this->toCorpIds) {
            $res['toCorpIds'] = $this->toCorpIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OrgAccountMobileVisibleInOtherOrgRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fields'])) {
            if (!empty($map['fields'])) {
                $model->fields = $map['fields'];
            }
        }
        if (isset($map['optUserId'])) {
            $model->optUserId = $map['optUserId'];
        }
        if (isset($map['toCorpIds'])) {
            if (!empty($map['toCorpIds'])) {
                $model->toCorpIds = $map['toCorpIds'];
            }
        }

        return $model;
    }
}
