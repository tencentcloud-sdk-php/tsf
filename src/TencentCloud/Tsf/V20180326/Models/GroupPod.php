<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 部署组实例列表
 *
 * @method string getPodName() 获取实例名称(对应到kubernetes的pod名称)
 * @method void setPodName(string $PodName) 设置实例名称(对应到kubernetes的pod名称)
 * @method string getPodId() 获取实例ID(对应到kubernetes的pod id)
 * @method void setPodId(string $PodId) 设置实例ID(对应到kubernetes的pod id)
 * @method string getStatus() 获取实例状态，请参考后面的实例以及容器的状态定义。启动中（pod 未 ready）：Starting；运行中：Running；异常：Abnormal；停止：Stopped；
 * @method void setStatus(string $Status) 设置实例状态，请参考后面的实例以及容器的状态定义。启动中（pod 未 ready）：Starting；运行中：Running；异常：Abnormal；停止：Stopped；
 * @method string getReason() 获取实例处于当前状态的原因，例如容器下载镜像失败
 * @method void setReason(string $Reason) 设置实例处于当前状态的原因，例如容器下载镜像失败
 * @method string getNodeIp() 获取主机IP
 * @method void setNodeIp(string $NodeIp) 设置主机IP
 * @method string getIp() 获取实例IP
 * @method void setIp(string $Ip) 设置实例IP
 * @method integer getRestartCount() 获取实例中容器的重启次数
 * @method void setRestartCount(integer $RestartCount) 设置实例中容器的重启次数
 * @method integer getReadyCount() 获取实例中已就绪容器的个数
 * @method void setReadyCount(integer $ReadyCount) 设置实例中已就绪容器的个数
 * @method string getRuntime() 获取运行时长
 * @method void setRuntime(string $Runtime) 设置运行时长
 * @method string getCreatedAt() 获取实例启动时间
 * @method void setCreatedAt(string $CreatedAt) 设置实例启动时间
 * @method string getServiceInstanceStatus() 获取服务实例状态
 * @method void setServiceInstanceStatus(string $ServiceInstanceStatus) 设置服务实例状态
 * @method string getInstanceAvailableStatus() 获取机器实例可使用状态
 * @method void setInstanceAvailableStatus(string $InstanceAvailableStatus) 设置机器实例可使用状态
 * @method string getInstanceStatus() 获取机器实例状态
 * @method void setInstanceStatus(string $InstanceStatus) 设置机器实例状态
 * @method string getNodeInstanceId() 获取节点实例id
 * @method void setNodeInstanceId(string $NodeInstanceId) 设置节点实例id
 * @method string getSpecTotalCount() 获取预期副本数
 * @method void setSpecTotalCount(string $SpecTotalCount) 设置预期副本数
 */
class GroupPod extends AbstractModel
{
    /**
     * @var string 实例名称(对应到kubernetes的pod名称)
     */
    public $PodName;

    /**
     * @var string 实例ID(对应到kubernetes的pod id)
     */
    public $PodId;

    /**
     * @var string 实例状态，请参考后面的实例以及容器的状态定义。启动中（pod 未 ready）：Starting；运行中：Running；异常：Abnormal；停止：Stopped；
     */
    public $Status;

    /**
     * @var string 实例处于当前状态的原因，例如容器下载镜像失败
     */
    public $Reason;

    /**
     * @var string 主机IP
     */
    public $NodeIp;

    /**
     * @var string 实例IP
     */
    public $Ip;

    /**
     * @var integer 实例中容器的重启次数
     */
    public $RestartCount;

    /**
     * @var integer 实例中已就绪容器的个数
     */
    public $ReadyCount;

    /**
     * @var string 运行时长
     */
    public $Runtime;

    /**
     * @var string 实例启动时间
     */
    public $CreatedAt;

    /**
     * @var string 服务实例状态
     */
    public $ServiceInstanceStatus;

    /**
     * @var string 机器实例可使用状态
     */
    public $InstanceAvailableStatus;

    /**
     * @var string 机器实例状态
     */
    public $InstanceStatus;

    /**
     * @var string 节点实例id
     */
    public $NodeInstanceId;

    /**
     * @var string 预期副本数
     */
    public $SpecTotalCount;

    /**
     * @param string $PodName 实例名称(对应到kubernetes的pod名称)
     * @param string $PodId 实例ID(对应到kubernetes的pod id)
     * @param string $Status 实例状态，请参考后面的实例以及容器的状态定义。启动中（pod 未 ready）：Starting；运行中：Running；异常：Abnormal；停止：Stopped；
     * @param string $Reason 实例处于当前状态的原因，例如容器下载镜像失败
     * @param string $NodeIp 主机IP
     * @param string $Ip 实例IP
     * @param integer $RestartCount 实例中容器的重启次数
     * @param integer $ReadyCount 实例中已就绪容器的个数
     * @param string $Runtime 运行时长
     * @param string $CreatedAt 实例启动时间
     * @param string $ServiceInstanceStatus 服务实例状态
     * @param string $InstanceAvailableStatus 机器实例可使用状态
     * @param string $InstanceStatus 机器实例状态
     * @param string $NodeInstanceId 节点实例id
     * @param string $SpecTotalCount 预期副本数
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("PodId",$param) and $param["PodId"] !== null) {
            $this->PodId = $param["PodId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("NodeIp",$param) and $param["NodeIp"] !== null) {
            $this->NodeIp = $param["NodeIp"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("RestartCount",$param) and $param["RestartCount"] !== null) {
            $this->RestartCount = $param["RestartCount"];
        }

        if (array_key_exists("ReadyCount",$param) and $param["ReadyCount"] !== null) {
            $this->ReadyCount = $param["ReadyCount"];
        }

        if (array_key_exists("Runtime",$param) and $param["Runtime"] !== null) {
            $this->Runtime = $param["Runtime"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("ServiceInstanceStatus",$param) and $param["ServiceInstanceStatus"] !== null) {
            $this->ServiceInstanceStatus = $param["ServiceInstanceStatus"];
        }

        if (array_key_exists("InstanceAvailableStatus",$param) and $param["InstanceAvailableStatus"] !== null) {
            $this->InstanceAvailableStatus = $param["InstanceAvailableStatus"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("NodeInstanceId",$param) and $param["NodeInstanceId"] !== null) {
            $this->NodeInstanceId = $param["NodeInstanceId"];
        }

        if (array_key_exists("SpecTotalCount",$param) and $param["SpecTotalCount"] !== null) {
            $this->SpecTotalCount = $param["SpecTotalCount"];
        }
    }
}
