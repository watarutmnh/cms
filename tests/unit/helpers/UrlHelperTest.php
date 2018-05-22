<?php
/**
 * Created by PhpStorm.
 * User: makeilalundy
 * Date: 5/16/18
 * Time: 11:00 AM
 */



class UrlHelperTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */


    // tests
    public function testIsAbsoluteUrl()
    {
        $this->assertEquals(true, \craft\helpers\UrlHelper::isAbsoluteUrl('https://www.example.com'));
        $this->assertEquals(true, \craft\helpers\UrlHelper::isAbsoluteUrl('http://www.example.com'));
    }

    public function testIsProtocolRelativeUrl(){
        $this->assertEquals(true, \craft\helpers\UrlHelper::isProtocolRelativeUrl('//www.example.com/css/main.css'));
    }

    public function testIsRootRelativeUrl(){
        $this->assertEquals(true, \craft\helpers\UrlHelper::isRootRelativeUrl('/fruits/index.html'));
    }

    public function testIsFullUrl(){
        $this->assertEquals(true, \craft\helpers\UrlHelper::isFullUrl('/fruits/index.html'));
        $this->assertEquals(true, \craft\helpers\UrlHelper::isFullUrl('//www.example.com/css/main.css'));
        $this->assertEquals(true, \craft\helpers\UrlHelper::isFullUrl('http://www.google.com'));
        $this->assertEquals(true, \craft\helpers\UrlHelper::isFullUrl('https://www.google.com'));
    }
    public function testUrlWithParams(){
        $this->assertEquals('http://example.com?0=6&1=matt', \craft\helpers\UrlHelper::urlWithParams('http://example.com',['6','matt',]));
    }

    public function testUrlWithToken(){
        $this->assertEquals('http://example.com?token=token', \craft\helpers\UrlHelper::urlWithToken('http://example.com', 'token'));
    }

    public function testUrlWithScheme(){
        $this->assertEquals('scheme://example.com', \craft\helpers\UrlHelper::urlWithScheme('http://example.com', 'scheme'));
    }

    public function testUrl(){

    }
    public function testCpUrl(){
        $this->assertEquals('/index-test.php?p=admin/http://example.com&params', \craft\helpers\UrlHelper::cpUrl('http://example.com', 'params','scheme'));
    }
    public function testSiteUrl(){
        $this->assertEquals('/index-test.php?p=http://example.com&params', \craft\helpers\UrlHelper::siteUrl('http://example.com', 'params','scheme'));
    }
    public function testActionUrl(){
        $this->assertEquals('/index-test.php?p=actions/http://example.com&params', \craft\helpers\UrlHelper::actionUrl('http://example.com', 'params','scheme'));

    }
    public function testStripQueryString(){
        $this->assertEquals('http://example.com/', \craft\helpers\UrlHelper::stripQueryString('http://example.com/?@bar._=???/1:'));

    }
    public function testGetSchemeForTokenizedUrl(){
        $this->assertEquals('http', \craft\helpers\UrlHelper::getSchemeForTokenizedUrl());

    }
    public function testBaseUrl(){
        $this->assertEquals('/', \craft\helpers\UrlHelper::baseUrl());

    }
    public function testBaseSiteUrl(){
        $this->assertEquals('/', \craft\helpers\UrlHelper::baseSiteUrl());
    }



}