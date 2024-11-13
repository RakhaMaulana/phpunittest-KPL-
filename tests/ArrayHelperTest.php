<?php
use PHPUnit\Framework\TestCase;
require 'ArrayHelper.php';

class ArrayHelperTest extends TestCase {
    public function testCountUniqueElements() {
        $arrayHelper = new ArrayHelper();
        $this->assertEquals(5, $arrayHelper->countUniqueElements([1, 2, 3, 4, 5]));
    }

    public function testCountUniqueElementsWithDuplicates() {
        $arrayHelper = new ArrayHelper();
        $this->assertEquals(5, $arrayHelper->countUniqueElements([1, 2, 2, 3, 4, 4, 5]));
    }

    public function testCountUniqueElementsEmpty() {
        $arrayHelper = new ArrayHelper();
        $this->assertEquals(0, $arrayHelper->countUniqueElements([]));
    }
}
?>
