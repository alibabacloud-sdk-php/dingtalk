<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dingtalk\Vdvi_1_0\Models\GetKanjianDeviceResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 80
     *
     * @var int
     */
    public $batteryLevel;

    /**
     * @example BOUND
     *
     * @var string
     */
    public $bindStatus;

    /**
     * @var bool
     */
    public $chargeStatus;

    /**
     * @example OPEN
     *
     * @var string
     */
    public $coverStatus;

    /**
     * @example store-front
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example BV0000000001
     *
     * @var string
     */
    public $deviceSn;

    /**
     * @example 1.0.0
     *
     * @var string
     */
    public $firmwareVersion;

    /**
     * @example ONLINE
     *
     * @var string
     */
    public $onlineStatus;

    /**
     * @example 1760000000000
     *
     * @var int
     */
    public $recordingStartTimeMs;

    /**
     * @example 0
     *
     * @var int
     */
    public $signalStrength;

    /**
     * @example 32768
     *
     * @var int
     */
    public $storageFreeMb;

    /**
     * @example 65536
     *
     * @var int
     */
    public $storageTotalMb;

    /**
     * @example IDLE
     *
     * @var string
     */
    public $workStatus;
    protected $_name = [
        'batteryLevel' => 'batteryLevel',
        'bindStatus' => 'bindStatus',
        'chargeStatus' => 'chargeStatus',
        'coverStatus' => 'coverStatus',
        'deviceName' => 'deviceName',
        'deviceSn' => 'deviceSn',
        'firmwareVersion' => 'firmwareVersion',
        'onlineStatus' => 'onlineStatus',
        'recordingStartTimeMs' => 'recordingStartTimeMs',
        'signalStrength' => 'signalStrength',
        'storageFreeMb' => 'storageFreeMb',
        'storageTotalMb' => 'storageTotalMb',
        'workStatus' => 'workStatus',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->batteryLevel) {
            $res['batteryLevel'] = $this->batteryLevel;
        }
        if (null !== $this->bindStatus) {
            $res['bindStatus'] = $this->bindStatus;
        }
        if (null !== $this->chargeStatus) {
            $res['chargeStatus'] = $this->chargeStatus;
        }
        if (null !== $this->coverStatus) {
            $res['coverStatus'] = $this->coverStatus;
        }
        if (null !== $this->deviceName) {
            $res['deviceName'] = $this->deviceName;
        }
        if (null !== $this->deviceSn) {
            $res['deviceSn'] = $this->deviceSn;
        }
        if (null !== $this->firmwareVersion) {
            $res['firmwareVersion'] = $this->firmwareVersion;
        }
        if (null !== $this->onlineStatus) {
            $res['onlineStatus'] = $this->onlineStatus;
        }
        if (null !== $this->recordingStartTimeMs) {
            $res['recordingStartTimeMs'] = $this->recordingStartTimeMs;
        }
        if (null !== $this->signalStrength) {
            $res['signalStrength'] = $this->signalStrength;
        }
        if (null !== $this->storageFreeMb) {
            $res['storageFreeMb'] = $this->storageFreeMb;
        }
        if (null !== $this->storageTotalMb) {
            $res['storageTotalMb'] = $this->storageTotalMb;
        }
        if (null !== $this->workStatus) {
            $res['workStatus'] = $this->workStatus;
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
        if (isset($map['batteryLevel'])) {
            $model->batteryLevel = $map['batteryLevel'];
        }
        if (isset($map['bindStatus'])) {
            $model->bindStatus = $map['bindStatus'];
        }
        if (isset($map['chargeStatus'])) {
            $model->chargeStatus = $map['chargeStatus'];
        }
        if (isset($map['coverStatus'])) {
            $model->coverStatus = $map['coverStatus'];
        }
        if (isset($map['deviceName'])) {
            $model->deviceName = $map['deviceName'];
        }
        if (isset($map['deviceSn'])) {
            $model->deviceSn = $map['deviceSn'];
        }
        if (isset($map['firmwareVersion'])) {
            $model->firmwareVersion = $map['firmwareVersion'];
        }
        if (isset($map['onlineStatus'])) {
            $model->onlineStatus = $map['onlineStatus'];
        }
        if (isset($map['recordingStartTimeMs'])) {
            $model->recordingStartTimeMs = $map['recordingStartTimeMs'];
        }
        if (isset($map['signalStrength'])) {
            $model->signalStrength = $map['signalStrength'];
        }
        if (isset($map['storageFreeMb'])) {
            $model->storageFreeMb = $map['storageFreeMb'];
        }
        if (isset($map['storageTotalMb'])) {
            $model->storageTotalMb = $map['storageTotalMb'];
        }
        if (isset($map['workStatus'])) {
            $model->workStatus = $map['workStatus'];
        }

        return $model;
    }
}
