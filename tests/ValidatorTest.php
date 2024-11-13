<?php
use PHPUnit\Framework\TestCase;
require 'Validator.php';

class ValidatorTest extends TestCase {
    public function testIsEmailValid() {
        $validator = new Validator();
        $this->assertTrue($validator->isEmailValid("test@example.com"));
    }

    public function testIsEmailInvalid() {
        $validator = new Validator();
        $this->assertFalse($validator->isEmailValid("test@com"));
    }

    public function testIsEmailEmpty() {
        $validator = new Validator();
        $this->assertFalse($validator->isEmailValid(""));
    }
}
?>
