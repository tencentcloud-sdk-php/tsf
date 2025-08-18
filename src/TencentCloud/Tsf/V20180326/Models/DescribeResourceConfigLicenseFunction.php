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
 * DescribeResourceConfig
 *
 * @method string getName() 获取功能名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置功能名
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnable() 获取是否启用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnable(boolean $Enable) 设置是否启用
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeResourceConfigLicenseFunction extends AbstractModel
{
    /**
     * @var string 功能名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var boolean 是否启用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enable;

    /**
     * @param string $Name 功能名
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Enable 是否启用
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}
