<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 自定义容忍调度规则列表
 *
 * @method string getKey() 获取-
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKey(string $Key) 设置-
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperator() 获取-
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperator(string $Operator) 设置-
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取-
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置-
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEffect() 获取-
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEffect(string $Effect) 设置-
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTolerationSeconds() 获取-
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTolerationSeconds(integer $TolerationSeconds) 设置-
注意：此字段可能返回 null，表示取不到有效值。
 */
class CustomTolerateSchedule extends AbstractModel
{
    /**
     * @var string -
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Key;

    /**
     * @var string -
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Operator;

    /**
     * @var string -
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var string -
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Effect;

    /**
     * @var integer -
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TolerationSeconds;

    /**
     * @param string $Key -
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Operator -
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value -
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Effect -
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TolerationSeconds -
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Effect",$param) and $param["Effect"] !== null) {
            $this->Effect = $param["Effect"];
        }

        if (array_key_exists("TolerationSeconds",$param) and $param["TolerationSeconds"] !== null) {
            $this->TolerationSeconds = $param["TolerationSeconds"];
        }
    }
}
