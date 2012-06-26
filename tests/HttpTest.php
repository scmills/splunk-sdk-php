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

require_once 'Splunk.php';

class HttpTest extends PHPUnit_Framework_TestCase
{
    public function testGet()
    {
        $http = new Splunk_Http();
        $response = $http->get('http://www.splunk.com/');
        
        $this->assertEquals(200, $response->status);
        $this->assertContains('<head>', $response->body);
    }
}
