<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vminutes_1_0\Models\QueryMinutesTodoResponseBody;

use AlibabaCloud\Tea\Model;

class todoGenerationInfo extends Model
{
    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $state;

    /**
     * @var bool
     */
    public $terminal;
    protected $_name = [
        'reason' => 'reason',
        'state' => 'state',
        'terminal' => 'terminal',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->reason) {
            $res['reason'] = $this->reason;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }
        if (null !== $this->terminal) {
            $res['terminal'] = $this->terminal;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return todoGenerationInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['reason'])) {
            $model->reason = $map['reason'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }
        if (isset($map['terminal'])) {
            $model->terminal = $map['terminal'];
        }

        return $model;
    }
}
