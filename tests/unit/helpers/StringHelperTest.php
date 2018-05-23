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

    }
    public function testIsHexadecimal(){

    }
    public function testIsLowerCase(){

    }
    public function testIsUpperCase(){

    }
    public function testIsUUID(){

    }
    public function testLast(){

    }
    public function testLength(){

    }
    public function testLines(){

    }
    public function testLowerCaseFirst(){

    }
    public function testToKebabCase(){

    }
    public function testToCamelCase(){

    }
    public function testToPascalCase(){

    }
    public function testToSnakeCase(){

    }
    public function testSplit(){

    }
    public function testSplitOnWords(){

    }
    public function testStripHtml(){

    }
    public function testPadBoth(){

    }
    public function testPadLeft(){

    }
    public function testPadRight(){

    }
    public function testRandomString(){

    }
    public function testRandomStringWithChars(){

    }
    public function testRegexReplace(){

    }
    public function testRemoveLeft(){

    }
    public function testRemoveRight(){

    }
    public function testReplace(){

    }
    public function testReverse(){

    }
    public function testSafeTruncate(){

    }
    public function testStartsWith(){

    }
    public function testSubstr(){

    }
    public function testSwapCase(){

    }
    public function tesTtitleize(){

    }
    public function testToLowerCase(){

    }
    public function testToString(){

    }
    public function testToTitleCase(){

    }
    public function testTrim(){

    }
    public function testUpperCaseFirst(){

    }
    public function testUUID(){

    }
    public function testToAscii(){

    }
    public function testEncenc(){

    }
    public function testDecdec(){

    }
    public function testConvertToUtf8(){

    }
    public function testIsUtf8(){

    }
    //public function testEncoding(){

    //}
   // public function testContainsMb4(){

   // }
   // public function testEncodeMb4(){

   // }




}