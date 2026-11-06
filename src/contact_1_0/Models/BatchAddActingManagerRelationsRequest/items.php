<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcontact_1_0\Models\BatchAddActingManagerRelationsRequest;

use AlibabaCloud\SDK\Dingtalk\Vcontact_1_0\Models\BatchAddActingManagerRelationsRequest\items\vOrgs;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $fromStaffId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $toStaffId;

    /**
     * @var vOrgs[]
     */
    public $vOrgs;
    protected $_name = [
        'fromStaffId' => 'fromStaffId',
        'toStaffId' => 'toStaffId',
        'vOrgs' => 'vOrgs',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fromStaffId) {
            $res['fromStaffId'] = $this->fromStaffId;
        }
        if (null !== $this->toStaffId) {
            $res['toStaffId'] = $this->toStaffId;
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
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fromStaffId'])) {
            $model->fromStaffId = $map['fromStaffId'];
        }
        if (isset($map['toStaffId'])) {
            $model->toStaffId = $map['toStaffId'];
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
