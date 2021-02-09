<?php
/**
 * Created by PhpStorm.
 * User: bastienlaffon
 * Date: 09/02/2021
 * Time: 10:36
 */
use PHPUnit\Framework\TestCase;

class UnitTest extends TestCase
{
    public function testIfTrue()
    {
        $var= false;
        $this->assertSame(false,$var);

        $var= !$var;
        $this->assertSame(true,$var);
    }
}