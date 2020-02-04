<?php

use PHPUnit\Framework\TestCase;

class TableTest extends TestCase {

    public $array;

    public function setUp() {

        $this->array = [];
    }

    public function testAddElement() {
        
        array_push($this->array, "str1");
        
        $this->assertEquals(1, count($this->array));
    }

    public function testRemoveElement() {
        
        array_push($this->array, "str1");
        
        $this->assertEquals(1, count($this->array));

        array_pop($this->array);
        
        $this->assertEquals(0, count($this->array));
    }
}