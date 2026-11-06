<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdvi_1_0\Models\GetServiceRecordTranscriptResponseBody;

use AlibabaCloud\SDK\Dingtalk\Vdvi_1_0\Models\GetServiceRecordTranscriptResponseBody\result\audionText;
use AlibabaCloud\SDK\Dingtalk\Vdvi_1_0\Models\GetServiceRecordTranscriptResponseBody\result\enhanceChatContent;
use AlibabaCloud\SDK\Dingtalk\Vdvi_1_0\Models\GetServiceRecordTranscriptResponseBody\result\speaker;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var audionText
     */
    public $audionText;

    /**
     * @var enhanceChatContent
     */
    public $enhanceChatContent;

    /**
     * @var speaker
     */
    public $speaker;
    protected $_name = [
        'audionText' => 'audionText',
        'enhanceChatContent' => 'enhanceChatContent',
        'speaker' => 'speaker',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->audionText) {
            $res['audionText'] = null !== $this->audionText ? $this->audionText->toMap() : null;
        }
        if (null !== $this->enhanceChatContent) {
            $res['enhanceChatContent'] = null !== $this->enhanceChatContent ? $this->enhanceChatContent->toMap() : null;
        }
        if (null !== $this->speaker) {
            $res['speaker'] = null !== $this->speaker ? $this->speaker->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['audionText'])) {
            $model->audionText = audionText::fromMap($map['audionText']);
        }
        if (isset($map['enhanceChatContent'])) {
            $model->enhanceChatContent = enhanceChatContent::fromMap($map['enhanceChatContent']);
        }
        if (isset($map['speaker'])) {
            $model->speaker = speaker::fromMap($map['speaker']);
        }

        return $model;
    }
}
