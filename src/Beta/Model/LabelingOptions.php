<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LabelingOptions File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* LabelingOptions class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class LabelingOptions extends Entity
{
    /**
    * Gets the labelId
    *
    * @return string The labelId
    */
    public function getLabelId()
    {
        if (array_key_exists("labelId", $this->_propDict)) {
            return $this->_propDict["labelId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the labelId
    *
    * @param string $val The value of the labelId
    *
    * @return LabelingOptions
    */
    public function setLabelId($val)
    {
        $this->_propDict["labelId"] = $val;
        return $this;
    }

    /**
    * Gets the assignmentMethod
    *
    * @return AssignmentMethod The assignmentMethod
    */
    public function getAssignmentMethod()
    {
        if (array_key_exists("assignmentMethod", $this->_propDict)) {
            if (is_a($this->_propDict["assignmentMethod"], "Microsoft\Graph\Beta\Model\AssignmentMethod")) {
                return $this->_propDict["assignmentMethod"];
            } else {
                $this->_propDict["assignmentMethod"] = new AssignmentMethod($this->_propDict["assignmentMethod"]);
                return $this->_propDict["assignmentMethod"];
            }
        }
        return null;
    }

    /**
    * Sets the assignmentMethod
    *
    * @param AssignmentMethod $val The value to assign to the assignmentMethod
    *
    * @return LabelingOptions The LabelingOptions
    */
    public function setAssignmentMethod($val)
    {
        $this->_propDict["assignmentMethod"] = $val;
         return $this;
    }

    /**
    * Gets the downgradeJustification
    *
    * @return DowngradeJustification The downgradeJustification
    */
    public function getDowngradeJustification()
    {
        if (array_key_exists("downgradeJustification", $this->_propDict)) {
            if (is_a($this->_propDict["downgradeJustification"], "Microsoft\Graph\Beta\Model\DowngradeJustification")) {
                return $this->_propDict["downgradeJustification"];
            } else {
                $this->_propDict["downgradeJustification"] = new DowngradeJustification($this->_propDict["downgradeJustification"]);
                return $this->_propDict["downgradeJustification"];
            }
        }
        return null;
    }

    /**
    * Sets the downgradeJustification
    *
    * @param DowngradeJustification $val The value to assign to the downgradeJustification
    *
    * @return LabelingOptions The LabelingOptions
    */
    public function setDowngradeJustification($val)
    {
        $this->_propDict["downgradeJustification"] = $val;
         return $this;
    }

    /**
    * Gets the actionSource
    *
    * @return ActionSource The actionSource
    */
    public function getActionSource()
    {
        if (array_key_exists("actionSource", $this->_propDict)) {
            if (is_a($this->_propDict["actionSource"], "Microsoft\Graph\Beta\Model\ActionSource")) {
                return $this->_propDict["actionSource"];
            } else {
                $this->_propDict["actionSource"] = new ActionSource($this->_propDict["actionSource"]);
                return $this->_propDict["actionSource"];
            }
        }
        return null;
    }

    /**
    * Sets the actionSource
    *
    * @param ActionSource $val The value to assign to the actionSource
    *
    * @return LabelingOptions The LabelingOptions
    */
    public function setActionSource($val)
    {
        $this->_propDict["actionSource"] = $val;
         return $this;
    }

    /**
    * Gets the extendedProperties
    *
    * @return KeyValuePair The extendedProperties
    */
    public function getExtendedProperties()
    {
        if (array_key_exists("extendedProperties", $this->_propDict)) {
            if (is_a($this->_propDict["extendedProperties"], "Microsoft\Graph\Beta\Model\KeyValuePair")) {
                return $this->_propDict["extendedProperties"];
            } else {
                $this->_propDict["extendedProperties"] = new KeyValuePair($this->_propDict["extendedProperties"]);
                return $this->_propDict["extendedProperties"];
            }
        }
        return null;
    }

    /**
    * Sets the extendedProperties
    *
    * @param KeyValuePair $val The value to assign to the extendedProperties
    *
    * @return LabelingOptions The LabelingOptions
    */
    public function setExtendedProperties($val)
    {
        $this->_propDict["extendedProperties"] = $val;
         return $this;
    }
}