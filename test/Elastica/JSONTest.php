<?php
namespace Elastica\Test;

use Elastica\JSON;
use PHPUnit\Framework\TestCase;
/**
 * JSONTest.
 *
 * @author Oleg Andreyev <oleg.andreyev@intexsys.lv>
 */
class JSONTest extends TestCase
{
    public function testStringifyMustNotThrowExceptionOnValid()
    {
        JSON::stringify([]);
    }

    public function testStringifyMustThrowExceptionNanOrInf()
    {
        $this->expectException(\Elastica\Exception\JSONParseException::class);
        $this->expectExceptionMessage('Inf and NaN cannot be JSON encoded');
        $arr = [NAN, INF];
        JSON::stringify($arr);
    }

    public function testStringifyMustThrowExceptionMaximumDepth()
    {
        $this->expectException(\Elastica\Exception\JSONParseException::class);
        $this->expectExceptionMessage('Maximum stack depth exceeded');
        $arr = [[[]]];
        JSON::stringify($arr, 0, 0);
    }
}
