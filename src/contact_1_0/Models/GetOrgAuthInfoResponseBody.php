<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vcontact_1_0\Models;

use AlibabaCloud\Tea\Model;

class GetOrgAuthInfoResponseBody extends Model
{
    /**
     * @description 企业在钉钉通讯录的名称
     *
     * @var string
     */
    public $orgName;

    /**
     * @description 提交企业认证时营业执照上面的企业名称
     *
     * @var string
     */
    public $licenseOrgName;

    /**
     * @description 营业执照注册号（一般15位）
     *
     * @var string
     */
    public $registrationNum;

    /**
     * @description 社会统一信用代码（固定18位）
     *
     * @var string
     */
    public $unifiedSocialCredit;

    /**
     * @description 组织机构代码证号（格式11111111-1）
     *
     * @var string
     */
    public $organizationCode;

    /**
     * @description 法人
     *
     * @var string
     */
    public $legalPerson;

    /**
     * @description 营业执照url
     *
     * @var string
     */
    public $licenseUrl;

    /**
     * @description 认证等级 1高级认证 2中级认证
     *
     * @var int
     */
    public $authLevel;
    protected $_name = [
        'orgName'             => 'orgName',
        'licenseOrgName'      => 'licenseOrgName',
        'registrationNum'     => 'registrationNum',
        'unifiedSocialCredit' => 'unifiedSocialCredit',
        'organizationCode'    => 'organizationCode',
        'legalPerson'         => 'legalPerson',
        'licenseUrl'          => 'licenseUrl',
        'authLevel'           => 'authLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orgName) {
            $res['orgName'] = $this->orgName;
        }
        if (null !== $this->licenseOrgName) {
            $res['licenseOrgName'] = $this->licenseOrgName;
        }
        if (null !== $this->registrationNum) {
            $res['registrationNum'] = $this->registrationNum;
        }
        if (null !== $this->unifiedSocialCredit) {
            $res['unifiedSocialCredit'] = $this->unifiedSocialCredit;
        }
        if (null !== $this->organizationCode) {
            $res['organizationCode'] = $this->organizationCode;
        }
        if (null !== $this->legalPerson) {
            $res['legalPerson'] = $this->legalPerson;
        }
        if (null !== $this->licenseUrl) {
            $res['licenseUrl'] = $this->licenseUrl;
        }
        if (null !== $this->authLevel) {
            $res['authLevel'] = $this->authLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOrgAuthInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['orgName'])) {
            $model->orgName = $map['orgName'];
        }
        if (isset($map['licenseOrgName'])) {
            $model->licenseOrgName = $map['licenseOrgName'];
        }
        if (isset($map['registrationNum'])) {
            $model->registrationNum = $map['registrationNum'];
        }
        if (isset($map['unifiedSocialCredit'])) {
            $model->unifiedSocialCredit = $map['unifiedSocialCredit'];
        }
        if (isset($map['organizationCode'])) {
            $model->organizationCode = $map['organizationCode'];
        }
        if (isset($map['legalPerson'])) {
            $model->legalPerson = $map['legalPerson'];
        }
        if (isset($map['licenseUrl'])) {
            $model->licenseUrl = $map['licenseUrl'];
        }
        if (isset($map['authLevel'])) {
            $model->authLevel = $map['authLevel'];
        }

        return $model;
    }
}
