<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdvi_1_0\Models\PageKanjianRecordAnalysisResponseBody\result;

use AlibabaCloud\SDK\Dingtalk\Vdvi_1_0\Models\PageKanjianRecordAnalysisResponseBody\result\details\items;
use AlibabaCloud\Tea\Model;

class details extends Model
{
    /**
     * @var items[]
     */
    public $items;

    /**
     * @example 12000
     *
     * @var int
     */
    public $timestampMs;
    protected $_name = [
        'items' => 'items',
        'timestampMs' => 'timestampMs',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->items) {
            $res['items'] = [];
            if (null !== $this->items && \is_array($this->items)) {
                $n = 0;
                foreach ($this->items as $item) {
                    $res['items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->timestampMs) {
            $res['timestampMs'] = $this->timestampMs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return details
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['items'])) {
            if (!empty($map['items'])) {
                $model->items = [];
                $n = 0;
                foreach ($map['items'] as $item) {
                    $model->items[$n++] = null !== $item ? items::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['timestampMs'])) {
            $model->timestampMs = $map['timestampMs'];
        }

        return $model;
    }
}
