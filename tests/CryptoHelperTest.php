<?php
use PHPUnit\Framework\TestCase;
require 'CryptoHelper.php';

class CryptoHelperTest extends TestCase {
    public function testEncryptTextValid() {
        $crypto = new CryptoHelper();
        $this->assertEquals("khoor", $crypto->encryptText("hello", 3));
    }

    public function testEncryptTextEmpty() {
        $crypto = new CryptoHelper();
        $this->assertEquals("", $crypto->encryptText("", 3));
    }

    public function testEncryptTextNegativeKey() {
        $crypto = new CryptoHelper();
        $this->assertEquals("zab", $crypto->encryptText("abc", -1));
    }
}
?>
