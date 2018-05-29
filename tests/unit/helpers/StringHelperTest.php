<?php
/**
 * Created by PhpStorm.
 * User: makeilalundy
 * Date: 5/22/18
 * Time: 2:25 PM
 */

namespace app\helpers;

use \craft\helpers\StringHelper;

class StringHelperTest extends \Codeception\TestCase\Test
{
    public function testCamelCase(){
        $this->assertEquals('iLikePie', StringHelper::camelCase('i like pie'));
    }
    public function testCharAsArray(){
        $this->assertEquals(['p','i','e'], StringHelper::charsAsArray('pie'));
    }
    public function testCollapseWhitespace(){
        $this->assertEquals('i like pie i like pie', StringHelper::collapseWhitespace('i    like   pie     i like    pie'));
    }
    public function testContains(){
        $this->assertEquals(true, StringHelper::contains('i like pieilike pie','pie'));
    }
    public function testContainsAny(){
        $this->assertEquals(true, StringHelper::containsAny('i likepieilike pie',['pie','i','li']));
    }
    public function testContainsAll(){
        $this->assertEquals(true, StringHelper::containsAll('i likepieilike pie',['pie','i','li']));
    }
    public function testCountSubstrings(){
        $this->assertEquals(4, StringHelper::countSubstrings('i like piepiepieilikepie','pie'));
    }
    public function testDelimit(){
        $this->assertEquals('i-like-pie', StringHelper::delimit('i Like Pie','-'));
    }
    public function testEndsWith(){
        $this->assertEquals(true, StringHelper::endsWith('i likepieilike pie','e'));
    }
    public function testEnsureLeft(){
        $this->assertEquals('di likepieilike pie', StringHelper::ensureLeft('i likepieilike pie','d'));
        $this->assertEquals('i likepieilike pie', StringHelper::ensureLeft('i likepieilike pie','i'));
    }
    public function testEnsureRight(){
        $this->assertEquals('di likepieilike pie', StringHelper::ensureLeft('i likepieilike pie','d'));
        $this->assertEquals('i likepieilike pie', StringHelper::ensureLeft('i likepieilike pie','i'));
    }
    public function testFirst(){
        $this->assertEquals('i li', StringHelper::first('i likepieilike pie',4));
    }
    public function testCharAt(){
        $this->assertEquals('k', StringHelper::charAt('i likepieilike pie',4));
    }
    public function testHasLowerCase(){
        $this->assertEquals(true, StringHelper::hasLowerCase('i LIKEPIEILIKE pie'));
    }
    public function testHasUpperCase(){
        $this->assertEquals(true, StringHelper::hasUpperCase('i LIKEPIEILIKE pie'));
    }
    public function testIndexOf(){
        $this->assertEquals(6, StringHelper::indexOf('i LIKEPIEILIKE pie','P'));
    }
    public function testIndexOfLast(){
        $this->assertEquals(15, StringHelper::indexOfLast('i LIKEPIEILIKE pie','p'));
    }
    public function testInsert(){
        $this->assertEquals('i LIKBOOMEPIEILIKE pie', StringHelper::insert('i LIKEPIEILIKE pie','BOOM',5));
    }
    public function testIsAlpha(){
        $this->assertEquals(true, StringHelper::isAlpha('iLIKEPIEILIKEpie'));
    }
    public function testIsAlphanumeric(){
        $this->assertEquals(true, StringHelper::isAlphanumeric('iLIKEPIEILIKEpie456'));
    }
    public function testIsWhitespace(){
        $this->assertEquals(true, StringHelper::isWhitespace('   '));
    }
    public function testIsHexadecimal(){
        $this->assertEquals(true, StringHelper::isHexadecimal('0123AafF'));
    }
    public function testIsLowerCase(){
        $this->assertEquals(true, StringHelper::isLowerCase('ilikepie'));
    }
    public function testIsUpperCase(){
        $this->assertEquals(true, StringHelper::isUpperCase('ILIKEPIE'));
    }
    public function testIsUUID(){
        $this->assertEquals(true, StringHelper::isUUID('123e4567-e89b-12d3-a456-426655440000'));
    }
    public function testLast(){
        $this->assertEquals('pie', StringHelper::last('ilikepie',3));
    }
    public function testLength(){
        $this->assertEquals(8, StringHelper::length('ilikepie'));
    }
   // public function testLines(){
    //    $this->assertEquals([['ilikepie'],['ilikepie']], StringHelper::Lines('ilikepie
    //     ilikepie'));
  //  }
    public function testLowerCaseFirst(){
        $this->assertEquals('ilikepie', StringHelper::lowercaseFirst('Ilikepie'));
    }
    public function testToKebabCase(){
        $this->assertEquals('i-like-pie', StringHelper::toKebabCase('i like pie'));
    }
    public function testToCamelCase(){
        $this->assertEquals('iLikePie', StringHelper::toCamelCase('i like pie'));
    }
    public function testToPascalCase(){
        $this->assertEquals('ILikePie', StringHelper::toPascalCase('i like pie'));
    }
    public function testToSnakeCase(){
        $this->assertEquals('i_like_pie', StringHelper::toSnakeCase('i like pie'));
    }
    public function testSplit(){
        $this->assertEquals(['i','like', 'pie'], StringHelper::split('i like pie', ' '));
    }

    public function testSplitOnWords(){
        $this->assertEquals(['i','like', 'pie', 'alot'], StringHelper::splitOnWords('i like pie alot'));
    }
    public function testStripHtml(){
        $this->assertEquals('i like pie alot', StringHelper::stripHtml('i like pie alot<h1></h1>'));
    }
   // public function testPadBoth(){
    //    $this->assertEquals('i like pie', StringHelper::padBoth('i like pie', 10, ' '));
    //}
   // public function testPadLeft(){

   // }
    //public function testPadRight(){

   // }
   // public function testRandomString(){
   //     $this->assertCount (38, StringHelper::randomString(36));
   // }
    public function testRandomStringWithChars(){

    }
    public function testRegexReplace(){

    }
    public function testRemoveLeft(){
        $this->assertEquals(' i like pie alot', StringHelper::removeLeft('pie i like pie alot','pie'));
    }
    public function testRemoveRight(){
        $this->assertEquals('i like pie ', StringHelper::removeRight('i like pie alot','alot'));
    }
    public function testReplace(){
        $this->assertEquals('i like pie BOOM', StringHelper::replace('i like pie alot','alot','BOOM'));
    }
    public function testReverse(){
        $this->assertEquals('tola eip ekil i', StringHelper::reverse('i like pie alot'));
    }
    public function testSafeTruncate(){
        $this->assertEquals('i like pie', StringHelper::safeTruncate('i like pie alot pie pie', 10));
    }
    public function testStartsWith(){
        $this->assertEquals(true, StringHelper::startsWith('i like pie alot pie pie', 'i'));
    }
    public function testSubstr(){
        $this->assertEquals('e pie alo', StringHelper::substr('i like pie alot pie pie', 5,9));
    }
    public function testSwapCase(){
        $this->assertEquals('I LIKE PIE', StringHelper::swapCase('i like pie'));
    }
    public function tesTtitleize(){
        $this->assertEquals('I LIKE PIE', StringHelper::swapCase('i like pie'));
    }
    public function testToLowerCase(){
        $this->assertEquals('i like pie', StringHelper::toLowerCase('I LIKE PIE'));
    }
    public function testToString(){
        $this->assertEquals('I,LIKE,PIE', StringHelper::toString(['I', 'LIKE' ,'PIE']));
    }
    public function testToTitleCase(){
        $this->assertEquals('I Like Pie', StringHelper::toTitleCase('i like pie'));
    }
    public function testTrim(){
        $this->assertEquals('i like pie', StringHelper::trim('i like pie       '));
    }
    public function testUpperCaseFirst(){
        $this->assertEquals('I like pie', StringHelper::upperCaseFirst('i like pie'));
    }
    public function testUUID(){
        $this->assertEquals(true, StringHelper::isUUID(StringHelper::UUID()));
    }
    //public function testAsciiCharMap(){

   // }
    public function testToAscii(){
        $this->assertEquals('i like pie ', StringHelper::toAscii('i like pie £££§÷→'));
    }
    //public function testEncenc(){
    //    $this->assertEquals('base64:Y3J5cHQ6nLUD0fyn8TMZjwsh2zNRNWMyOTIyNDYxNjRmZDE2YTIzZDIzNDM4ZDliOGU0NTNkYWRhZTBmNzc2M2UyMGVlZmJlNjdmYzNlN2M5YTcxYjjsXdnqLkz2ZvCLOlCWBePAR9HfTXiXt2nJI7umxSSBsQ==', StringHelper::encenc('i like pie'));
   // }
   // public function testDecdec(){
    //    $this->assertEquals('I LIKE PIE', StringHelper::toAscii('i like £££§÷→'));
  //  }
   // public function testConvertToUtf8(){

   // }
   // public function testIsUtf8(){

    //}
    //public function testEncoding(){

    //}
   // public function testContainsMb4(){

   // }
   // public function testEncodeMb4(){

   // }




}