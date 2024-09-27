<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vedu_1_0\Models;

use AlibabaCloud\SDK\Dingtalk\Vedu_1_0\Models\UpdateCollegeContactUserRequest\deptOrderList;
use AlibabaCloud\SDK\Dingtalk\Vedu_1_0\Models\UpdateCollegeContactUserRequest\deptTitleList;
use AlibabaCloud\Tea\Model;

class UpdateCollegeContactUserRequest extends Model
{
    /**
     * @var int[]
     */
    public $deptIdList;

    /**
     * @var deptOrderList[]
     */
    public $deptOrderList;

    /**
     * @var deptTitleList[]
     */
    public $deptTitleList;

    /**
     * @example test@xxx.com
     *
     * @var string
     */
    public $email;

    /**
     * @example college_student
     *
     * @var string
     */
    public $empType;

    /**
     * @var string[]
     */
    public $extension;

    /**
     * @example manager_userid
     *
     * @var string
     */
    public $forceUpdateFields;

    /**
     * @var bool
     */
    public $hideMobile;

    /**
     * @example 1597573616828
     *
     * @var int
     */
    public $hiredDate;

    /**
     * @example 666666
     *
     * @var string
     */
    public $jobNumber;

    /**
     * @example zh_CN
     *
     * @var string
     */
    public $language;

    /**
     * @example 123456
     *
     * @var int
     */
    public $mainDeptId;

    /**
     * @example 001
     *
     * @var string
     */
    public $managerUserid;

    /**
     * @example 张三
     *
     * @var string
     */
    public $name;

    /**
     * @example test@xxx.com
     *
     * @var string
     */
    public $orgEmail;

    /**
     * @example 备注
     *
     * @var string
     */
    public $remark;

    /**
     * @var bool
     */
    public $seniorMode;

    /**
     * @example 010-86123456-2345
     *
     * @var string
     */
    public $telephone;

    /**
     * @example 学工处处长
     *
     * @var string
     */
    public $title;

    /**
     * @description This parameter is required.
     *
     * @example zhangsan666
     *
     * @var string
     */
    public $userid;

    /**
     * @example 阿里巴巴c区
     *
     * @var string
     */
    public $workPlace;
    protected $_name = [
        'deptIdList'        => 'deptIdList',
        'deptOrderList'     => 'deptOrderList',
        'deptTitleList'     => 'deptTitleList',
        'email'             => 'email',
        'empType'           => 'empType',
        'extension'         => 'extension',
        'forceUpdateFields' => 'forceUpdateFields',
        'hideMobile'        => 'hideMobile',
        'hiredDate'         => 'hiredDate',
        'jobNumber'         => 'jobNumber',
        'language'          => 'language',
        'mainDeptId'        => 'mainDeptId',
        'managerUserid'     => 'managerUserid',
        'name'              => 'name',
        'orgEmail'          => 'orgEmail',
        'remark'            => 'remark',
        'seniorMode'        => 'seniorMode',
        'telephone'         => 'telephone',
        'title'             => 'title',
        'userid'            => 'userid',
        'workPlace'         => 'workPlace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deptIdList) {
            $res['deptIdList'] = $this->deptIdList;
        }
        if (null !== $this->deptOrderList) {
            $res['deptOrderList'] = [];
            if (null !== $this->deptOrderList && \is_array($this->deptOrderList)) {
                $n = 0;
                foreach ($this->deptOrderList as $item) {
                    $res['deptOrderList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->deptTitleList) {
            $res['deptTitleList'] = [];
            if (null !== $this->deptTitleList && \is_array($this->deptTitleList)) {
                $n = 0;
                foreach ($this->deptTitleList as $item) {
                    $res['deptTitleList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->email) {
            $res['email'] = $this->email;
        }
        if (null !== $this->empType) {
            $res['empType'] = $this->empType;
        }
        if (null !== $this->extension) {
            $res['extension'] = $this->extension;
        }
        if (null !== $this->forceUpdateFields) {
            $res['forceUpdateFields'] = $this->forceUpdateFields;
        }
        if (null !== $this->hideMobile) {
            $res['hideMobile'] = $this->hideMobile;
        }
        if (null !== $this->hiredDate) {
            $res['hiredDate'] = $this->hiredDate;
        }
        if (null !== $this->jobNumber) {
            $res['jobNumber'] = $this->jobNumber;
        }
        if (null !== $this->language) {
            $res['language'] = $this->language;
        }
        if (null !== $this->mainDeptId) {
            $res['mainDeptId'] = $this->mainDeptId;
        }
        if (null !== $this->managerUserid) {
            $res['managerUserid'] = $this->managerUserid;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->orgEmail) {
            $res['orgEmail'] = $this->orgEmail;
        }
        if (null !== $this->remark) {
            $res['remark'] = $this->remark;
        }
        if (null !== $this->seniorMode) {
            $res['seniorMode'] = $this->seniorMode;
        }
        if (null !== $this->telephone) {
            $res['telephone'] = $this->telephone;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->workPlace) {
            $res['workPlace'] = $this->workPlace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCollegeContactUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['deptIdList'])) {
            if (!empty($map['deptIdList'])) {
                $model->deptIdList = $map['deptIdList'];
            }
        }
        if (isset($map['deptOrderList'])) {
            if (!empty($map['deptOrderList'])) {
                $model->deptOrderList = [];
                $n                    = 0;
                foreach ($map['deptOrderList'] as $item) {
                    $model->deptOrderList[$n++] = null !== $item ? deptOrderList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['deptTitleList'])) {
            if (!empty($map['deptTitleList'])) {
                $model->deptTitleList = [];
                $n                    = 0;
                foreach ($map['deptTitleList'] as $item) {
                    $model->deptTitleList[$n++] = null !== $item ? deptTitleList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['email'])) {
            $model->email = $map['email'];
        }
        if (isset($map['empType'])) {
            $model->empType = $map['empType'];
        }
        if (isset($map['extension'])) {
            $model->extension = $map['extension'];
        }
        if (isset($map['forceUpdateFields'])) {
            $model->forceUpdateFields = $map['forceUpdateFields'];
        }
        if (isset($map['hideMobile'])) {
            $model->hideMobile = $map['hideMobile'];
        }
        if (isset($map['hiredDate'])) {
            $model->hiredDate = $map['hiredDate'];
        }
        if (isset($map['jobNumber'])) {
            $model->jobNumber = $map['jobNumber'];
        }
        if (isset($map['language'])) {
            $model->language = $map['language'];
        }
        if (isset($map['mainDeptId'])) {
            $model->mainDeptId = $map['mainDeptId'];
        }
        if (isset($map['managerUserid'])) {
            $model->managerUserid = $map['managerUserid'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['orgEmail'])) {
            $model->orgEmail = $map['orgEmail'];
        }
        if (isset($map['remark'])) {
            $model->remark = $map['remark'];
        }
        if (isset($map['seniorMode'])) {
            $model->seniorMode = $map['seniorMode'];
        }
        if (isset($map['telephone'])) {
            $model->telephone = $map['telephone'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }
        if (isset($map['userid'])) {
            $model->userid = $map['userid'];
        }
        if (isset($map['workPlace'])) {
            $model->workPlace = $map['workPlace'];
        }

        return $model;
    }
}