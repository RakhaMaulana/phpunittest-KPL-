<?php
class MathHelper {
    public function factorial($number) {
        if ($number < 0) {
            return "Invalid input"; // Handle negative numbers
        }
        if ($number === 0) {
            return 1; // 0! is 1
        }
        $result = 1;
        for ($i = 1; $i <= $number; $i++) {
            $result *= $i;
        }
        return $result;
    }
}
?>
