<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vbizfinance_1_0\Models;

use AlibabaCloud\Tea\Model;

class GetSupplierResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $accountantBookIdList;

    /**
     * @description This parameter is required.
     *
     * @example SUP_XXX
     *
     * @var string
     */
    public $code;

    /**
     * @description This parameter is required.
     *
     * @example 1634786828686
     *
     * @var int
     */
    public $createTime;

    /**
     * @description This parameter is required.
     *
     * @example 原材料供应商
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example XX公司
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example valid
     *
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $userDefineCode;
    protected $_name = [
        'accountantBookIdList' => 'accountantBookIdList',
        'code'                 => 'code',
        'createTime'           => 'createTime',
        'description'          => 'description',
        'name'                 => 'name',
        'status'               => 'status',
        'userDefineCode'       => 'userDefineCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountantBookIdList) {
            $res['accountantBookIdList'] = $this->accountantBookIdList;
        }
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->userDefineCode) {
            $res['userDefineCode'] = $this->userDefineCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSupplierResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountantBookIdList'])) {
            if (!empty($map['accountantBookIdList'])) {
                $model->accountantBookIdList = $map['accountantBookIdList'];
            }
        }
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['userDefineCode'])) {
            $model->userDefineCode = $map['userDefineCode'];
        }

        return $model;
    }
}
