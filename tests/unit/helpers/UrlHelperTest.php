<?php
/**
 * Created by PhpStorm.
 * User: makeilalundy
 * Date: 5/16/18
 * Time: 11:00 AM
 */

use \yii\helpers\Url;

class UrlHelperTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testIsAbsoluteUrl()
    {
        $this->assertEquals(true, Url::isAbsoluteUrl('www.google.com'));


    }

    public function testIsProtocolRelativeUrl(){

    }

    public function testIsRootRelativeUrl(){

    }

    public function testIsFullUrl(){

    }
    public function testUrlWithParams(){

    }

    public function testUrlWithToken(){

    }

    public function testUrlWithScheme(){

    }

    public function testUrl(){

    }
    public function testCpUrl(){

    }
    public function testSiteUrl(){

    }
    public function testActionUrl(){

    }
    public function testStripQueryString(){

    }
    public function testGetSchemeForTokenizedUrl(){

    }
    public function testBaseUrl(){

    }
    public function testBaseSiteUrl(){

    }



}