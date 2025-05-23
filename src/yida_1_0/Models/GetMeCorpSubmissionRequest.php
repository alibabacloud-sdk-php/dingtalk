<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vyida_1_0\Models;

use AlibabaCloud\Tea\Model;

class GetMeCorpSubmissionRequest extends Model
{
    /**
     * @example ["APP_xxx","APP_xxx"]
     *
     * @var string
     */
    public $appTypes;

    /**
     * @description This parameter is required.
     *
     * @example 未知
     *
     * @var string
     */
    public $corpId;

    /**
     * @example 未知
     *
     * @var int
     */
    public $createFromTimeGMT;

    /**
     * @example 未知
     *
     * @var int
     */
    public $createToTimeGMT;

    /**
     * @example vpc(国内版宜搭)/sgp_vpc(海外版宜搭)
     *
     * @var string
     */
    public $env;

    /**
     * @example 未知
     *
     * @var string
     */
    public $keyword;

    /**
     * @example zh_CN
     *
     * @var string
     */
    public $language;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example ["xx","xxx"]
     *
     * @var string
     */
    public $processCodes;

    /**
     * @description This parameter is required.
     *
     * @example 未知
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'appTypes' => 'appTypes',
        'corpId' => 'corpId',
        'createFromTimeGMT' => 'createFromTimeGMT',
        'createToTimeGMT' => 'createToTimeGMT',
        'env' => 'env',
        'keyword' => 'keyword',
        'language' => 'language',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'processCodes' => 'processCodes',
        'token' => 'token',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appTypes) {
            $res['appTypes'] = $this->appTypes;
        }
        if (null !== $this->corpId) {
            $res['corpId'] = $this->corpId;
        }
        if (null !== $this->createFromTimeGMT) {
            $res['createFromTimeGMT'] = $this->createFromTimeGMT;
        }
        if (null !== $this->createToTimeGMT) {
            $res['createToTimeGMT'] = $this->createToTimeGMT;
        }
        if (null !== $this->env) {
            $res['env'] = $this->env;
        }
        if (null !== $this->keyword) {
            $res['keyword'] = $this->keyword;
        }
        if (null !== $this->language) {
            $res['language'] = $this->language;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->processCodes) {
            $res['processCodes'] = $this->processCodes;
        }
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMeCorpSubmissionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appTypes'])) {
            $model->appTypes = $map['appTypes'];
        }
        if (isset($map['corpId'])) {
            $model->corpId = $map['corpId'];
        }
        if (isset($map['createFromTimeGMT'])) {
            $model->createFromTimeGMT = $map['createFromTimeGMT'];
        }
        if (isset($map['createToTimeGMT'])) {
            $model->createToTimeGMT = $map['createToTimeGMT'];
        }
        if (isset($map['env'])) {
            $model->env = $map['env'];
        }
        if (isset($map['keyword'])) {
            $model->keyword = $map['keyword'];
        }
        if (isset($map['language'])) {
            $model->language = $map['language'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['processCodes'])) {
            $model->processCodes = $map['processCodes'];
        }
        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        return $model;
    }
}
