<?php
/**
 * Created by PhpStorm.
 * User: makeilalundy
 * Date: 6/19/18
 * Time: 10:21 AM
 */

namespace app\helpers;

use \craft\helpers\Search;

class SearchHelperTest extends \Codeception\TestCase\Test
{
    public function testNormalizeKeywords()
    {
        $str[] = ['Example','word','ex','hello'];
        $ignore[] = ['word'];

        $this->assertEquals('example ex hello', Search::normalizeKeywords($str,$ignore));


    }
}