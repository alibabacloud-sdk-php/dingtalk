<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdvi_1_0\Models\PageKanjianRecordAnalysisResponseBody\result\details;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example shelf ok
     *
     * @var string
     */
    public $asrText;

    /**
     * @example shelf is tidy
     *
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $keyFrames;

    /**
     * @example item0001
     *
     * @var string
     */
    public $name;

    /**
     * @example true
     *
     * @var string
     */
    public $result;

    /**
     * @example shelf-check
     *
     * @var string
     */
    public $taskName;
    protected $_name = [
        'asrText' => 'asrText',
        'description' => 'description',
        'keyFrames' => 'keyFrames',
        'name' => 'name',
        'result' => 'result',
        'taskName' => 'taskName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->asrText) {
            $res['asrText'] = $this->asrText;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->keyFrames) {
            $res['keyFrames'] = $this->keyFrames;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }
        if (null !== $this->taskName) {
            $res['taskName'] = $this->taskName;
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
        if (isset($map['asrText'])) {
            $model->asrText = $map['asrText'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['keyFrames'])) {
            if (!empty($map['keyFrames'])) {
                $model->keyFrames = $map['keyFrames'];
            }
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['result'])) {
            $model->result = $map['result'];
        }
        if (isset($map['taskName'])) {
            $model->taskName = $map['taskName'];
        }

        return $model;
    }
}
