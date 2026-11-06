<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcontact_1_0\Models\BatchGetActingManagerRelationsResponseBody\data;

use AlibabaCloud\SDK\Dingtalk\Vcontact_1_0\Models\BatchGetActingManagerRelationsResponseBody\data\relations\vOrgs;
use AlibabaCloud\Tea\Model;

class relations extends Model
{
    /**
     * @var string
     */
    public $fromStaffId;

    /**
     * @var vOrgs[]
     */
    public $vOrgs;
    protected $_name = [
        'fromStaffId' => 'fromStaffId',
        'vOrgs' => 'vOrgs',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fromStaffId) {
            $res['fromStaffId'] = $this->fromStaffId;
        }
        if (null !== $this->vOrgs) {
            $res['vOrgs'] = [];
            if (null !== $this->vOrgs && \is_array($this->vOrgs)) {
                $n = 0;
                foreach ($this->vOrgs as $item) {
                    $res['vOrgs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relations
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fromStaffId'])) {
            $model->fromStaffId = $map['fromStaffId'];
        }
        if (isset($map['vOrgs'])) {
            if (!empty($map['vOrgs'])) {
                $model->vOrgs = [];
                $n = 0;
                foreach ($map['vOrgs'] as $item) {
                    $model->vOrgs[$n++] = null !== $item ? vOrgs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
