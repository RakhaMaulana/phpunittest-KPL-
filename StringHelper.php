<?php
class StringHelper {
    public function reverseString($text) {
        if (is_string($text)) {
            return strrev($text);
        }
        return null; // Return null for non-string input
    }
}
?>
