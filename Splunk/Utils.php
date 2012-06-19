<?php
/**
 * Copyright 2012 Splunk, Inc.
 * 
 * Licensed under the Apache License, Version 2.0 (the "License"): you may
 * not use this file except in compliance with the License. You may obtain
 * a copy of the License at
 * 
 *     http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

/**
 * Internal utilities used by the Splunk package.
 * 
 * @package Splunk
 */
class Splunk_Utils
{
    /**
     * @param SimpleXMLElement  $xmlElement
     * @param string            $xpathExpr
     * @return string|NULL
     */
    public static function getTextContentAtXpath($xmlElement, $xpathExpr)
    {
        $matchingElements = $xmlElement->xpath($xpathExpr);
        return (count($matchingElements) == 0)
            ? NULL
            : Splunk_Utils::getTextContentOfXmlElement($matchingElements[0]);
    }
    
    /**
     * @param SimpleXMLElement $xmlElement
     * @return string
     */
    private static function getTextContentOfXmlElement($xmlElement)
    {
        // HACK: Some versions of PHP 5 can't access the [0] element
        //       of a SimpleXMLElement object properly.
        return (string) $xmlElement;
    }
}
