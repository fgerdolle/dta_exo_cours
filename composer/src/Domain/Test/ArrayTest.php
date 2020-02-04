<?php

use PHPUnit\Framework\TestCase;

class ArrayTest extends TestCase {

    public function testArray() {
        
        $array = [];
        
        $this->assertEmpty($array);
        
        $array[] = "str1";
        
        $this->assertEquals(1, count($array));

        $array[] = "str2";
        
        $this->assertEquals(2, count($array));
    }
}