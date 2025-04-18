<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Voauth2_1_0\Models;

use AlibabaCloud\Tea\Model;

class GetCorpAccessTokenRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $authCorpId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $suiteKey;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $suiteSecret;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $suiteTicket;
    protected $_name = [
        'authCorpId' => 'authCorpId',
        'suiteKey' => 'suiteKey',
        'suiteSecret' => 'suiteSecret',
        'suiteTicket' => 'suiteTicket',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->authCorpId) {
            $res['authCorpId'] = $this->authCorpId;
        }
        if (null !== $this->suiteKey) {
            $res['suiteKey'] = $this->suiteKey;
        }
        if (null !== $this->suiteSecret) {
            $res['suiteSecret'] = $this->suiteSecret;
        }
        if (null !== $this->suiteTicket) {
            $res['suiteTicket'] = $this->suiteTicket;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCorpAccessTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['authCorpId'])) {
            $model->authCorpId = $map['authCorpId'];
        }
        if (isset($map['suiteKey'])) {
            $model->suiteKey = $map['suiteKey'];
        }
        if (isset($map['suiteSecret'])) {
            $model->suiteSecret = $map['suiteSecret'];
        }
        if (isset($map['suiteTicket'])) {
            $model->suiteTicket = $map['suiteTicket'];
        }

        return $model;
    }
}
